<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Steptwo extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_booking');     
	}

	public function index()
	{
		$data['title'] = 'Klinik My Dentist';
		$data['id'] = $this->m_booking->get_last_id();
        $data['pages'] = $this->load->view('pages/steptwo',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

	function update_booking()
    {
		$id = $this->input->post('id');
		$data ['iddokter']= $this->input->post('dokter');
		$data ['idcabang']= $this->input->post('cabang');
		$this->m_booking->update_booking($id,$data);
        redirect('stepthree');
	}
}
