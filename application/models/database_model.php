<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_model extends CI_Model {


    // -- CRUD --
    // CREATING 
    function create($data, $tableName)
    {
        // inserting assoc array to db
        return $this->db->insert($tableName, $data);
    }

    // get the views of datatables for specific election/contest/poll
    function show($statusColumn, $tableName, $tableName2, $fkColumn, $dateEnd, $dateToday){
        $this->db->select("*, $tableName.id, $tableName2.id AS $tableName2".'_id');
        $this->db->from($tableName);
        $this->db->join($tableName2, $tableName.'.'.$fkColumn.' = '.$tableName2.'.id', 'left');
        $this->db->where($statusColumn, "1");
        $this->db->where("$dateEnd >=", $dateToday);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // get the views of any tables
    function view($statusColumn, $tableName){
        $this->db->select("*");
        $this->db->from($tableName);
        $this->db->where($statusColumn, "1");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // UPDATE
    function update($id, $data, $tableName)
    {
        $this->db->where("id", $id);
        return $this->db->update($tableName, $data);
    }

    // DISABLE
    function delete($id, $statusColumn, $tableName){
        $this->db->set($statusColumn, '0');
        $this->db->where("id", $id);
        $this->db->update($tableName);
    }


    // GET
    function get($id, $tableName)
    {
        $this->db->select("*");
        $this->db->where("id", $id);
        $this->db->from($tableName);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // -- END OF CRUD --


    // query to get all restriction
    function get_all($statusColumn, $tableName)
    {
        $this->db->select("*");
        $this->db->where($statusColumn, "1");
        $this->db->from($tableName);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }


    // query to get candidate of election, contestant of contest, option of poll
    function show_options($referenceID, $referenceColumn, $statusColumn, $tableName){
        $this->db->select("*");
        $this->db->where($referenceColumn, $referenceID);
        $this->db->where($statusColumn, "1");
        $this->db->from($tableName);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    function get_two_table($statusColumn, $tableName, $tableName2, $fkColumn)
    {
        $this->db->select("*, $tableName.id, $tableName2.id AS $tableName2".'_id');
        $this->db->from($tableName);
        $this->db->join($tableName2, $tableName.'.'.$fkColumn.' = '.$tableName2.'.id', 'left');
        $this->db->where($statusColumn, "1");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
}
