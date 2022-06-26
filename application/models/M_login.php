<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	function cek_status() {
		return $this->session->userdata('status');
	}

	function cek_login($params) {
		// query
		$sql = "SELECT * FROM tbl_user WHERE username_user = ? AND password_user = ?";
		// execute
		$query = $this->db->query($sql, $params);
		// cek
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
            $query->free_result();
            return $result;
		} else {
			return [];
		}
	}
}