<?php
class Siswa_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_siswa($nisn){
        return $this->db->get_where('siswa',array('nisn'=>$nisn))->row_array();
    }
    
    function get_all_siswa(){
        $this->db->order_by('nisn', 'asc');
        return $this->db->get('siswa')->result_array();
    }
    
    function add_siswa($params){
        $this->db->insert('siswa',$params);
        return $this->db->insert_id();
    }
    
    function update_siswa($nisn,$params){
        $this->db->where('nisn',$nisn);
        return $this->db->update('siswa',$params);
    }
    
    function delete_siswa($nisn){
		$this->db->where('nisn',$nisn);
        return $this->db->delete('siswa');
    }
}
