<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
        $this->load->model('database_model');
		$this->load->helper('date');
		
		$session = 1;

		// Check if already logged in
		if($session != 1){
			$this->load->view('user/login');
			echo 'something';
		}
		else{

			$dateToday = mdate("%Y-%m-%d %h:%i:%s");

			$data['election'] = $this->database_model->show('electionStatus', 't_election', 'r_org', 'electionOrg', 'electionDateEnd', $dateToday);
			$data['contest'] = $this->database_model->show('contestStatus', 't_contest', 'r_org', 'contestOrg', 'contestDateEnd', $dateToday);
			$data['poll'] = $this->database_model->show('pollStatus', 't_poll', 'r_org', 'pollOrg', 'pollDateEnd', $dateToday);

			// Sort by date end
			$electionDateEnd = array_column($data['election'], 'electionDateEnd');
			array_multisort($data['election'], SORT_DESC, $electionDateEnd);

			$contestDateEnd = array_column($data['contest'], 'contestDateEnd');
			array_multisort($data['contest'], SORT_DESC, $contestDateEnd);

			$pollDateEnd = array_column($data['poll'], 'pollDateEnd');
			array_multisort($data['poll'], SORT_DESC, $pollDateEnd);

			$this->load->view('user/vote', $data);
		}
    }
	
	public function view($id, $tableName, $refColumn, $columnStatus, $refTableName)
	{
		$this->load->model('database_model');

		$userId = ($this->session->userdata['logged_in']['userId']);
		
		if($tableName == 't_candidate'){
			$check = $this->database_model->already_voted($userId, $id, 'vote_electionID', 't_vote_candidate');
		}
		else if($tableName == 't_contestant'){
			$check = $this->database_model->already_voted($userId, $id, 'vote_contestID', 't_vote_contestant');
		}
		else if($tableName == 't_option'){
			$check = $this->database_model->already_voted($userId, $id, 'vote_pollID', 't_vote_option');
		}


		// Condition to check if user already voted
		if($check == 1){
			$this->load->view('user/already_voted');
		}
		else{
			$data['data'] = $this->database_model->get_candidate($id, $tableName, $refColumn, $columnStatus);
			$data['table'] = ['tableName' => $tableName];
			$data['refTable'] = $id;
			$data['refInfo'] = $this->database_model->get($id, $refTableName);
			$this->load->view('user/view', $data);
			
		}
	}
	
	public function vote_candidate()
	{
		$this->load->model('database_model');

		// $data['data'] = $this->database_model->function()
		$data = $this->input->post("selected");
		$refTableID = $this->input->post('refTableID');
		$vote_userID = $this->input->post('vote_userID');

		// echo $selected;
		print_r($data);
		echo $refTableID;
		
		foreach($data as $candidateID){
			$this->database_model->insert_vote($candidateID, 'vote_candidateID', $refTableID, 'vote_electionID', 't_vote_candidate', $vote_userID);
		}
	}

	public function vote_contestant()
	{
		$this->load->model('database_model');

		// $data['data'] = $this->database_model->function()
		$data = $this->input->post("selected");
		$refTableID = $this->input->post('refTableID');
		$vote_userID = $this->input->post('vote_userID');

		// echo $selected;
		print_r($data);
		echo $refTableID;
		
		$this->database_model->insert_vote($data, 'vote_contestantID', $refTableID, 'vote_contestID', 't_vote_contestant', $vote_userID);
	}

	public function vote_option()
	{
		$this->load->model('database_model');

		// $data['data'] = $this->database_model->function()
		$data = $this->input->post("selected");
		$refTableID = $this->input->post('refTableID');
		$vote_userID = $this->input->post('vote_userID');

		// echo $selected;
		print_r($data);
		echo $refTableID;
		
		$this->database_model->insert_vote($data, 'vote_optionID', $refTableID, 'vote_pollID', 't_vote_option', $vote_userID);
	}

	// This is to check if user is already voted to election/contest/poll/
	public function already_voted($userId, $tableId, $refTableName, $tableName)
	{
		$this->load->model('database_model');

		$data = $this->database_model->already_voted($userId, $tableId, $refTableName, $tableName);

		echo $data;

	}


}
