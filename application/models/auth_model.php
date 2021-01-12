<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    function login($data)
    {
        $condition = "userStudentNo =" . "'" . $data['userStudentNo'] . "' AND " . "userPassword =" . "'" . $data['userPassword'] . "'";
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }

    function read_user_information($userStudentNo) {

        $condition = "userStudentNo =" . "'" . $userStudentNo . "'";
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } 
        else {
            return false;
        }
    }

    function forgot_password($userStudentNo, $email){
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where('userStudentNo', $userStudentNo);
        $this->db->where('userEmail', $email);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return 1;
        } 
        else {
            return 0;
        }

    }

    function get_user_info($userStudentNo, $email){
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where('userStudentNo', $userStudentNo);
        $this->db->where('userEmail', $email);
        $this->db->limit(1);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

}
