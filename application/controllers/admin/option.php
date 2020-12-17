<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Option extends CI_Controller {

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

		$this->load->view('admin/poll_view');

    }
	
    public function add_option()
    {
        $this->load->model('database_model');
		// loading view 
		

		// getting data from input
		$id = $this->input->post('id');
		$optionName = $this->input->post('optionName');


		// making data of assoc array to pass to model

				$insert_data = array(
                    'optionpollID' => $id,
					'optionName' => $optionName,
					 );

				print_r($insert_data);
				$this->database_model->create($insert_data, "t_option");
			
	}
	
	// function to pass data to datatables
	public function show_option($refID)
	{
		// loading model that needed
		$this->load->helper('date');
		
		$this->load->model('database_model');

		$data["data"] = $this->database_model->show_options($refID, 'optionpollID', 'optionStatus', 't_option');

		echo json_encode($data);
	}

	public function delete_option()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "optionStatus", "t_option");
	}

		// get data to pass data to edit modal
	public function get_option($id)
	{

		$this->load->model('database_model');

		$data = $this->database_model->get($id, 't_option');

		echo json_encode($data);
	}

	public function update_option()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$optionName = $this->input->post('editoptionName');

				$insert_data = array(
					'optionName' => $optionName,
					 );
				
				print_r($insert_data);
				$this->database_model->update($id, $insert_data, "t_option");
	}

	public function view_option($id)
	{
		$this->load->model('database_model');

		$data['data']= $this->database_model->get($id, 't_option');

		$this->load->view('admin/option_view', $data);
	}

}
