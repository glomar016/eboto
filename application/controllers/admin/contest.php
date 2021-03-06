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

		$data['data'] = $this->database_model->get_all('orgStatus', 'r_org');

		$this->load->view('admin/contest', $data);

    }
	
	public function add_contest()
	{
		// loading model that needed
		$this->load->model('database_model');
		// loading view 
		
		// getting data from input
		$contestName = $this->input->post('contestName');
		$contestOrg = $this->input->post('contestOrg');
		$contestPassword = $this->input->post('contestPassword');
		$contestDescription = $this->input->post('contestDescription');
		$contestLimit = $this->input->post('contestLimit');
		$contestDateStart = $this->input->post('contestDateStart');
		$contestDateEnd = $this->input->post('contestDateEnd');
		$contestDateEnd = date("Y-m-d H:i:s", strtotime('+23 hours +59 minutes +59 seconds', strtotime($contestDateEnd)));


		// making data of assoc array to pass to model
		$data = array(
			"contestName" => $contestName, 
			"contestDescription" => $contestDescription,
			"contestLimit" => $contestLimit,
			"contestOrg" => $contestOrg, 
			"contestDateStart" =>$contestDateStart,
			"contestDateEnd" => $contestDateEnd,
			"contestPassword" => $contestPassword
		);

		$this->database_model->create($data, "t_contest");
	}

	public function update_contest()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$contestName = $this->input->post('editcontestName');
		$contestOrg = $this->input->post('editcontestOrg');
		$contestDescription = $this->input->post('editcontestDescription');
		$contestLimit = $this->input->post('editcontestLimit');
		$contestDateStart = $this->input->post('editcontestDateStart');
		$contestDateEnd = $this->input->post('editcontestDateEnd');
		$contestDateEnd = date("Y-m-d H:i:s", strtotime('+23 hours +59 minutes +59 seconds', strtotime($contestDateEnd)));


		// making data of assoc array to pass to model
		$data = array(
				"contestName" => $contestName, 
				"contestDescription" => $contestDescription,
				"contestLimit" => $contestLimit,
                "contestOrg" => $contestOrg, 
                "contestDateStart" => $contestDateStart,
                "contestDateEnd" => $contestDateEnd
		);

		print_r($data);

		// passing data to model
		$this->database_model->update($id, $data, "t_contest");
	}

	
	public function show_contest()
	{
		// loading model that needed
		$this->load->helper('date');
		
		$this->load->model('database_model');

		$dateToday = mdate("%Y-%m-%d %h:%i:%s");

		$data["data"] = $this->database_model->show_admin('contestStatus', "t_contest", "r_org", "contestOrg", "contestDateEnd", $dateToday);

		echo json_encode($data);


	}
	
	public function delete_contest()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "contestStatus", "t_contest");
	}

	public function get_contest($id)
	{

		$this->load->model('database_model');

		$data = $this->database_model->get($id, 't_contest');

		echo json_encode($data);
	}

	public function view_contest($id)
	{
		$this->load->model('database_model');

		$data['data']= $this->database_model->get($id, 't_contest');

		$this->load->view('admin/contest_view', $data);
	}

	public function get_private()
	{
		$this->load->model('database_model');

		$data = $this->database_model->get_private();

		echo json_encode($data);
	}

}
