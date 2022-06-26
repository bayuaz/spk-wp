<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('M_login');

		// cek status login
		if ($this->M_login->cek_status() == 'login') {
			redirect('dashboard');
		}
	}

	public function index()
	{
        $data['title'] = 'Sistem Pendukung Keputusan - Rekomendasi Posyandu Terbaik';

        if (empty($this->input->post())) {
			$this->load->view('login', $data);
        } else {
            $this->form_validation->set_rules('username','Username', 'trim|required');
			$this->form_validation->set_rules('password','Password', 'trim|required');

			if ($this->form_validation->run() !== false) {
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));

                $cek = $this->M_login->cek_login(array($username, $password));

                if (!empty($cek)) {
                    $session = array(
                        'nama' => $cek['nama_user'],
                        'status' => 'login'
                    );

                    $this->session->set_userdata($session);

                    redirect('dashboard');
                } else {
                    $this->session->set_userdata('failed', 'Login gagal!');
			        $this->load->view('login', $data);
                }
            } else {
                $this->session->set_userdata('failed', 'Login gagal!');
			    $this->load->view('login', $data);
            }
        }
	}
}
