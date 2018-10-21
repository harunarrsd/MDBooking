<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {

    function create_booking($data){
        $this->db->insert('booking',$data);
    }

}
