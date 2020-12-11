<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('user/home');
	}

	// public function election()
	// {
	// 	$this->load->view('election');
	// }

	// function base_url_sample(){
		
	// 	$this->load->model('database_model');
	// 	$data['UserData'] = $this->database_model->select_table("t_user");
	// 	// $data['anotherdataname'] =

	// 	// foreach($data as $row){
	// 	// 	echo $row['userFirstName'];
	// 	// 	// echo $row->userFirstName;
	// 	// }

	// 	// $firstUser =  $this->database_model->select_specific_data("t_user","1'");
	// 	// echo $firstUser['userFirstName'];
	// 	$this->load->view('user_page', $data);
	// }

	// function form_post(){
	// 	$userFirstName = $this->input->post("UserFirstName");

	
	// 	$result = $this->database_model->insert($userFirstName);
	// 	if($result){

	// 	}
	// }
}
