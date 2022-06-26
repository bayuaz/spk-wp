<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_kriteria');

		// cek status login
		if ($this->M_kriteria->cek_status() != 'login') {
			redirect('login');
		}
	}

	public function index()
	{
		// get list data
		$data['data_kriteria'] = $this->M_kriteria->get_data_kriteria();

		$this->vic_lib->view('kriteria/index', $data);
	}

    public function tambah()
    {
        $this->vic_lib->view('kriteria/tambah');
    }

	public function tambah_act() {
		$this->form_validation->set_rules('kode','Kode Kriteria', 'trim|required');
		$this->form_validation->set_rules('nama','Nama Kriteria', 'trim|required');
		$this->form_validation->set_rules('jenis','Jenis Kriteria', 'trim|required');
		$this->form_validation->set_rules('bobot','Bobot Kriteria', 'trim|required');

		if ($this->form_validation->run() !== false) {
			$params = [
				'kode_kriteria' => $this->input->post('kode'),
				'nama_kriteria' => $this->input->post('nama'),
				'jenis_kriteria' => $this->input->post('jenis'),
				'bobot_kriteria' => $this->input->post('bobot')
			];

			if ($this->M_kriteria->insert_tbl_kriteria($params)) {
				$this->session->set_userdata('success', 'Tambah data kriteria berhasil!');
				redirect('kriteria');
			} else {
				$this->session->set_userdata('failed', 'Tambah data kriteria gagal!');
				$this->tambah();
			}
		} else {
			$this->session->set_userdata('failed', 'Tambah data kriteria gagal!');
			$this->tambah();
		}
	}

	public function ubah($params) {
		// get detail data
		$data['detail_kriteria'] = $this->M_kriteria->get_detail_kriteria($params);

		$this->vic_lib->view('kriteria/ubah', $data);
	}

	public function ubah_act() {
		$this->form_validation->set_rules('id','ID Kriteria', 'trim|required');
		$this->form_validation->set_rules('kode','Kode Kriteria', 'trim|required');
		$this->form_validation->set_rules('nama','Nama Kriteria', 'trim|required');
		$this->form_validation->set_rules('jenis','Jenis Kriteria', 'trim|required');
		$this->form_validation->set_rules('bobot','Bobot Kriteria', 'trim|required');

		$id = $this->input->post('id');

		if ($this->form_validation->run() !== false) {
			$params = [
				'kode_kriteria' => $this->input->post('kode'),
				'nama_kriteria' => $this->input->post('nama'),
				'jenis_kriteria' => $this->input->post('jenis'),
				'bobot_kriteria' => $this->input->post('bobot')
			];

			$where = ['id_kriteria' => $this->input->post('id')];

			if ($this->M_kriteria->update_tbl_kriteria($params, $where)) {
				$this->session->set_userdata('success', 'Ubah data kriteria berhasil!');
				redirect('kriteria');
			} else {
				$this->session->set_userdata('failed', 'Ubah data kriteria gagal!');
				$this->ubah($id);
			}
		} else {
			$this->session->set_userdata('failed', 'Ubah data kriteria gagal!');
			$this->ubah($id);
		}
	}

	public function hapus($params) {
		// get detail data
		$data['detail_kriteria'] = $this->M_kriteria->get_detail_kriteria($params);

		$this->vic_lib->view('kriteria/hapus', $data);
	}

	public function hapus_act() {
		$this->form_validation->set_rules('id','ID Kriteria', 'trim|required');

		$id = $this->input->post('id');

		if ($this->form_validation->run() !== false) {
			$where = ['id_kriteria' => $this->input->post('id')];

			if ($this->M_kriteria->delete_tbl_kriteria($where)) {
				$this->session->set_userdata('success', 'Hapus data kriteria berhasil!');
				redirect('kriteria');
			} else {
				$this->session->set_userdata('failed', 'Hapus data kriteria gagal!');
				$this->hapus($id);
			}
		} else {
			$this->session->set_userdata('failed', 'Hapus data kriteria gagal!');
			$this->hapus($id);
		}
	}
}
