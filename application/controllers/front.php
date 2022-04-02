<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('about_model');
	}

    public function index(){
        $data = ['konten' => 'template/front/index'];
        $this->load->view('template/front/app',$data);
    }
    public function about_us(){
        $data = [
            'data' => $this->about_model->data_view(),
            'konten' => 'template/front/about_us'];
        $this->load->view('template/front/app',$data);
    }
}