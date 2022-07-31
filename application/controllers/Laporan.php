<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Siswa_model');
        $this->load->model('Peminjaman_model');
        $this->load->model('Pengembalian_model');
        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') == "admin"){
            redirect('login/index');
        }
	} 

	function peminjaman(){
        if($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 1){
            $data['_view'] = 'laporan/peminjaman';
            $this->load->view('layouts/main',$data);
        }else{
            $data['_view'] = 'laporan/peminjaman';
            $this->load->view('layouts/main2',$data);
        }
	}
    
    function pengembalian(){
        if($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 1){
            $data['_view'] = 'laporan/pengembalian';
            $this->load->view('layouts/main',$data);
        }else{
            $data['_view'] = 'laporan/pengembalian';
            $this->load->view('layouts/main2',$data);
        }
	}

    function buku(){
        if($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 1){
            $data['_view'] = 'laporan/buku';
            $this->load->view('layouts/main',$data);
        }else{
            $data['_view'] = 'laporan/buku';
            $this->load->view('layouts/main2',$data);
        }
	}
    
    function siswa(){
        $this->load->view('laporan/siswa');
	}
    
    function penerbit(){
        $this->load->view('laporan/penerbit');
	}
    
    function isbn(){
        $this->load->view('laporan/isbn');
	}

    function faktur1($id_peminjaman){
        $data['peminjaman'] = $this->Peminjaman_model->get_peminjaman($id_peminjaman);
        if(isset($data['peminjaman']['id_peminjaman'])){
            $this->load->view('laporan/faktur1',$data);
        }
	}
    
    function faktur2($id_pengembalian){
        $data['pengembalian'] = $this->Pengembalian_model->get_pengembalian($id_pengembalian);
        if(isset($data['pengembalian']['id_pengembalian'])){
            $this->load->view('laporan/faktur2',$data);
        }
	}
}
