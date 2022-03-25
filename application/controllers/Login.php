<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');

	}

    public function index()
	{
		$this->load->view('login');
	}

	public function auth(){
		$username = input_post('username');
		$password = input_post('password');
		if($username == ''){
			$data = ['target' => 'username', 'type' => 'warning', 'size' => 'mini', 'text' => 'Username tidak boleh kosong'];
			echo json_encode($data);
			exit();
		}elseif($password == ''){
			$data = ['target' => 'password', 'type' => 'warning', 'size' => 'mini', 'text' => 'Password tidak boleh kosong'];
			echo json_encode($data);
			exit();
		}
		if ($this->security->xss_clean($username, TRUE) === TRUE && $this->security->xss_clean($password, TRUE) === TRUE) {
			$cek =  $this->Login_model->check($username, $password);
		if($cek) {
			$data = [
			'id' => $cek->id,
			'username' => $cek->username,
			'is_login' => 1,
			'role_id' => $cek->role_id,

			];
			$this->session->set_userdata($data);
			if($cek->role_id == 1){
				$data = ['status' => 'true', 'url' => base_url('dashboard'), 'text' => 'Login berhasil. silahkan tunggu, anda sedang dialihkan..'];
			}
			if($cek->role_id == 2 || $cek->role_id == 3 || $cek->role_id == 5){
				$data = ['status' => 'true', 'url' => base_url('welcome'), 'text' => 'Login berhasil. mohon tunggu, anda sedang dialihkan..'];
				$this->session->set_flashdata('message', 'HI, WELCOME BACK');
			}
			echo json_encode($data);
		} else {
			$data = ['type' => 'error', 'size' => 'mini', 'text' => 'Username / password anda salah'];
			echo json_encode($data);
		}
		}else{
			$data = ['type' => 'error', 'size' => 'mini', 'text' => 'Ops, Nampaknya anda mencoba menyisipkan script berbahaya.'];
			echo json_encode($data);
		}
	}
	function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('role_id');
		$this->session->sess_destroy();
		redirect(base_url());
	}
	function access_denied()
	{
		echo "anda tidak punya akses ke halaman ini, jika anda seharusnya memiliki akses silahkan hubungi administrator";
	}
}