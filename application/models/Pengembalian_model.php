<?php
class Pengembalian_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_pengembalian($id_pengembalian){
        return $this->db->get_where('pengembalian',array('id_pengembalian'=>$id_pengembalian))->row_array();
    }
    
    function get_all_pengembalian(){
        $this->db->order_by('id_pengembalian', 'asc');
        return $this->db->get('pengembalian')->result_array();
    }
    
    function add_pengembalian($params){
        $this->db->insert('pengembalian',$params);
        return $this->db->insert_id();
    }
    
    function update_pengembalian($id_pengembalian,$params){
        $this->db->where('id_pengembalian',$id_pengembalian);
        return $this->db->update('pengembalian',$params);
    }
    
    function delete_pengembalian($id_pengembalian){
		$this->db->where('id_pengembalian',$id_pengembalian);
        return $this->db->delete('pengembalian');
    }
}
