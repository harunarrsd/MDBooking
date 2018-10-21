<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_booking');     
	}

	public function index()
	{
		$data['title'] = 'KiniOnline';
        $data['pages'] = $this->load->view('pages/stepone','',true);
		$this->load->view('master',array('main'=>$data));
	}

	function create_booking()
    {
		// $op = $this->input->post('op');
	    // $id = $this->input->post('id');
		$data ['nama']= $this->input->post('nama');
		$data ['email']= $this->input->post('email');
		$data ['nohp']= $this->input->post('nohp');
		$this->m_booking->create_booking($data);
        redirect('main');
	}
}
