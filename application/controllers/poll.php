<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poll extends CI_Controller {

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

		$this->load->view('user/poll');

    }
	
	public function add_poll()
	{
		// loading model that needed
		$this->load->model('database_model');
		// loading view 
		

		// getting data from input
		$pollName = $this->input->post('pollName');
		// $pollOrg = $this->input->post('pollOrg');
		$pollDescription = $this->input->post('pollDescription');
		$pollDateStart = $this->input->post('pollDateStart');
		$pollDateEnd = $this->input->post('pollDateEnd');

		// making data of assoc array to pass to model
		$data = array(
			"pollName" => $pollName, 
			"pollDescription" => $pollDescription,
			// "pollOrg" => $pollOrg, 
			"pollDateStart" =>$pollDateStart,
			"pollDateEnd" => $pollDateEnd
		);

		$this->database_model->create($data, "t_poll");
	}

	public function update_poll()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$pollName = $this->input->post('pollName');
		// $pollOrg = $this->input->post('pollOrg');
		$pollDateStart = $this->input->post('pollDateStart');
		$pollDateEnd = $this->input->post('pollDateEnd');

		// making data of assoc array to pass to model
		$data = array(
				"id" => $id, 
                "pollName" => $pollName, 
                "pollOrg" => $pollOrg, 
                "pollDateStart" => $pollDateStart,
                "pollDateEnd" => $pollDateEnd
		);

		// passing data to model
		$this->database_model->update($id, $data, "t_poll");
	}

	
	public function show_poll()
	{
		// loading model that needed
		
		$this->load->model('database_model');

		$data["data"] = $this->database_model->show('pollStatus', "t_poll");

	// 	$data = [];
	// 	foreach($query as $r) {
	// 		$data[] = array(
	// 			 $r['pollName'],
	// 			 $r['pollDescription'],
	// 			 $r['pollDateStart'],
	// 			 $r['pollDateEnd'],
	// 			 $r['pollOrg']
	// 		);
	//    }
 
	//    $result = array(
	// 			  "data" => $data
	// 		 );

		echo json_encode($data);

		// $this->load->view('user/poll', $data);


	}
	
	public function delete_poll()
	{
		// loading model that needed
		$this->load->model('database_model');

		$id = $this->input->get('id');
		$this->database_model->delete($id, "pollStatus", "t_poll");
	}


}
