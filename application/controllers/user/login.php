<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('user/login');
    }
	
	public function submit()
	{
		$this->load->model('auth_model');

		$userStudentNo = $this->input->post('userStudentNo');
		$userPassword = $this->input->post('userPassword');

		$this->form_validation->set_rules('userStudentNo', 'Student Number', 'required');
		$this->form_validation->set_rules('userPassword', 'Password', 'required');

			if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					redirect(base_url().'user/vote', 'refresh');
				}
				else{
					$this->load->view('user/login');
				}
			} 
			else {
				$data = array(
					'userStudentNo' => $this->input->post('userStudentNo'),
					'userPassword' => $this->input->post('userPassword')
					);
				$result = $this->auth_model->login($data);

				
				if ($result == TRUE) {
					$userStudentNo = $this->input->post('userStudentNo');
					$userPassword = $this->input->post('userPassword');
					
					$result = $this->auth_model->read_user_information($userStudentNo);
						if ($result != FALSE) {
							$session_data = array(
								'userStudentNo' => $result[0]->userStudentNo,
								'userPassword' => $result[0]->userPassword,
								'userId' => $result[0]->id,
								'userType' => $result[0]->userType,
								);
						// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);

						if($result[0]->userType == 1){
							redirect(base_url().'user/vote', 'refresh');
						}
						else if($result[0]->userType == 2){
							redirect(base_url().'admin/dashboard', 'refresh');
						}
						
					}
				} 
				else {
					$data['error'] = array(
						'error_message' => 'Invalid Username or Password'
					);
					$this->load->view('user/login', $data);
					}
				}
			}
		
		


		// Load to vote page
		
		// 
    

}
