<?php
class Buku extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Penerbit_model');
        $this->load->model('Isbn_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['buku'] = $this->Buku_model->get_all_buku();
        
        $data['_view'] = 'buku/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['penerbit'] = $this->Penerbit_model->get_all_penerbit();
        $data['isbn'] = $this->Isbn_model->get_all_isbn();

        if(isset($_POST) && count($_POST) > 0){
            $params = array(
                'kode_buku' => $this->input->post('kode_buku'),
                'judul' => $this->input->post('judul'),
                'pengarang' => $this->input->post('pengarang'),
                'isbn' => $this->input->post('isbn'),
                'rak' => $this->input->post('rak'),
                'keterangan' => $this->input->post('keterangan'),
                'stok' => $this->input->post('stok')
            );

            $buku_id = $this->Buku_model->add_buku($params);
            redirect('buku/index');
        }
        else{            
            $data['_view'] = 'buku/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($kode_buku){
        $data['buku'] = $this->Buku_model->get_buku($kode_buku);
        $data['penerbit'] = $this->Penerbit_model->get_all_penerbit();
        
        if(isset($data['buku']['kode_buku'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
                    'kode_buku' => $this->input->post('kode_buku'),
                    'judul' => $this->input->post('judul'),
                    'pengarang' => $this->input->post('pengarang'),
                    'isbn' => $this->input->post('isbn'),
                    'rak' => $this->input->post('rak'),
                    'keterangan' => $this->input->post('keterangan'),
                    'stok' => $this->input->post('stok')
                );
                    
                $buku_id = $this->Buku_model->update_buku($kode_buku, $params);
                redirect('buku/index');
            }
            else{
                $data['_view'] = 'buku/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Data Gagal Diperbarui');
    } 

    function remove($kode_buku){ 
        $buku = $this->Buku_model->get_buku($kode_buku);

        if(isset($buku['kode_buku'])){
            $this->Buku_model->delete_buku($kode_buku);
            redirect('buku/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
}