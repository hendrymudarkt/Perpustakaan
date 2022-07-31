<?php
class Isbn_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_isbn($isbn){
        return $this->db->get_where('isbn',array('isbn'=>$isbn))->row_array();
    }
    
    function get_all_isbn(){
        $this->db->order_by('isbn', 'asc');
        return $this->db->get('isbn')->result_array();
    }
    
    function add_isbn($params){
        $this->db->insert('isbn',$params);
        return $this->db->insert_id();
    }
    
    function update_isbn($isbn,$params){
        $this->db->where('isbn',$isbn);
        return $this->db->update('isbn',$params);
    }
    
    function delete_isbn($isbn){
		$this->db->where('isbn',$isbn);
        return $this->db->delete('isbn');
    }

    function get_data_by_nama($nama){
        $hasil=$this->db->query("SELECT * FROM penerbit WHERE nama='$nama'");
        return $hasil->result();
    }
}
