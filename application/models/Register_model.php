<?php

class Register_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function register($username,$password)
    {
        $data = array(
            'username' => $username,
            'password' => md5($password),
            'role_id' => 2,
        );
        $this->db->insert('users',$data);
    }
    function register_peserta($nama_lengkap,$email,$alamat,$jenis_kelamin)
    {
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
        );
        $this->db->insert('peserta',$data);
    }
}