<?php


function userdata()
{
  $ci = get_instance();
  if($ci->session->userdata('role_id') == 1){
    return $ci->db->get_where('users')->row();
  }
}
