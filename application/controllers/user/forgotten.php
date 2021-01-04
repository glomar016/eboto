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
	public function index()
	{
		$this->load->view('user/forgotten');
    }

    public function send_email()
    {
        $studentNumber = '2018-00232-CM-0';
        $studentPassword = '123456';

        $this->load->library('email');

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 587,
            'smtp_user' => 'pup.eboto@gmail.com',
            'smtp_pass' => 'passwordforPUPeboto',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('pup_eboto@gmail.com', 'PUP Eboto');
        $this->email->to('jrglomar016@gmail.com');

        $this->email->subject('Forgotten Password');
        $this->email->message('Student Number: '.$studentNumber);

        $result = $this->email->send();

        echo $this->email->print_debugger();
    }
    
    

}
