<?php

class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function check($username,$password)
    {
        $cek = $this->db->get_where('users',['username' => $username, 'password' => md5($password)])->row();
        if($cek){
            return $cek;
        }else{
            return false;
        }
    }
}