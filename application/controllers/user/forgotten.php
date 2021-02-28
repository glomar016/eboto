<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotten extends CI_Controller {

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
    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

	public function index()
	{
		$this->load->view('user/forgotten');
    }

    public function check_exist(){
        $this->load->model('auth_model');

        $studentNumber = $this->input->post('studentNumber');
        $email = $this->input->post('email');

        $data = $this->auth_model->forgot_password($studentNumber, $email);

        echo $data;
        
    }

    public function send_mail()
    {
        $this->load->model('auth_model');

        $studentNumber = $this->input->post('studentNumber');
        $email = $this->input->post('email');

        // Get user info
        $data = $this->auth_model->get_user_info($studentNumber, $email);
        $name = $data[0]->userFirstName.' '.$data[0]->userMiddleName.' '.$data[0]->userLastName;
        $password = $data[0]->userPassword; 
        $filename = base_url().'resources/images/icon/eLogoFont.png';
        $this->email->attach($filename);
        $cid = $this->email->attachment_cid($filename);

        
        $htmlContent = ' 
        <html> 
            <head> 
                <title>Welcome to PUP-Eboto</title> 
            </head> 
            <body style="background-color: #800000"> 
            <div style="text-align: center;">
                <img src="cid:' .$cid.'">
                <h3 style="color:white">Hi '. $data[0]->userFirstName.'!</h3> 
                <h2 style="color:white;">Here is your account details</h2> 
            </div>
                      <h4 style="text-align: center; color:white; margin:0px;">Name: '. $name. '</h4>
                      <h4 style="text-align: center; color:white; margin:0px;">Email: '. $email. '</h4>
                      <h4 style="text-align: center; color:white; margin:0px">Password: '. $password. '</h4>
            </body> 
        </html>';
        

        $this->email->from('pup_eboto@gmail.com', 'PUP E-Boto');
        $this->email->to($email);

        $this->email->subject('Forgotten Password (PUP E-Boto)');
        $this->email->message($htmlContent);

        $this->email->send();

    }
    
    

}
