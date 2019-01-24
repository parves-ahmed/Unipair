<?php
include_once "db/db_class.php";



class ClientUniversity
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }



    public function getService()
    {
        $query = "SELECT uni_id,unvname,faculty,service FROM university_tbl  group by service DESC";
        $getFc = $this->db->select($query);
        return $getFc;
    }

    public function getFaculty()
    {
        $query = "SELECT uni_id,unvname,faculty FROM university_tbl  group by faculty DESC";
        $getFc = $this->db->select($query);
        return $getFc;
    }

    public function getUniversity()
    {
        $query = "SELECT * FROM university_tbl";
        $getFc = $this->db->select($query);
        return $getFc;
    }






}