<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contestant extends CI_Controller {

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

		$this->load->view('admin/contest_view');

    }
	
    public function add_contestant()
    {
        $this->load->model('database_model');
		// loading view 
		

		// getting data from input
		$id = $this->input->post('id');
		$contestantName = $this->input->post('contestantName');
		$contestantDescription = $this->input->post('contestantDescription');


		// making data of assoc array to pass to model
		if(isset($_FILES["contestantImage"]["name"]))
		{
			$config['upload_path'] = './resources/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			
			$this->load->library('image_lib');
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('contestantImage'))
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
                    'contestantContestID ' => $id,
					'contestantName' => $contestantName,
					'contestantDescription' => $contestantDescription,
                    'contestantImage' => $data['file_name'],
                    // 'path' => $data['full_path']
					 );

				print_r($insert_data);
				$this->database_model->create($insert_data, "t_contestant");
			}
		}
	}
	
	// function to pass data to datatables
	public function show_contestant($refID)
	{
		// loading model that needed
		$this->load->helper('date');
		
		$this->load->model('database_model');

		$data["data"] = $this->database_model->show_options($refID, 'contestantContestID', 'contestantStatus', 't_contestant');

		echo json_encode($data);
	}

	public function delete_contestant()
	{
		// loading model that needed
		$this->load->model('database_model');


		$id = $this->input->get('id');
		$this->database_model->delete($id, "contestantStatus", "t_contestant");
	}

		// get data to pass data to edit modal
	public function get_contestant($id)
	{

		$this->load->model('database_model');

		$data = $this->database_model->get($id, 't_contestant');

		echo json_encode($data);
	}

	public function update_contestant()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$contestantName = $this->input->post('editcontestantName');
		$contestantDescription = $this->input->post('editcontestantDescription');

		if(isset($_FILES["editcontestantImage"]["name"]))
		{
			$config['upload_path'] = './resources/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			
			$this->load->library('image_lib');
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('editcontestantImage'))
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
					'contestantName' => $contestantName,
					'contestantDescription' => $contestantDescription,
                    'contestantImage' => $data['file_name'],
                    // 'path' => $data['full_path']
					 );
				
				print_r($insert_data);
				$this->database_model->update($id, $insert_data, "t_contestant");
			}
		}
	}

	public function view_contestant($id)
	{
		$this->load->model('database_model');

		$data['data']= $this->database_model->get($id, 't_contestant');

		$this->load->view('admin/contestant_view', $data);
	}

}
