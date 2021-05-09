<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data = array(
            'arus_kas' => $this->db->query("SELECT * FROM tb_transaksi ORDER BY id_transaksi DESC LIMIT 5")->result(),
            // kas
            'kas_masuk' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_kas")->row(),
            'kas_keluar' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pengeluaran' AND tipe ='Kas'")->row(),

            // sedekah yatim dan duafa
            'sedekah_masuk' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_dana_Sedekah")->row(),
            'sedekah_keluar' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE tipe = 'Sedekah' AND jenis_transaksi ='Pengeluaran'")->row(),
            // donatur

            'donatur' => $this->db->query("SELECT SUM(total) AS total FROM tb_donatur")->row(),

            'organisasi' => $this->masjid_model->get_data('tb_staff')->result_array(),
            'total_org' => $this->masjid_model->get_data('tb_staff')->num_rows()
        );
        $page['title'] = 'Admin-Dashboard';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/admin_view', $data);
        $this->load->view('layout_admin/footer');
    }
}
