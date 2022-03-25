<?php 
    function input_post($field)
    {
        $ci = get_instance();
        return $ci->input->post($field);
    }
?>