<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partylist extends CI_Controller {

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

		$this->load->view('admin/ep_view');

    }
	
    public function add_partylist()
    {
        $this->load->model('database_model');
		// loading view 
		

		// getting data from input
		$id = $this->input->post('id');
		$partylistName = $this->input->post('partylistName');
		$partylistDescription = $this->input->post('partylistDescription');


		// making data of assoc array to pass to model
		if(isset($_FILES["partylistImage"]["name"]))
		{
			$config['upload_path'] = './resources/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			
			$this->load->library('image_lib');
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('partylistImage'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$configer =  array(
					'image_library'   => 'gd2',
					'source_image'    =>  $data['full_path'],
					'maintain_ratio'  =>  FALSE,
					'width'           =>  300,
					'height'          =>  300,
				  );
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$insert_data = array(
                    'partylistElectionID' => $id,
					'partylistName' => $partylistName,
					'partylistDescription' => $partylistDescription,
                    'partylistImage' => $data['file_name'],
                    // 'path' => $data['full_path']
					 );

				print_r($insert_data);
				$this->database_model->create($insert_data, "t_partylist");
			}
		}
	}
	
	// function to pass data to datatables
	public function show_partylist($refID)
	{
		// loading model that needed
		$this->load->helper('date');
		
		$this->load->model('database_model');

		$data["data"] = $this->database_model->show_options($refID, 'partylistElectionID', 'partylistStatus', 't_partylist');

		echo json_encode($data);
	}

	public function delete_partylist()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "partylistStatus", "t_partylist");
	}

		// get data to pass data to edit modal
	public function get_partylist($id)
	{

		$this->load->model('database_model');

		$data = $this->database_model->get($id, 't_partylist');

		echo json_encode($data);
	}

	public function update_partylist()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$partylistName = $this->input->post('editpartylistName');
		$partylistDescription = $this->input->post('editpartylistDescription');

		if(isset($_FILES["editpartylistImage"]["name"]))
		{
			$config['upload_path'] = './resources/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			
			$this->load->library('image_lib');
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('editpartylistImage'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$configer =  array(
					'image_library'   => 'gd2',
					'source_image'    =>  $data['full_path'],
					'maintain_ratio'  =>  FALSE,
					'width'           =>  300,
					'height'          =>  300,
				  );
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$insert_data = array(
					'partylistName' => $partylistName,
					'partylistDescription' => $partylistDescription,
                    'partylistImage' => $data['file_name'],
                    // 'path' => $data['full_path']
					 );
				
				print_r($insert_data);
				$this->database_model->update($id, $insert_data, "t_partylist");
			}
		}
	}

	public function view_partylist($id)
	{
		$this->load->model('database_model');

		$data['data']= $this->database_model->get($id, 't_partylist');

		$this->load->view('admin/partylist_view', $data);
	}

}
