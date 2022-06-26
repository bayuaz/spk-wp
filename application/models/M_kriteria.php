<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends CI_Model {
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

    function get_detail_kriteria($params) {
        // query
        $sql = "SELECT * FROM tbl_kriteria WHERE id_kriteria = ?";
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

    function insert_tbl_kriteria($params) {
        return $this->db->insert('tbl_kriteria', $params);
    }

    function update_tbl_kriteria($params, $where) {
        return $this->db->update('tbl_kriteria', $params, $where);
    }

    function delete_tbl_kriteria($where) {
        return $this->db->delete('tbl_kriteria', $where);
    }

}