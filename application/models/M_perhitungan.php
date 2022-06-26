<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perhitungan extends CI_Model {
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

    function get_data_nilai() {
        $sql = "SELECT c.nama_alternatif, GROUP_CONCAT(b.nama_kriteria) as nama_kriteria, GROUP_CONCAT(a.nilai_nilai) as nilai FROM tbl_nilai a
                INNER JOIN tbl_kriteria b ON a.id_kriteria = b.id_kriteria
                INNER JOIN tbl_alternatif c ON a.id_alternatif = c.id_alternatif
                GROUP BY a.id_alternatif";
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

    function get_jumlah_bobot() {
        $sql = "SELECT SUM(bobot_kriteria) as jumlah_bobot FROM tbl_kriteria;";
        // execute
        $query = $this->db->query($sql);
        // cek result
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['jumlah_bobot'];
        } else {
            return array();
        }
    }
}