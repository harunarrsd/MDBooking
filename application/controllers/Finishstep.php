<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finishstep extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_booking');     
	}

	public function index()
	{
		$data['title'] = 'Klinik My Dentist';
        $data['pages'] = $this->load->view('pages/finishstep','',true);
		$this->load->view('master',array('main'=>$data));
		
	}
}
