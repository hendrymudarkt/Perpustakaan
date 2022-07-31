<?php
class Booking extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Siswa_model');
        $this->load->model('Booking_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['booking'] = $this->Booking_model->get_all_booking();

        if($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 1){
            $data['_view'] = 'booking/index';
            $this->load->view('layouts/main',$data);
        }else{
            $data['_view'] = 'booking/index';
            $this->load->view('layouts/main3',$data);
        }
    }

    function add(){
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();

        if(isset($_POST) && count($_POST) > 0){
            $kembali = date('Y-m-d', strtotime('+7 days', strtotime($this->input->post('tgl_pinjam'))));
            $params = array(
                'nisn' => $this->input->post('nisn'),
                'kode_buku' => $this->input->post('kode_buku'),
                'tgl_booking' => date('Y-m-d'),
                'tgl_pinjam' => $this->input->post('tgl_pinjam')
            );

            $booking_id_booking = $this->Booking_model->add_booking($params);
            redirect('booking/index');
        }
        else{            
            if($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 1){
                $data['_view'] = 'booking/add';
                $this->load->view('layouts/main',$data);
            }else{
                $data['_view'] = 'booking/add';
                $this->load->view('layouts/main3',$data);
            }
        }
    }  

    function edit($id_booking){
        $data['booking'] = $this->Booking_model->get_booking($id_booking);
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        
        if(isset($data['booking']['id_booking'])){
            if(isset($_POST) && count($_POST) > 0){
                $kembali = date('d-m-Y', strtotime('+7 days', strtotime($this->input->post('tgl_pinjam'))));
                $params = array(
                    'nisn' => $this->input->post('nisn'),
                    'kode_buku' => $this->input->post('kode_buku'),
                    'tgl_pinjam' => $this->input->post('tgl_pinjam')
                );
                    
                $booking_id_booking = $this->Booking_model->update_booking($id_booking, $params);
                redirect('booking/index');
            }
            else{
                if($this->session->userdata('sebagai') == "admin" && $this->session->userdata('level') == 1){
                    $data['_view'] = 'booking/edit';
                    $this->load->view('layouts/main',$data);
                }else{
                    $data['_view'] = 'booking/edit';
                    $this->load->view('layouts/main3',$data);
                }
            }
        }
        else
            show_error('Data Gagal Diperbarui');
    } 

    function remove($id_booking){ 
        $booking = $this->Booking_model->get_booking($id_booking);

        if(isset($booking['id_booking'])){
            $this->Booking_model->delete_booking($id_booking);
            redirect('booking/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
}