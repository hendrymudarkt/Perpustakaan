<?php
class Siswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        
        $data['_view'] = 'siswa/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){   
        if(isset($_POST) && count($_POST) > 0){
            $config['upload_path']          = 'foto/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 3000;
            $config['max_height']           = 1688;
     
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto')){
                echo '<script>alert("Data gagal disimpan");</script>';
                redirect('absen_dosen/index');
            }
            else{
                $file = $this->upload->data();
                $foto = $file['file_name'];

                $params = array(
                    'nisn' => $this->input->post('nisn'),
                    'nama' => $this->input->post('nama'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'agama' => $this->input->post('agama'),
                    'alamat' => $this->input->post('alamat'),
                    'no_telp' => $this->input->post('no_telp'),
                    'password' => $this->encryption->encrypt($this->input->post('password')),
                    'foto' => $foto
                );
                
                $siswa_id = $this->Siswa_model->add_siswa($params);
                redirect('siswa/index');
            }
        }
        else{            
            $data['_view'] = 'siswa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($nisn){
        $data['siswa'] = $this->Siswa_model->get_siswa($nisn);
        
        if(isset($data['siswa']['nisn'])){
            if(isset($_POST) && count($_POST) > 0){
                $config['upload_path']          = 'foto/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 3000;
                $config['max_height']           = 1688;
         
                $this->load->library('upload', $config);
    
                if ( ! $this->upload->do_upload('foto')){
                    $file = $this->upload->data();
                    $foto = $file['file_name'];
    
                    $params = array(
                        'nisn' => $this->input->post('nisn'),
                        'nama' => $this->input->post('nama'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                        'agama' => $this->input->post('agama'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'password' => $this->encryption->encrypt($this->input->post('password'))
                    );
                    
                    $siswa_id = $this->Siswa_model->update_siswa($nisn, $params);
                    redirect('siswa/index');
                }
                else{
                    $file = $this->upload->data();
                    $foto = $file['file_name'];
    
                    $params = array(
                        'nisn' => $this->input->post('nisn'),
                        'nama' => $this->input->post('nama'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                        'agama' => $this->input->post('agama'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'password' => $this->encryption->encrypt($this->input->post('password')),
                        'foto' => $foto
                    );
                    
                    $siswa_id = $this->Siswa_model->update_siswa($nisn, $params);
                    redirect('siswa/index');
                }
            }
            else{
                $data['_view'] = 'siswa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Data Gagal Diperbarui');
    } 

    function remove($nisn){ 
        $siswa = $this->Siswa_model->get_siswa($nisn);

        if(isset($siswa['nisn'])){
            $path = "./foto";
            unlink($path.$siswa['foto']);
            $this->Siswa_model->delete_siswa($nisn);
            redirect('siswa/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
}