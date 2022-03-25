<?php $this->load->view('template/admin/header');?>
<?php $this->load->view('template/admin/menu');?>
<?php if($this->uri->segment(1) != 'dashboard'){
$this->load->view('template/admin/toolbar');
}?>
<?php $this->load->view($konten);?>
<?php $this->load->view('template/admin/footer');?>