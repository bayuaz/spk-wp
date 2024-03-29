<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_perhitungan');

		// cek status login
		if ($this->M_perhitungan->cek_status() != 'login') {
			redirect('login');
		}
	}

	public function index()
	{
		// get list data
		$data['data_kriteria'] = $this->M_perhitungan->get_data_kriteria();
		$data['data_alternatif'] = $this->M_perhitungan->get_data_alternatif();
		$data['data_nilai'] = $this->M_perhitungan->get_data_nilai();
		$data['jumlah_bobot'] = $this->M_perhitungan->get_jumlah_bobot();
		
		$this->vic_lib->view('hitung/index', $data);
	}
}