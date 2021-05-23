<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {

        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $page['title'] = 'Admin-Laporan';
            $this->load->view('layout_admin/head', $page);
            $this->load->view('layout_admin/sidebar');
            $this->load->view('layout_admin/header');
            $this->load->view('admin/laporan_filter');
            $this->load->view('layout_admin/footer');
        } else {
            $data = array(
                // kas
                'kas_masuk' => $this->db->query("SELECT * FROM tb_transaksi WHERE tipe = 'Kas' AND jenis_transaksi = 'Pemasukan' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->result_array(),
                'kas_keluar' => $this->db->query("SELECT * FROM tb_transaksi WHERE tipe = 'Kas' AND jenis_transaksi = 'Pengeluaran' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->result_array(),

                'total_kas_masuk' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pemasukan' AND tipe ='Kas' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->row(),
                'total_kas_keluar' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pengeluaran' AND tipe ='Kas' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->row(),

                'total_kas_keseluruhan' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_kas")->row(),
                'total_kas_pengeluaran' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pengeluaran' AND tipe ='Kas'")->row(),

                // sedekah yatim & duafa
                'sedekah_masuk' => $this->db->query("SELECT * FROM tb_transaksi WHERE tipe = 'Sedekah' AND jenis_transaksi = 'Pemasukan' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->result_array(),
                'sedekah_keluar' => $this->db->query("SELECT * FROM tb_transaksi WHERE tipe = 'Sedekah' AND jenis_transaksi = 'Pengeluaran' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->result_array(),

                'total_sedekah_masuk' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pemasukan' AND tipe ='Sedekah' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->row(),
                'total_sedekah_keluar' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pengeluaran' AND tipe ='Sedekah' AND date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->row(),

                'total_sedekah_keseluruhan' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_dana_sedekah")->row(),
                'total_sedekah_pengeluaran' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pengeluaran' AND tipe ='Sedekah'")->row(),

                // donatur
                'total_uang_donatur' => $this->db->query("SELECT SUM(total) AS total FROM tb_donatur WHERE date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->row(),
                'donatur_baru' => $this->db->query("SELECT * FROM tb_donatur WHERE date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->result_array(),

            );

            $page['title'] = 'Admin-Laporan';
            $this->load->view('layout_admin/head', $page);
            $this->load->view('layout_admin/sidebar');
            $this->load->view('layout_admin/header');
            $this->load->view('admin/laporan_tampil', $data);
            $this->load->view('layout_admin/footer');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
