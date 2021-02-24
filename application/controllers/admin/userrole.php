<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userrole extends CI_Controller {

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
		$this->load->view('admin/userrole');
    }
    
    public function add_user()
	{
		$this->load->helper('string');
		// loading model that needed
		$this->load->model('database_model');
		$userFirstName = $this->input->post('userFirstName');
		$userMiddleName = $this->input->post('userMiddleName');
		$userLastName = $this->input->post('userLastName');
		$userStudentNo = $this->input->post('userStudentNo');
		$userEmail = $this->input->post('userEmail');
		$userCourse = $this->input->post('userCourse');
		$userType = $this->input->post('userType');

		$userPassword = random_string('alnum', 8);

		$insert_data = array(
			'userFirstName' => $userFirstName,
			'userMiddleName' => $userMiddleName,
			'userLastName' => $userLastName,
			'userStudentNo' => $userStudentNo,
			'userEmail' => $userEmail,
			'userCourse' => $userCourse,
			'userType' => $userType,
			'userPassword' => $userPassword
			);

		print_r($insert_data);
		$this->database_model->create($insert_data, "t_user");
	}

	public function show_user()
	{
		$this->load->model('database_model');
		
		$data["data"] = $this->database_model->view_user('userStatus', "t_user");

		echo json_encode($data);


	}
	
	
	public function delete_user()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "userStatus", "t_user");
	}

	public function activate_user()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->activate($id, "userStatus", "t_user");
	}

	public function get_user($id)
	{
		$this->load->model('database_model');

		$data = $this->database_model->get($id, 't_user');

		echo json_encode($data);
	}

	public function update_user()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$userFirstName = $this->input->post('edituserFirstName');
		$userMiddleName = $this->input->post('edituserMiddleName');
		$userLastName = $this->input->post('edituserLastName');
		$userStudentNo = $this->input->post('edituserStudentNo');
		$userEmail = $this->input->post('edituserEmail');
		$userCourse = $this->input->post('edituserCourse');
		$userType = $this->input->post('edituserType');
		

		$insert_data = array(
			'userFirstName' => $userFirstName,
			'userMiddleName' => $userMiddleName,
			'userLastName' => $userLastName,
			'userStudentNo' => $userStudentNo,
			'userEmail' => $userEmail,
			'userCourse' => $userCourse,
			'userType' => $userType,
		);
		
		print_r($insert_data);
		$this->database_model->update($id, $insert_data, "t_user");

	}

}

