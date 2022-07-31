<?php
class Penerbit_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_penerbit($id){
        return $this->db->get_where('penerbit',array('id'=>$id))->row_array();
    }
    
    function get_all_penerbit(){
        $this->db->order_by('id', 'asc');
        return $this->db->get('penerbit')->result_array();
    }
    
    function add_penerbit($params){
        $this->db->insert('penerbit',$params);
        return $this->db->insert_id();
    }
    
    function update_penerbit($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('penerbit',$params);
    }
    
    function delete_penerbit($id){
		$this->db->where('id',$id);
        return $this->db->delete('penerbit');
    }
}
