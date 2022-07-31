<?php
class Isbn extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Isbn_model');
        $this->load->model('Penerbit_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['isbn'] = $this->Isbn_model->get_all_isbn();
        
        $data['_view'] = 'isbn/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){   
        $data['isbn'] = $this->Isbn_model->get_all_isbn();
        $data['penerbit'] = $this->Penerbit_model->get_all_penerbit();

        if(isset($_POST) && count($_POST) > 0){
            $data = $this->db->get_where('penerbit',array('nama'=>$this->input->post('nama')))->row_array();
            $params = array(
                'isbn' => $this->input->post('isbn'),
                'nama' => $this->input->post('nama'),
                'tahun' => $data['tahun']
            );
                
            $isbn_id = $this->Isbn_model->add_isbn($params);
            redirect('isbn/index');
        }
        else{            
            $data['_view'] = 'isbn/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($isbn){
        $data['isbn'] = $this->Isbn_model->get_isbn($isbn);
        $data['penerbit'] = $this->Penerbit_model->get_all_penerbit();
        
        if(isset($data['isbn']['isbn'])){
            if(isset($_POST) && count($_POST) > 0){
                $data = $this->db->get_where('penerbit',array('nama'=>$this->input->post('nama')))->row_array();
                $params = array(
                    'isbn' => $this->input->post('isbn'),
                    'nama' => $this->input->post('nama'),
                    'tahun' => $data['tahun']
                );
                    
                $isbn_id = $this->Isbn_model->update_isbn($isbn, $params);
                redirect('isbn/index');
            }
            else{
                $data['_view'] = 'isbn/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Data Gagal Diperbarui');
    } 

    function remove($isbn){ 
        $isbn_id = $this->Isbn_model->get_isbn($isbn);

        if(isset($isbn_id['isbn'])){
            $this->Isbn_model->delete_isbn($isbn);
            redirect('isbn/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }

    function get_nama(){
        $nama=$this->input->post('nama');
        $data=$this->Isbn_model->get_data_by_nama($nama);
        echo json_encode($data);
    }
}