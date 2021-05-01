<?php

class Masjid_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // kas
    public function getKas($limit, $start)
    {
        return $this->db->get('tb_transaksi', $limit, $start)->result_array();
    }

    public function hitungDataKas()
    {
        return $this->db->get('tb_transaksi')->num_rows();
    }
    // sedekah
    public function getDana($limit, $start)
    {
        return $this->db->query("SELECT * FROM tb_transaksi WHERE tipe = 'Sedekah'", $limit, $start)->result_array();
    }
    public function hitungDataDana()
    {
        return $this->db->query("SELECT * FROM tb_transaksi WHERE tipe = 'Sedekah'")->num_rows();
    }

    // donatur
    public function getDon($limit, $start)
    {
        return $this->db->get('tb_donatur', $limit, $start)->result_array();
    }

    public function hitungDataDon()
    {
        return $this->db->get('tb_donatur')->num_rows();
    }

    // ramadhan
    public function getRamadhan($limit, $start)
    {
        return $this->db->get('tb_ramadhan', $limit, $start)->result_array();
    }

    public function hitungDataRamadhan()
    {
        return $this->db->get('tb_ramadhan')->num_rows();
    }

    // ramadhan
    public function getZakat($limit, $start)
    {
        return $this->db->get('tb_zakat', $limit, $start)->result_array();
    }

    public function hitungDataZakat()
    {
        return $this->db->get('tb_zakat')->num_rows();
    }
    // public function ambil_id_smp($id)
    // {
    //     $hasil = $this->db->where('id_siswa_smp', $id)->get('data_siswa_smp');
    //     if ($hasil->num_rows() > 0) {
    //         return $hasil->result();
    //     } else {
    //         return false;
    //     }
    // }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('tb_user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    // public function cari($keyword = null)
    // {
    //     if ($keyword) {
    //         $this->db->like('nama', $keyword);
    //     }
    //     return $this->db->get('data_siswa_smp')->result_array();
    // }

    // public function update_password($where, $data, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->update($table, $data);
    // }

    // public function downloadPembayaran($id)
    // {
    //     $query = $this->db->get_where('tb_transaksi', array('id_rental' => $id));
    //     return $query->row_array();
    // }

}
