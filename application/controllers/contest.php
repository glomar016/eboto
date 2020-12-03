<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contest extends CI_Controller {

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

		$this->load->view('user/contest');

    }
	
	public function add_contest()
	{
		// loading model that needed
		$this->load->model('database_model');
		// loading view 
		

		// getting data from input
		$contestName = $this->input->post('contestName');
		// $contestOrg = $this->input->post('contestOrg');
		$contestDescription = $this->input->post('contestDescription');
		$contestDateStart = $this->input->post('contestDateStart');
		$contestDateEnd = $this->input->post('contestDateEnd');

		// making data of assoc array to pass to model
		$data = array(
			"contestName" => $contestName, 
			"contestDescription" => $contestDescription,
			// "contestOrg" => $contestOrg, 
			"contestDateStart" =>$contestDateStart,
			"contestDateEnd" => $contestDateEnd
		);

		$this->database_model->create($data, "t_contest");
	}

	public function update_contest()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$contestName = $this->input->post('contestName');
		// $contestOrg = $this->input->post('contestOrg');
		$contestDateStart = $this->input->post('contestDateStart');
		$contestDateEnd = $this->input->post('contestDateEnd');

		// making data of assoc array to pass to model
		$data = array(
				"id" => $id, 
                "contestName" => $contestName, 
                "contestOrg" => $contestOrg, 
                "contestDateStart" => $contestDateStart,
                "contestDateEnd" => $contestDateEnd
		);

		// passing data to model
		$this->database_model->update($id, $data, "t_contest");
	}

	
	public function show_contest()
	{
		// loading model that needed
		
		$this->load->model('database_model');

		$data["data"] = $this->database_model->show('contestStatus', "t_contest");

	// 	$data = [];
	// 	foreach($query as $r) {
	// 		$data[] = array(
	// 			 $r['contestName'],
	// 			 $r['contestDescription'],
	// 			 $r['contestDateStart'],
	// 			 $r['contestDateEnd'],
	// 			 $r['contestOrg']
	// 		);
	//    }
 
	//    $result = array(
	// 			  "data" => $data
	// 		 );

		echo json_encode($data);

		// $this->load->view('user/contest', $data);


	}
	
	public function delete_contest()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "contestStatus", "t_contest");
	}


}
