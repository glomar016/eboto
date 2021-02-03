<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ep extends CI_Controller {

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

		$this->load->view('admin/ep', $data);

    }
	
	public function add_ep()
	{
		// loading model that needed
		$this->load->model('database_model');
		// loading view 
		
		// getting data from input
		$epName = $this->input->post('epName');
		$epOrg = $this->input->post('epOrg');
		$epPassword = $this->input->post('epPassword');
		$epDescription = $this->input->post('epDescription');
		$epDateStart = $this->input->post('epDateStart');
		$epDateEnd = $this->input->post('epDateEnd');
		$epDateEnd = date("Y-m-d H:i:s", strtotime('+23 hours +59 minutes +59 seconds', strtotime($epDateEnd)));


		// making data of assoc array to pass to model
		$data = array(
			"epName" => $epName, 
			"epDescription" => $epDescription,
			"epOrg" => $epOrg, 
			"epDateStart" =>$epDateStart,
			"epDateEnd" => $epDateEnd,
			"epPassword" => $epPassword
		);

		$this->database_model->create($data, "t_ep");
	}

	public function update_ep()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$epName = $this->input->post('editepName');
		$epOrg = $this->input->post('editepOrg');
		$epDescription = $this->input->post('editepDescription');
		$epDateStart = $this->input->post('editepDateStart');
		$epDateEnd = $this->input->post('editepDateEnd');
		$epDateEnd = date("Y-m-d H:i:s", strtotime('+23 hours +59 minutes +59 seconds', strtotime($epDateEnd)));


		// making data of assoc array to pass to model
		$data = array(
				"epName" => $epName, 
				"epDescription" => $epDescription,
                "epOrg" => $epOrg, 
                "epDateStart" => $epDateStart,
                "epDateEnd" => $epDateEnd
		);

		print_r($data);

		// passing data to model
		$this->database_model->update($id, $data, "t_ep");
	}

	
	public function show_ep()
	{
		// loading model that needed
		$this->load->helper('date');
		
		$this->load->model('database_model');

		$dateToday = mdate("%Y-%m-%d %h:%i:%s");

		$data["data"] = $this->database_model->show('epStatus', "t_ep", "r_org", "epOrg", "epDateEnd", $dateToday);

		echo json_encode($data);


	}
	
	public function delete_ep()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "epStatus", "t_ep");
	}

	public function get_ep($id)
	{

		$this->load->model('database_model');

		$data = $this->database_model->get($id, 't_ep');

		echo json_encode($data);
	}

	public function view_ep($id)
	{
		$this->load->model('database_model');

		$data['data']= $this->database_model->get($id, 't_ep');

		$this->load->view('admin/ep_view', $data);
	}

	public function get_private()
	{
		$this->load->model('database_model');

		$data = $this->database_model->get_private();

		echo json_encode($data);
	}

}
