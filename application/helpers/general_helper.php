<?php 
    function input_post($field)
    {
        $ci = get_instance();
        return $ci->input->post($field);
    }
    function dump($data){
        highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");die();
    }
?>