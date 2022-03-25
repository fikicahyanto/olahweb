<?php

class About_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function data_view(){
        $this->db->select('*');
        $this->db->from('t_about');
        $query = $this->db->get()->result();
        return $query;
    }
}