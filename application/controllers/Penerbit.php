<?php
class Penerbit extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Penerbit_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['penerbit'] = $this->Penerbit_model->get_all_penerbit();
        
        $data['_view'] = 'penerbit/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){   
        $data['penerbit'] = $this->Penerbit_model->get_all_penerbit();

        if(isset($_POST) && count($_POST) > 0){
            $params = array(
                'nama' => $this->input->post('nama'),
                'tahun' => $this->input->post('tahun')
            );
                
            $penerbit_id = $this->Penerbit_model->add_penerbit($params);
            redirect('penerbit/index');
        }
        else{            
            $data['_view'] = 'penerbit/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id){
        $data['penerbit'] = $this->Penerbit_model->get_penerbit($id);
        
        if(isset($data['penerbit']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
                    'nama' => $this->input->post('nama'),
                    'tahun' => $this->input->post('tahun')
                );
                    
                $penerbit_id = $this->Penerbit_model->update_penerbit($id, $params);
                redirect('penerbit/index');
            }
            else{
                $data['_view'] = 'penerbit/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Data Gagal Diperbarui');
    } 

    function remove($id){ 
        $penerbit = $this->Penerbit_model->get_penerbit($id);

        if(isset($penerbit['id'])){
            $this->Penerbit_model->delete_penerbit($id);
            redirect('penerbit/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
}