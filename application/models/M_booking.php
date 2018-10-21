<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {

    public function create_booking($data){
        $this->db->insert('booking',$data);
        $last_insert_id = $this->db->insert_id();
    }

    function get_last_id(){

        // $last = $this->db->select('idbooking')
        // ->order_by('idbooking',"desc")
		// ->limit(1)
		// ->get('booking')
        // ->row();
        // return $last;

        $sql = $this->db->query("SELECT idbooking FROM booking ORDER BY idbooking DESC LIMIT 1");
        return $sql;

        // $insert_id = $this->db->insert_id();
        // return $insert_id;
    }

    function update_booking($id,$data){
		$this->db->where("idbooking",$id);
        $this->db->update('booking',$data);
    }
}
