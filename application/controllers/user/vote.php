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


        $dateToday = mdate("%Y-%m-%d %h:%i:%s");

        $data['election'] = $this->database_model->show('electionStatus', 't_election', 'r_org', 'electionOrg', 'electionDateEnd', $dateToday);
        $data['contest'] = $this->database_model->show('contestStatus', 't_contest', 'r_org', 'contestOrg', 'contestDateEnd', $dateToday);
        $data['poll'] = $this->database_model->show('pollStatus', 't_poll', 'r_org', 'pollOrg', 'pollDateEnd', $dateToday);

		$this->load->view('user/vote', $data);
    }
	
	public function view($id, $tableName, $refColumn, $columnStatus)
	{
		$this->load->model('database_model');

		$data['data'] = $this->database_model->get_candidate($id, $tableName, $refColumn, $columnStatus);

		$data['table'] = ['tableName' => $tableName];

		$data['refTable'] = $id;

		$this->load->view('user/view', $data);
	}
	
	public function vote_candidate()
	{
		$this->load->model('database_model');

		// $data['data'] = $this->database_model->function()
		$data = $this->input->post("selected");
		$refTableID = $this->input->post('refTableID');

		// echo $selected;
		print_r($data);
		echo $refTableID;
		
		foreach($data as $candidateID){
			$this->database_model->insert_vote($candidateID, 'vote_candidateID', $refTableID, 'vote_electionID', 't_vote_candidate');
		}
	}

}
