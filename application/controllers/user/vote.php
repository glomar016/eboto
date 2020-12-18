<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

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

        $data['election'] = $this->database_model->get_two_table('electionStatus', 't_election', 'r_org', 'electionOrg');
        $data['contest'] = $this->database_model->get_two_table('contestStatus', 't_contest', 'r_org', 'contestOrg');
        $data['poll'] = $this->database_model->get_two_table('pollStatus', 't_poll', 'r_org', 'pollOrg');

		$this->load->view('user/vote', $data);
    }
    
    

}
