<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_alternatif');
	}

	public function index()
	{
		// get list data
		$data['data_alternatif'] = $this->M_alternatif->get_data_alternatif();

		$this->vic_lib->view('alternatif/index', $data);
	}

    public function tambah()
    {
        $this->vic_lib->view('alternatif/tambah');
    }

    public function tambah_act() 
    {
		$this->form_validation->set_rules('kode','Kode Alternatif', 'trim|required');
		$this->form_validation->set_rules('nama','Nama Alternatif', 'trim|required');

		if ($this->form_validation->run() !== false) {
			$params = [
				'kode_alternatif' => $this->input->post('kode'),
				'nama_alternatif' => $this->input->post('nama')
			];

			if ($this->M_alternatif->insert_tbl_alternatif($params)) {
				$this->session->set_userdata('success', 'Tambah data alternatif berhasil!');
				redirect('alternatif');
			} else {
				$this->session->set_userdata('failed', 'Tambah data alternatif gagal!');
				$this->tambah();
			}
		} else {
			$this->session->set_userdata('failed', 'Tambah data alternatif gagal!');
			$this->tambah();
		}
	}

    public function ubah($params) 
    {
		// get detail data
		$data['detail_alternatif'] = $this->M_alternatif->get_detail_alternatif($params);

		$this->vic_lib->view('alternatif/ubah', $data);
	}

	public function ubah_act() 
    {
		$this->form_validation->set_rules('id','ID Alternatif', 'trim|required');
		$this->form_validation->set_rules('kode','Kode Alternatif', 'trim|required');
		$this->form_validation->set_rules('nama','Nama Alternatif', 'trim|required');

        $id = $this->input->post('id');

		if ($this->form_validation->run() !== false) {
			$params = [
				'kode_alternatif' => $this->input->post('kode'),
				'nama_alternatif' => $this->input->post('nama')
			];

			$where = ['id_alternatif' => $this->input->post('id')];

			if ($this->M_alternatif->update_tbl_alternatif($params, $where)) {
				$this->session->set_userdata('success', 'Ubah data alternatif berhasil!');
				redirect('alternatif');
			} else {
				$this->session->set_userdata('failed', 'Ubah data alternatif gagal!');
				$this->ubah($id);
			}
		} else {
			$this->session->set_userdata('failed', 'Ubah data alternatif gagal!');
			$this->ubah($id);
		}
	}

	public function hapus($params)
    {
		// get detail data
		$data['detail_alternatif'] = $this->M_alternatif->get_detail_alternatif($params);

		$this->vic_lib->view('alternatif/hapus', $data);
	}

	public function hapus_act()
    {
		$this->form_validation->set_rules('id','ID alternatif', 'trim|required');

        $id = $this->input->post('id');

		if ($this->form_validation->run() !== false) {
			$where = ['id_alternatif' => $this->input->post('id')];

			if ($this->M_alternatif->delete_tbl_alternatif($where)) {
				$this->session->set_userdata('success', 'Hapus data alternatif berhasil!');
				redirect('alternatif');
			} else {
				$this->session->set_userdata('failed', 'Hapus data alternatif gagal!');
				$this->hapus($id);
			}
		} else {
			$this->session->set_userdata('failed', 'Hapus data alternatif gagal!');
			$this->hapus($id);
		}
	}

    public function nilai($params = NULL)
    {
		if (is_null($params)) {
			redirect('alternatif');
		}

		// get detail data
		$data['detail_alternatif'] = $this->M_alternatif->get_detail_alternatif($params);
		// get list data
		$data['data_kriteria'] = $this->M_alternatif->get_data_kriteria();
		$data['data_nilai_alternatif'] = $this->M_alternatif->get_detail_nilai_alternatif($params);
		// get id alternatif
		$data['id'] = $params;

        $this->vic_lib->view('alternatif/nilai', $data);
    }

	public function nilai_act()
	{
		$this->form_validation->set_rules('id','ID Alternatif', 'trim|required');
		$this->form_validation->set_rules('nilai[]','Nilai Alternatif', 'trim|required');

		$id = $this->input->post('id');
		$detail_nilai_alternatif = $this->M_alternatif->get_detail_nilai_alternatif($id);
		$data_kriteria = $this->M_alternatif->get_data_kriteria();

		// if (count(array_filter($this->input->post('nilai'))) != count($this->input->post('nilai'))) {
		// 	echo (empty($data_nilai_alternatif)) ? $this->session->set_userdata('failed', 'Tambah nilai alternatif gagal!') : $this->session->set_userdata('failed', 'Ubah nilai alternatif gagal!');
		// 	$this->nilai($id);
		// }

		if ($this->form_validation->run() !== false) {
			if (empty($detail_nilai_alternatif)) {
				foreach($this->input->post('nilai') as $key => $nilai) {
					$params = [
						'id_alternatif' => $this->input->post('id'),
						'id_kriteria' => $data_kriteria[$key]['id_kriteria'],
						'nilai_nilai' => $nilai,
					];
		
					$this->M_alternatif->insert_tbl_nilai($params);
				}
			} else {
				foreach($this->input->post('nilai') as $key => $nilai) {
					$params = [
						'id_alternatif' => $this->input->post('id'),
						'id_kriteria' => $data_kriteria[$key]['id_kriteria'],
						'nilai_nilai' => $nilai,
					];
		
					$where = ['id_nilai' => $detail_nilai_alternatif[$key]['id_nilai']];
		
					$this->M_alternatif->update_tbl_nilai($params, $where);
				}
			}

			echo (empty($data_nilai_alternatif)) ? $this->session->set_userdata('success', 'Tambah nilai alternatif berhasil!') : $this->session->set_userdata('success', 'Ubah nilai alternatif berhasil!');
			redirect('alternatif');
		} else {
			echo (empty($data_nilai_alternatif)) ? $this->session->set_userdata('failed', 'Tambah nilai alternatif gagal!') : $this->session->set_userdata('failed', 'Ubah nilai alternatif gagal!');
			$this->nilai($id);
		}
	}
}