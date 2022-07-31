<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	} 

	function index(){
        if($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 1){
            $data['_view'] = 'dashboard';
            $this->load->view('layouts/main',$data);
        }
        elseif($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 2){
            $data['_view'] = 'dashboard';
            $this->load->view('layouts/main2',$data);
        }else{
            $data['_view'] = 'dashboard';
            $this->load->view('layouts/main3',$data);
        }
	}
}
