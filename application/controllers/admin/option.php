<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class option extends CI_Controller {

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

		$this->load->view('admin/election_view');

    }
	
    public function add_option()
    {
        $this->load->model('database_model');
		// loading view 
		

		// getting data from input
		$id = $this->input->post('id');
		$optionName = $this->input->post('optionName');

        $insert_data = array(
            'optionPollID' => $id,
            'optionName' => $optionName
            // 'path' => $data['full_path']
             );

        print_r($insert_data);
        $this->database_model->create($insert_data, "t_option");
    }


}
