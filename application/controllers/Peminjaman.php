<?php
class Peminjaman extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Siswa_model');
        $this->load->model('Peminjaman_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['peminjaman'] = $this->Peminjaman_model->get_all_peminjaman();
        
        $data['_view'] = 'peminjaman/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();

        if(isset($_POST) && count($_POST) > 0){
            $cek_stok = $this->db->query("SELECT kode_buku, stok FROM buku")->result_array();
            if ($cek_stok['stok'] == 0) {
                echo "<script>window.alert('Stok buku sudah habis, silahkan pinjam buku yang lain'); window.location='".site_url('peminjaman/add')."'</script>";
            }else{
                $kembali = date('Y-m-d', strtotime('+7 days', strtotime($this->input->post('tgl_pinjam'))));
                $params = array(
                    'nisn' => $this->input->post('nisn'),
                    'kode_buku' => $this->input->post('kode_buku'),
                    'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                    'tgl_kembali' => $kembali,
                    'stok' => 1
                );

                $peminjaman_id_peminjaman = $this->Peminjaman_model->add_peminjaman($params);
                redirect('peminjaman/index');
            }
        }
        else{            
            $data['_view'] = 'peminjaman/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_peminjaman){
        $data['peminjaman'] = $this->Peminjaman_model->get_peminjaman($id_peminjaman);
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        
        if(isset($data['peminjaman']['id_peminjaman'])){
            if(isset($_POST) && count($_POST) > 0){
                $kembali = date('d-m-Y', strtotime('+7 days', strtotime($this->input->post('tgl_pinjam'))));
                $params = array(
                    'nisn' => $this->input->post('nisn'),
                    'kode_buku' => $this->input->post('kode_buku'),
                    'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                    'tgl_kembali' => $kembali
                );
                    
                $peminjaman_id_peminjaman = $this->Peminjaman_model->update_peminjaman($id_peminjaman, $params);
                redirect('peminjaman/index');
            }
            else{
                $data['_view'] = 'peminjaman/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Data Gagal Diperbarui');
    } 

    function remove($id_peminjaman){ 
        $peminjaman = $this->Peminjaman_model->get_peminjaman($id_peminjaman);

        if(isset($peminjaman['id_peminjaman'])){
            $this->Peminjaman_model->delete_peminjaman($id_peminjaman);
            redirect('peminjaman/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
}