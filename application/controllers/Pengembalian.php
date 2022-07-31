<?php
class Pengembalian extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Siswa_model');
        $this->load->model('Peminjaman_model');
        $this->load->model('Pengembalian_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['peminjaman'] = $this->Peminjaman_model->get_all_peminjaman();
        $data['pengembalian'] = $this->Pengembalian_model->get_all_pengembalian();
        
        $data['_view'] = 'pengembalian/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['peminjaman'] = $this->Peminjaman_model->get_all_peminjaman();

        if(isset($_POST) && count($_POST) > 0){
            $dlama = $this->db->get_where('peminjaman',array('id_peminjaman'=>$this->input->post('id_peminjaman')))->row_array();
            $awal = date_create($dlama['tgl_kembali']);
            $akhir = date_create($this->input->post('tgl_pengembalian'));
            $diff = date_diff($awal, $akhir);
            $lama = $diff->days;
            $denda = $lama * 5000;
            $kode = $this->db->get_where('buku',array('kode_buku'=>$dlama['kode_buku']))->row_array();
            $kode_buku = $kode['kode_buku'];

            echo $params2 = array(
                'stok' => $kode['stok'] + 1
            );
            $params = array(
                'id_peminjaman' => $this->input->post('id_peminjaman'),
                'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
                'lama' => $lama,
                'denda' => $denda
            );

            $pengembalian_id_pengembalian = $this->Pengembalian_model->add_pengembalian($params);
            $stok_buku = $this->Buku_model->update_stok_buku($kode_buku,$params2);
            redirect('pengembalian/index');
        }
        else{            
            $data['_view'] = 'pengembalian/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_pengembalian){
        $data['pengembalian'] = $this->Pengembalian_model->get_pengembalian($id_pengembalian);
        $data['buku'] = $this->Buku_model->get_all_buku();
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['peminjaman'] = $this->Peminjaman_model->get_all_peminjaman();
        
        if(isset($data['pengembalian']['id_pengembalian'])){
            if(isset($_POST) && count($_POST) > 0){
                $dlama = $this->db->get_where('peminjaman',array('id_peminjaman'=>$this->input->post('id_peminjaman')))->row_array();
                $awal = date_create($dlama['tgl_kembali']);
                $akhir = date_create($this->input->post('tgl_pengembalian'));
                if ($akhir < $awal) {
                    $diff = 0;
                    $lama = 0;
                }
                else {
                    $diff = date_diff($awal, $akhir);
                    $lama = $diff->format('%d');
                }
                $denda = $lama * 5000;

                $params = array(
                    'id_peminjaman' => $this->input->post('id_peminjaman'),
                    'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
                    'lama' => $lama,
                    'denda' => $denda
                );
                    
                $pengembalian_id_pengembalian = $this->Pengembalian_model->update_pengembalian($id_pengembalian, $params);
                redirect('pengembalian/index');
            }
            else{
                $data['_view'] = 'pengembalian/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Data Gagal Diperbarui');
    } 

    function remove($id_pengembalian){ 
        $pengembalian = $this->Pengembalian_model->get_pengembalian($id_pengembalian);

        if(isset($pengembalian['id_pengembalian'])){
            $this->Pengembalian_model->delete_pengembalian($id_pengembalian);
            redirect('pengembalian/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
}