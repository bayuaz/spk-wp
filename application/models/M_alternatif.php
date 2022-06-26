<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alternatif extends CI_Model {
    function get_data_alternatif() {
        $sql = "SELECT * FROM tbl_alternatif";
        // execute
        $query = $this->db->query($sql);
        // cek result
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_data_kriteria() {
        $sql = "SELECT * FROM tbl_kriteria";
        // execute
        $query = $this->db->query($sql);
        // cek result
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_detail_alternatif($params) {
        // query
        $sql = "SELECT * FROM tbl_alternatif WHERE id_alternatif = ?";
        // execute
        $query = $this->db->query($sql, $params);
        // cek result
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_detail_nilai_alternatif($params) {
        // query
        $sql = "SELECT * FROM tbl_nilai WHERE id_alternatif = ?";
        // execute
        $query = $this->db->query($sql, $params);
        // cek result
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function insert_tbl_alternatif($params) {
        return $this->db->insert('tbl_alternatif', $params);
    }

    function update_tbl_alternatif($params, $where) {
        return $this->db->update('tbl_alternatif', $params, $where);
    }

    function delete_tbl_alternatif($where) {
        return $this->db->delete('tbl_alternatif', $where);
    }

    function insert_tbl_nilai($params) {
        return $this->db->insert('tbl_nilai', $params);
    }

    function update_tbl_nilai($params, $where) {
        return $this->db->update('tbl_nilai', $params, $where);
    }

}