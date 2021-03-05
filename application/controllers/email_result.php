<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_result extends CI_Controller {

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

        $currDate = date("Y-m-d 00:00:00");
        $endDate = date("Y-m-d H:i:s", strtotime('-1 day', strtotime($currDate)));

		$data['election'] = $this->database_model->get_result('t_election', 'electionDateEnd', $currDate, $endDate, 'electionStatus');

        $filename = base_url().'resources/images/icon/emailLogo.png';
        $this->email->attach($filename);
        $cid = $this->email->attachment_cid($filename);
        // Election Loop
        foreach($data['election'] as $election){
            $refTableID = $election->id;
    
            $data['votes'] = $this->database_model->get_candidate_votes($refTableID, 'candidateElectionID'
                                                                , "t_candidate", "t_vote_candidate"
                                                                , "vote_candidateID", "candidateName");
    
            $htmlResult = "";
            foreach($data['votes'] as $votes){
                $htmlResult .= '
                    <p style="text-align:center; color:white; margin:0px;">'. $votes->candidateName. '
                    - '. $votes->candidatePosition. '
                    <br>Vote Counts: <strong>'. $votes->vote_counts. '</strong>
                    Percentage: <strong>'. $votes->vote_percentage. '%</strong></p><br>
                ';
            }
            
            $data['user'] = $this->database_model->view('userStatus', 't_user');

    
            // End of User Loop
            foreach($data['user'] as $user){
                $htmlContent = ' 
                <html> 
                    <head> 
                        <title>Welcome to PUP-Eboto</title> 
                    </head> 
                    <body style="background-color: yellow; max-width:550px; margin:auto;">  
                    <div style="margin:50px; background-color:#800000">
                        <div style="text-align: center; margin:0px; padding:0px;">
                        <br><br>
                            <img src="cid:' .$cid.'">
                            <h3 style="color:white">Hi '. $user->userFirstName.'!</h3> 
                            <h2 style="color:white"; margin:0px>Here is the result of </h2> 
                            <h1 style="text-align: center; color:yellow; margin:0px;">'. $election->electionName. '</h1>
                        </div>
                        <div style="color:white; text-align:center">
                            <br>
                                '.$htmlResult.'<br>
                        </div> 
                    </div>
                         
                    </body> 
                </html>';
                
    
                $this->email->from('pup_eboto@gmail.com', 'PUP E-Boto');
                $this->email->to($user->userEmail);
    
                $this->email->subject('Result is here! (PUP E-Boto)');
                $this->email->message($htmlContent);
    
                $this->email->send();
            }
            // User Loop
            
        }
        // End of Election Loop

        

        
    }

    function ep_result(){
            $currDate = date("Y-m-d 00:00:00");
            $endDate = date("Y-m-d H:i:s", strtotime('+1 day', strtotime($currDate)));

            $filename = base_url().'resources/images/icon/emailLogo.png';
            $this->email->attach($filename);
            $cid = $this->email->attachment_cid($filename);

            $data['ep'] = $this->database_model->get_result('t_ep', 'epDateEnd', $currDate, $endDate, 'epStatus');

            // Ep Loop
        foreach($data['ep'] as $ep){
            $eprefTableID = $ep->id;
            echo $eprefTableID;
    
            $data['ep_votes'] = $this->database_model->get_candidate_votes($eprefTableID, 'candidateEpID'
                                                                , "t_candidate", "t_vote_ep_candidate"
                                                                , "vote_candidateID", "candidateName");
            $htmlResult = "";
            foreach($data['ep_votes'] as $votes){
                $htmlResult .= '
                    <p style="text-align:center; color:white; margin:0px;">'. $votes->candidateName. '
                    - '. $votes->candidatePosition. '
                    <br>Vote Counts: <strong>'. $votes->vote_counts. '</strong>
                    Percentage: <strong>'. $votes->vote_percentage. '%</strong></p><br>
                ';
            }
            
            $data['user'] = $this->database_model->view('userStatus', 't_user');
    
            
            // End of User Loop
            foreach($data['user'] as $user){
                $htmlContent = ' 
                <html> 
                    <head> 
                        <title>Welcome to PUP-Eboto</title> 
                    </head> 
                    <body style="background-color: yellow; max-width:550px; margin:auto;">  
                    <div style="margin:50px; background-color:#800000">
                        <div style="text-align: center; margin:0px;">
                        <br><br>
                            <img src="cid:' .$cid.'">
                            <h3 style="color:white">Hi '. $user->userFirstName.'!</h3> 
                            <h2 style="color:white">Here is the result of </h2> 
                            <h1 style="text-align: center; color:yellow; margin:0px;">'. $ep->epName. '</h1>
                        </div>
                        <div style="color:white; text-align:center">
                        '.$htmlResult.'<br>
                        </div>
                    </div>
                    </body> 
                </html>';
                
    
                $this->email->from('pup_eboto@gmail.com', 'PUP E-Boto');
                $this->email->to($user->userEmail);
    
                $this->email->subject('Result is here! (PUP E-Boto)');
                $this->email->message($htmlContent);
    
                $this->email->send();
            }
            // User Loop
            
        }
        // End of Ep Loop
    }
    function contest_result(){
            $currDate = date("Y-m-d 00:00:00");
            $endDate = date("Y-m-d H:i:s", strtotime('+1 day', strtotime($currDate)));

            $filename = base_url().'resources/images/icon/emailLogo.png';
            $this->email->attach($filename);
            $cid = $this->email->attachment_cid($filename);
    
            $data['contest'] = $this->database_model->get_result('t_contest', 'contestDateEnd', $currDate, $endDate, 'contestStatus');

        // contest Loop
        foreach($data['contest'] as $contest){
            $refTableID = $contest->id;
    
            $data['votes'] = $this->database_model->get_votes($refTableID, 'contestantContestID'
                                                                , "t_contestant", "t_vote_contestant"
                                                                , "vote_contestantID", "contestantName");
    
            $htmlResult = "";
            foreach($data['votes'] as $votes){
                $htmlResult .= '
                    <p style="text-align:center; color:white; margin:0px;">'. $votes->contestantName. '
                    - 
                    <br>Vote Counts: <strong>'. $votes->vote_counts. '</strong>
                    Percentage: <strong>'. $votes->vote_percentage. '%</strong></p><br>
                ';
            }
            
            $data['user'] = $this->database_model->view('userStatus', 't_user');
    
          
            // End of User Loop
            foreach($data['user'] as $user){
                $htmlContent = ' 
                <html> 
                    <head> 
                        <title>Welcome to PUP-Eboto</title> 
                    </head> 
                    <body style="background-color: yellow; max-width:550px; margin:auto;">  
                    <div style="margin:50px; background-color:#800000">
                        <div style="text-align: center; margin:0px;">
                        <br>
                            <img src="cid:' .$cid.'">
                            <h3 style="color:white">Hi '. $user->userFirstName.'!</h3> 
                            <h2 style="color:white">Here is the result of </h2> 
                            <h1 style="text-align: center; color:yellow; margin:0px;">'. $contest->contestName. '</h1>
                        </div>
                        <div style="color:white; text-align:center">
                            <br>
                        '.$htmlResult.'<br>
                        </div>
                    </div>
                    </body> 
                </html>';
                
    
                $this->email->from('pup_eboto@gmail.com', 'PUP E-Boto');
                $this->email->to($user->userEmail);
    
                $this->email->subject('Result is here! (PUP E-Boto)');
                $this->email->message($htmlContent);
    
                $this->email->send();
            }
            // User Loop
            
        }
        // End of contest Loop

    }


    function poll_result(){

            $currDate = date("Y-m-d 00:00:00");
            $endDate = date("Y-m-d H:i:s", strtotime('+1 day', strtotime($currDate)));

            $data['poll'] = $this->database_model->get_result('t_poll', 'pollDateEnd', $currDate, $endDate, 'pollStatus');

            $filename = base_url().'resources/images/icon/emailLogo.png';
            $this->email->attach($filename);
            $cid = $this->email->attachment_cid($filename);
    

        
            // poll Loop
        foreach($data['poll'] as $poll){
            $refTableID = $poll->id;
    
            $data['votes'] = $this->database_model->get_votes($refTableID, 'optionPollID'
                                                                , "t_option", "t_vote_option"
                                                                , "vote_optionID", "optionName");
    
            $htmlResult = "";
            foreach($data['votes'] as $votes){
                $htmlResult .= '
                    <p style="text-align:center; color:white; margin:0px;">'. $votes->optionName. '
                    -
                    <br>Vote Counts: <strong>'. $votes->vote_counts. '</strong>
                    Percentage: <strong>'. $votes->vote_percentage. '%</strong></p><br>
                ';
            }
            
            $data['user'] = $this->database_model->view('userStatus', 't_user');

    
            // End of User Loop
            foreach($data['user'] as $user){
                $htmlContent = ' 
                <html> 
                    <head> 
                        <title>Welcome to PUP-Eboto</title> 
                    </head> 
                    <body style="background-color: yellow; max-width:550px; margin:auto;">  
                    <div style="margin:50px; background-color:#800000">
                        <div style="text-align: center; margin:2px;">
                            <br>
                            <img src="cid:' .$cid.'">
                            <h3 style="color:white">Hi '. $user->userFirstName.'!</h3> 
                            <h2 style="color:white">Here is the result of </h2> 
                            <h1 style="text-align: center; color:yellow; margin:0px;">'. $poll->pollName. '</h1>
                        </div>
                        <div style="color:white; text-align:center">
                            <br>
                        '.$htmlResult.'<br>
                        </div>
                    </div>
                    </body> 
                </html>';
                
    
                $this->email->from('pup_eboto@gmail.com', 'PUP E-Boto');
                $this->email->to($user->userEmail);
    
                $this->email->subject('Result is here! (PUP E-Boto)');
                $this->email->message($htmlContent);
    
                $this->email->send();
            }
            // User Loop
            
        }
        // End of poll Loop
    }
        
}
