<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_login');

		// cek status login
		if ($this->M_login->cek_status() != 'login') {
			redirect('login');
		}
	}

	public function index()
	{
		$this->vic_lib->view('dashboard');
	}

	public function keluar() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
