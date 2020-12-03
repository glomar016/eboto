<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_election_model extends CI_Model {

    
    // CREATING ELECTION
    function add_election(
                $electionName, 
                $electionOrganization, 
                $dateStart,
                $dateEnd)
    {
        $data = array(
            "electionName" => $electionName,
            "electionOrganization"=> $electionOrganization,
            "electionDateStart" => $dateStart,
            "electionDateEnd" => $dateEnd
        );

        return $this->db->insert("t_election", $data);
    }

    // UPDATE ELECTION
    function update_election(
                $id, 
                $electionName, 
                $electionOrganization, 
                $dateStart,
                $dateEnd
        ){
        $data = array(
            "id" => $id,
            "electionName" => $electionName,
            "electionOrganization"=> $electionOrganization,
            "electionDateStart" => $dateStart,
            "electionDateEnd" => $dateEnd
        );

        $this->db->where("id", $id);
        return $this->db->update("t_election", $data);
    }

    // SHOW ELECTION
    function show_election($id){
        $this->db->select("*");
        $this->db->from("t_election");
        $this->db->where("electionStatus", "1");
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }


    // DISABLE ELECTION
    function delete_election($id){
        $this->db->set("electionStatus", "0");
        $this->db->where("id", $id);
        $this->db->insert("t_election");
    }


    // function show_election($tableName, $id){
    //     $this->db->limit(1);
    //     $this->db->select("*");
    //     $this->db->from($tableName);
    //     $this->db->where("id", $id);
    //     $this->db->order_by("id", "desc");

    //     $query = $this->db->get();
    //     $data = $query->row_array();

    //     return $data;
    // }
}
