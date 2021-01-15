<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		$this->load->model('auth_model');

		if (isset($this->session->userdata['logged_in'])) {
            $userStudentNo = ($this->session->userdata['logged_in']['userStudentNo']);
			$userId = ($this->session->userdata['logged_in']['userId']);
			
			$data['userInfo'] = $result = $this->auth_model->get_user_information($userId);

			$this->load->view('user/profile', $data);
		}
		else {
            header("location: ".base_url()."user/login");
    	}

		
	}
	
	public function change_email()
	{
		$this->load->model('auth_model');

		$newEmail = $this->input->post('newEmail');

		echo $newEmail;

		if (isset($this->session->userdata['logged_in'])) {
            $userStudentNo = ($this->session->userdata['logged_in']['userStudentNo']);
            $userId = ($this->session->userdata['logged_in']['userId']);
        }

		$data['userInfo'] = $result = $this->auth_model->change_email($userId, $newEmail);
	}

	public function change_password()
	{
		$this->load->model('auth_model');

		$newPassword = $this->input->post('newPassword');

		if (isset($this->session->userdata['logged_in'])) {
            $userStudentNo = ($this->session->userdata['logged_in']['userStudentNo']);
            $userId = ($this->session->userdata['logged_in']['userId']);
        }

		$data['userInfo'] = $result = $this->auth_model->change_password($userId, $newPassword);
	}
	
    

}
