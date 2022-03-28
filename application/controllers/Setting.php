<?php
/**
 *
 */
class Setting extends CI_controller
{

  function __construct()
  {
    parent::__construct();
    has_privilege($this->uri->segment(1));
  }
  
  function change_password()
    {
      $old = input_post('old_password');
      $new = input_post('new_password');
      $re = input_post('re_password');

      if($old == ""){}
      if($new == ""){}
      if($re  == ""){}
      $cek = ci_get_where('users', ['id' => $this->session->userdata()['id'], 'password' => md5($old)])->num_rows();
      
      if($old == "")
      {
        echo json_encode(array('type'=>'warning', 'msg' => 'password lama harus diisi')); die();
      }else{
        if($cek == 0)
        {
          echo json_encode(array('type'=>'warning', 'msg' => 'password lama anda tidak benar'));
        }else{
          if($new == "")
          {
            echo json_encode(array('type'=>'warning', 'msg' => 'password baru harus diisi')); die();
          }elseif ($re == "") {
            echo json_encode(array('type'=>'warning', 'msg' =>  'ulangi password harus diisi')); die();
          }elseif ($new != $re) {
            echo json_encode(array('type'=>'warning', 'msg' =>  'ulangi password tidak cocok')); die();

          }else{
            ci_update('users', ['password' => md5($new)], ['id' => $this->session->userdata()['id']]);
            // $sender = 'cs@lsp-daimaru.id';
  			// 		$pesan = 'Halo untuk akses '.userdata()->nama.' web sertifikasi. username : admin password : '.input_post('new_password');
  	        // $post = '{"personalizations": [{"to": [{"email": "syamsuddine9@gmail.com"}],"subject": "Information Change Password"}],"from": {"email": "'.$sender.'"},"content": [{"type": "text/plain","value": "'.$pesan.'"}]}';
  	        // sendgrid_api_text('https://api.sendgrid.com/v3/mail/send',$post);
            echo json_encode(array('type' => 'success', 'msg' => 'Password berhasil diubah'));
          }
        }
      }

    }
}