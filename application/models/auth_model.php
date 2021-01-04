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

    public function read_user_information($userStudentNo) {

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

}
