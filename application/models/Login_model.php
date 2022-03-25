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
        // var_dump($cek);die();
        if($cek){
            return $cek;
        }else{
            return false;
        }
    }
}