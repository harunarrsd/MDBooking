<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {

    public function create_booking($data){
        $this->db->insert('booking',$data);
    }

    function get_last_id(){
        $sql = $this->db->query("SELECT * FROM booking ORDER BY idbooking DESC LIMIT 1");
        return $sql;
    }

    function get_id_dokter(){
        $sql = $this->db->query("SELECT id, name FROM users WHERE role = 'dokter'");
        return $sql;
    }

    function update_booking($id,$data){
		$this->db->where("idbooking",$id);
        $this->db->update('booking',$data);
    }

    function cabang(){
        $sql = $this->db->query("SELECT * FROM cabang");
        return $sql;
    }
}
