<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Election extends CI_Controller {

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
		// loading model that needed
		$this->load->model('database_model');

		$data['data'] = $this->database_model->get_all('orgStatus', 'r_org');

		$this->load->view('admin/election', $data);

    }
	
	public function add_election()
	{
		// loading model that needed
		$this->load->model('database_model');
		// loading view 
		

		// getting data from input
		$electionName = $this->input->post('electionName');
		$electionOrg = $this->input->post('electionOrg');
		$electionDescription = $this->input->post('electionDescription');
		$electionDateStart = $this->input->post('electionDateStart');
		$electionDateEnd = $this->input->post('electionDateEnd');
		$electionDateEnd = date("Y-m-d H:i:s", strtotime('+23 hours +59 minutes +59 seconds', strtotime($electionDateEnd)));


		// making data of assoc array to pass to model
		$data = array(
			"electionName" => $electionName, 
			"electionDescription" => $electionDescription,
			"electionOrg" => $electionOrg, 
			"electionDateStart" =>$electionDateStart,
			"electionDateEnd" => $electionDateEnd
		);

		$this->database_model->create($data, "t_election");
	}

	public function update_election()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$electionName = $this->input->post('editelectionName');
		$electionOrg = $this->input->post('editelectionOrg');
		$electionDescription = $this->input->post('editelectionDescription');
		$electionDateStart = $this->input->post('editelectionDateStart');
		$electionDateEnd = $this->input->post('editelectionDateEnd');
		$electionDateEnd = date("Y-m-d H:i:s", strtotime('+23 hours +59 minutes +59 seconds', strtotime($electionDateEnd)));


		// making data of assoc array to pass to model
		$data = array(
				"electionName" => $electionName, 
				"electionDescription" => $electionDescription,
                "electionOrg" => $electionOrg, 
                "electionDateStart" => $electionDateStart,
                "electionDateEnd" => $electionDateEnd
		);

		print_r($data);

		// passing data to model
		$this->database_model->update($id, $data, "t_election");
	}

	
	public function show_election()
	{
		// loading model that needed
		$this->load->helper('date');
		
		$this->load->model('database_model');

		$dateToday = mdate("%Y-%m-%d %h:%i:%s");

		$data["data"] = $this->database_model->show('electionStatus', "t_election", "r_org", "electionOrg", "electionDateEnd", $dateToday);

		echo json_encode($data);

	}
	
	public function delete_election()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "electionStatus", "t_election");
	}

	// get data to pass data to edit modal
	public function get_election($id)
	{

		$this->load->model('database_model');

		$data = $this->database_model->get($id, 't_election');

		echo json_encode($data);
	}

	public function view_election($id)
	{
		$this->load->model('database_model');

		$data['data']= $this->database_model->get($id, 't_election');

		$this->load->view('admin/election_view', $data);
	}


}
