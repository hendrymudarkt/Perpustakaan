<?php
class Buku_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_buku($kode_buku){
        return $this->db->get_where('buku',array('kode_buku'=>$kode_buku))->row_array();
    }
    
    function get_all_buku(){
        $this->db->order_by('kode_buku', 'asc');
        return $this->db->get('buku')->result_array();
    }
    
    function add_buku($params){
        $this->db->insert('buku',$params);
        return $this->db->insert_id();
    }
    
    function update_buku($kode_buku,$params){
        $this->db->where('kode_buku',$kode_buku);
        return $this->db->update('buku',$params);
    }
    
    function update_stok_buku($kode_buku,$params2){
        $this->db->where('kode_buku',$kode_buku);
        return $this->db->update('buku',$params2);
    }
    
    function delete_buku($kode_buku){
		$this->db->where('kode_buku',$kode_buku);
        return $this->db->delete('buku');
    }
}
