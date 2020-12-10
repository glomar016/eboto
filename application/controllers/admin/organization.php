<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {

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
		$this->load->model('database_model');
		$this->load->view('admin/organization');
	}
	
	public function add_organization()
	{
		// loading model that needed
		$this->load->model('database_model');
		$organizationName = $this->input->post('organizationName');


		if(isset($_FILES["organizationLogo"]["name"]))
		{
			$config['upload_path'] = './resources/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			
			$this->load->library('image_lib');
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('organizationLogo'))
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
					'width'           =>  250,
					'height'          =>  250,
				  );
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$insert_data = array(
					'orgName' => $organizationName,
                    'orgLogo' => $data['file_name'],
                    // 'path' => $data['full_path']
					 );
					 
				$this->database_model->create($insert_data, "r_org");
			}
		}
	}
    

}
