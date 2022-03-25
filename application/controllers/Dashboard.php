<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
        has_privilege($this->uri->segment(1));

	}

    function index() {
        $data = ['konten' => 'template/admin/konten'];
        $this->load->view('template/admin/app', $data);
    }

}