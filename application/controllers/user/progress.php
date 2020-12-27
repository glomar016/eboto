<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progress extends CI_Controller {

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
        $this->load->helper('date');

        $refTableID = $this->uri->segment(4);
        $tableName = $this->uri->segment(5);


        // Array of participants
        $participants = [];
        $data['data'] = Array();

        // Get participants details for getting each name of it
        if($tableName == 't_candidate'){
            $temp = $this->database_model->get_candidate($refTableID, $tableName, 'candidateElectionID', 'candidateStatus');
            foreach($temp as $row){
                array_push($participants, $row->id);
            }
            foreach($participants as $name){
                $res = $this->database_model->get_votes($name, "t_vote_candidate", "t_candidate", "vote_candidateID", "candidateName");
                foreach($res as $row){
                    array_unshift($data['data'], $row);
                }
            }
            
        }

        else if($tableName == 't_contestant'){
            $temp = $this->database_model->get_candidate($refTableID, $tableName, 'contestantContestID', 'contestantStatus');
            foreach($temp as $row){
                array_push($participants, $row->id);
            }
            foreach($participants as $name){
                $res = $this->database_model->get_votes($name, "t_vote_contestant", "t_contestant", "vote_contestantID", "contestantName");
                foreach($res as $row){
                    array_unshift($data['data'], $row);
                }
            }
        }

        else if($tableName == 't_option'){
            $temp = $this->database_model->get_candidate($refTableID, $tableName, 'optionPollID', 'optionStatus');

            foreach($temp as $row){
                array_push($participants, $row->id);
            }
            foreach($participants as $name){
                $res = $this->database_model->get_votes($name, "t_vote_option", "t_option", "vote_optionID", "optionName");
                foreach($res as $row){
                    array_unshift($data['data'], $row);
                }
            }
        }
        
        $sum = 0;

        foreach($data['data'] as $row){
            $sum += intval($row->vote_counts);
        }

        foreach($data['data'] as $k=>$v){
            $percentage = (intval($v->vote_counts) / $sum) * 100;
            $v->vote_percentage = $percentage;
        }

        arsort($data['data']);

		$this->load->view('user/progress', $data);
    }
	
	

}
