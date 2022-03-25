<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('template/front/header');
		$this->load->view('template/front/body');
		$this->load->view('template/front/footer');
	}
}
