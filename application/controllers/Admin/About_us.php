<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {
    function __construct(){
		parent::__construct();
        has_privilege($this->uri->segment(1));
        $this->load->model('About_model');
        $this->load->library('pagination');
	}

    function index(){
        $data = ['konten' => 'template/admin/about/index'];
        $this->load->view('template/admin/app',$data);
    }

    function datagrid(){
        $this->db->select('*');
        $this->db->from('t_about');
        $query = $this->db->get()->result(); 
        $data['record'] = $query;
        
        $view = $this->load->view('template/admin/about/grid',$data,TRUE);
        echo json_encode([
            'tabel' => $view
        ]);
    }

    function tambah(){
        $data = ['about' => ci_get('t_about')->result()];
        $view = $this->load->view('template/admin/about/tambah',TRUE);
        echo json_encode($view);
    }

    function edit($id){
        $data = [
            'about' => ci_get_where('t_about',['id'=>$id])->row(),
        ];

        $view = $this->load->view('template/admin/about/edit',$data,TRUE);
        echo json_encode($view);
    }

    function save($id = ""){
        $data = [
          'about_us' => input_post('about_us'),
          'address' => input_post('address'),
          'phone' => input_post('phone'),
          'email' => input_post('email'),
          'linkedin' => input_post('linkedin'),
        ];
    
        if($id == ""){
          ci_insert('t_about', $data);
          $data = ['type' => 'success', 'msg' => 'Data berhasi disimpan'];
          echo json_encode($data);
        }else {
          ci_update('t_about', $data, ['id' => $id]);
          $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasi diupdate'];
          echo json_encode($data);
        }
    }
    
    function hapus($id){
        $data = ci_delete('t_about',['id'=>$id]);
        if($data){
            $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil di hapus'];
        echo json_encode($data);
        }
    }
}