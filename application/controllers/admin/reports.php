<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reports extends CI_Controller {

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

		$this->load->view('admin/reports');
	}

	public function view($tableName)
	{
		if($tableName == 'election'){
			$this->load->view('admin/election_vote_reports');
		}
		if($tableName == 'contest'){
			$this->load->view('admin/contest_vote_reports');
		}
		if($tableName == 'poll'){
			$this->load->view('admin/poll_vote_reports');
		}
	}
    
	public function get_election_votes()
	{
		$this->load->model('reports_model');

		$data['data'] = $this->reports_model->get_all_election_votes();

		echo json_encode($data);

	}

	public function get_contest_votes()
	{
		$this->load->model('reports_model');

		$data['data'] = $this->reports_model->get_all_contest_votes();

		echo json_encode($data);

	}

	public function get_poll_votes()
	{
		$this->load->model('reports_model');

		$data['data'] = $this->reports_model->get_all_poll_votes();

		echo json_encode($data);

	}

	public function get_specific_votes($id, $tableName)
	{
		$this->load->model('reports_model');

		if($tableName == "t_election"){
			$data['data'] = $this->reports_model->get_specific_election_votes($id);
		}
		if($tableName == "t_ep"){
			$data['data'] = $this->reports_model->get_specific_ep_votes($id);
		}
		else if($tableName == "t_contest"){
			$data['data'] = $this->reports_model->get_specific_contest_votes($id);
		}
		else if($tableName == "t_poll"){
			$data['data'] = $this->reports_model->get_specific_poll_votes($id);
		}

		

		echo json_encode($data);
	}
}
