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
		$data['cabang'] = $this->m_booking->cabang();
		$data['id'] = $this->m_booking->get_last_id();
		$data['booking_cabang'] = $this->m_booking->get_join_booking_cabang();
		$data['booking_users'] = $this->m_booking->get_join_booking_users();
		$data['iddokter'] = $this->m_booking->get_id_dokter();
		$data['sql'] = $this->m_booking->get_dokter_cabang_satu();
		$data['sql2'] = $this->m_booking->get_dokter_cabang_dua();
        $data['pages'] = $this->load->view('pages/steptwo',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

	function update_cabang()
    {
		$id = $this->input->post('id');
		$data ['idcabang']= $this->input->post('cabang');
		$this->m_booking->update_booking($id,$data);
        redirect('steptwo');
	}

	function update_booking()
    {
		$id = $this->input->post('id');
		$data ['iddokter']= $this->input->post('dokter');
		$this->m_booking->update_booking($id,$data);
        redirect('steptwo');
	}
}
