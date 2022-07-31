<?php
class User_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_user($id){
        return $this->db->get_where('user',array('id'=>$id))->row_array();
    }
    
    function get_all_user(){
        $this->db->order_by('level', 'asc');
        return $this->db->get('user')->result_array();
    }
    
    function add_user($params){
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    function update_user($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('user',$params);
    }
    
    function delete_user($id){
		$this->db->where('id',$id);
        return $this->db->delete('user');
    }
}
