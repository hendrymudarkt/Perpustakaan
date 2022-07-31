<?php
class Peminjaman_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_peminjaman($id_peminjaman){
        return $this->db->get_where('peminjaman',array('id_peminjaman'=>$id_peminjaman))->row_array();
    }
    
    function get_all_peminjaman(){
        $this->db->order_by('id_peminjaman', 'asc');
        return $this->db->get('peminjaman')->result_array();
    }
    
    function add_peminjaman($params){
        $this->db->insert('peminjaman',$params);
        return $this->db->insert_id();
    }
    
    function update_peminjaman($id_peminjaman,$params){
        $this->db->where('id_peminjaman',$id_peminjaman);
        return $this->db->update('peminjaman',$params);
    }
    
    function delete_peminjaman($id_peminjaman){
		$this->db->where('id_peminjaman',$id_peminjaman);
        return $this->db->delete('peminjaman');
    }
}
