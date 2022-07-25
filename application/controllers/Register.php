<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('register_model');
	}

    public function index(){
        $this->load->view('register');
    }

    function proses(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $email = $this->input->post('email');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $this->register_model->register($username,$password);
            $this->register_model->register_peserta($nama_lengkap,$email,$alamat,$jenis_kelamin);
        if($username != ""){
            $this->session->set_flashdata('success_register','pendaftaran user berhasil');
            redirect('login');
        }else{
            $this->session->set_flashdata('error','Pendaftaran gagal');
            redirect('register');
        }
    }
}