<?php
class Booking_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_booking($id_booking){
        return $this->db->get_where('booking',array('id_booking'=>$id_booking))->row_array();
    }
    
    function get_all_booking(){
        $this->db->order_by('id_booking', 'asc');
        return $this->db->get('booking')->result_array();
    }
    
    function add_booking($params){
        $this->db->insert('booking',$params);
        return $this->db->insert_id();
    }
    
    function update_booking($id_booking,$params){
        $this->db->where('id_booking',$id_booking);
        return $this->db->update('booking',$params);
    }
    
    function delete_booking($id_booking){
		$this->db->where('id_booking',$id_booking);
        return $this->db->delete('booking');
    }
}
