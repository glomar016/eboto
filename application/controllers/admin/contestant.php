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
		$contestantPosition = $this->input->post('contestantPosition');
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
					'maintain_ratio'  =>  TRUE,
					'width'           =>  300,
					'height'          =>  300,
				  );
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$insert_data = array(
                    'contestantContestID' => $id,
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


}
