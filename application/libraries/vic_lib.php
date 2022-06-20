<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vic_lib {
	function view($view, $data = array())
	{
		$ci =& get_instance();
		
		if (!array_key_exists('title', $data)) {
			$data['title'] = 'Sistem Pendukung Keputusan - Rekomendasi Posyandu Terbaik';
		}

		$ci->load->view('menu/header', $data);
		$ci->load->view('menu/sidebar', $data);
		$ci->load->view($view, $data);
		$ci->load->view('menu/footer', $data);
	}
}