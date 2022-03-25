<?php

function has_privilege($path)
{
  $ci = get_instance();
  if(!$ci->session->userdata('username'))
  {
    redirect('login', 'refresh');
  }
  else
  {
    $role_id = $ci->session->userdata('role_id');
    $getMenu = $ci->db->get_where('users',['role_id' => $role_id])->row_array();
    // $getMenu = $ci->db->get_where('user_menu', ['menu' => $path])->row_array();
    // $getSubMenu = $ci->db->get_where('user_access_submenu', ['sub_id' => $path])->row();
    $menu_id = $getMenu['id'];

    // $aksesMenu  = $ci->db->get_where('user_access_menu', [
    //   'role_id' => $role_id,
    //   'menu_id' => $menu_id
    // ]);

    //   $aksesSubMenu  = $ci->db->get_where('user_access_submenu', [
    //     'role_id' => $role_id,
    //     'sub_id' => $path
    //   ]);
    if ($menu_id > 1)
    {
      redirect('login/access_denied');
    }
  }
}

function check_access($role_id, $menu_id)
{
  $ci = get_instance();
  $acces = $ci->db->get_where('user_access_menu', [
    'role_id' => $role_id,
    'menu_id' => $menu_id
  ]);

  if($acces->num_rows() > 0)
  {
    return "checked='checked'";
  }


}
