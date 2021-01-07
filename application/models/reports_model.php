<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {

    function get_all_election_votes(){
        $this->db->select("electionName
                        , candidateName 
                        , (userFirstName+' '+userLastName+' ') AS voterName
                        , userStudentNo
                        , FORMAT(voteDateCreated, 'MMM dd, yyyy - hh:mm tt') as voteDateCreated");
        $this->db->from('t_vote_candidate');
        $this->db->join('t_election', 't_election.id = t_vote_candidate.vote_electionID', 'left');
        $this->db->join('t_user', 't_user.id = t_vote_candidate.vote_userID', 'left');
        $this->db->join('t_candidate', 't_candidate.id = t_vote_candidate.vote_candidateID', 'left');
        $this->db->order_by('voteDateCreated', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    function get_all_contest_votes(){
        $this->db->select("contestName
                        , contestantName 
                        , (userFirstName+' '+userLastName+' ') AS voterName
                        , userStudentNo
                        , FORMAT(voteDateCreated, 'MMM dd, yyyy - hh:mm tt') as voteDateCreated");
        $this->db->from('t_vote_contestant');
        $this->db->join('t_contest', 't_contest.id = t_vote_contestant.vote_contestID', 'left');
        $this->db->join('t_user', 't_user.id = t_vote_contestant.vote_userID', 'left');
        $this->db->join('t_contestant', 't_contestant.id = t_vote_contestant.vote_contestantID', 'left');
        $this->db->order_by('voteDateCreated');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    function get_all_poll_votes(){
        $this->db->select("pollName
                        , optionName 
                        , (userFirstName+' '+userLastName+' ') AS voterName
                        , userStudentNo
                        , FORMAT(voteDateCreated, 'MMM dd, yyyy - hh:mm tt') as voteDateCreated");
        $this->db->from('t_vote_option');
        $this->db->join('t_poll', 't_poll.id = t_vote_option.vote_pollID', 'left');
        $this->db->join('t_user', 't_user.id = t_vote_option.vote_userID', 'left');
        $this->db->join('t_option', 't_option.id = t_vote_option.vote_optionID', 'left');
        $this->db->order_by('voteDateCreated');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
}
