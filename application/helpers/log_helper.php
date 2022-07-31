<?php
function helper_log($tipe = "", $str = ""){
    $CI =& get_instance();
 
    if (strtolower($tipe) == "login"){
        $log_tipe   = 0;
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe   = 1;
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe   = 2;
    }
    elseif(strtolower($tipe) == "edit"){
        $log_tipe  = 3;
    }
    elseif(strtolower($tipe) == "remove"){
        $log_tipe  = 4;
    }
    elseif(strtolower($tipe) == "download"){
        $log_tipe  = 5;
    }
    else{
        $log_tipe  = 6;
    }
 
    // paramter
    $param['pengguna']      = $CI->session->userdata('username');
    $param['tipe']			= $log_tipe;
    $param['keterangan']    = $str;
 
    //load model log
    $CI->load->model('Log_model');
 
    //save to database
    $CI->Log_model->save_log($param);
 
}
?>
