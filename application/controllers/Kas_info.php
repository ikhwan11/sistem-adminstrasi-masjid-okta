<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas_info extends CI_Controller
{
    public function index()
    {
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/skripsi_okta/kas_info/index';

        $this->db->like('nama', $data['keyword']);
        $this->db->from('tb_nasabah');

        $config['total_rows'] = $this->db->count_all_results();


        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'nasabah' => $this->masjid_model->getNs($config['per_page'], $data['start'], $data['keyword']),
            'total_rows' => $config['total_rows'],

            // kas masjid
            'pemasukan_kas' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_kas")->row(),
            'pengeluaran_kas' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pengeluaran' AND tipe ='Kas'")->row(),

            // sedekah
            'pemasukan_sed' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_dana_Sedekah")->row(),
            'pengeluaran_sed' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE tipe = 'Sedekah' AND jenis_transaksi ='Pengeluaran'")->row(),
        );

        $page['title'] = 'Info keuangan';
        $this->load->view('layout_beranda/header2', $page);
        $this->load->view('kas_view', $data);
        $this->load->view('layout_beranda/footer');
    }
    public function detailKas()
    {
        $data['kas'] = $this->db->query("SELECT * FROM tb_transaksi WHERE jenis_transaksi = 'Pengeluaran' AND tipe = 'Kas'")->result_array();
        $page['title'] = 'Info keuangan-detail kas';
        $this->load->view('layout_beranda/header2', $page);
        $this->load->view('pengeluaranKas_detail', $data);
        $this->load->view('layout_beranda/footer');
    }
    public function detailSed()
    {
        $data['sedekah'] = $this->db->query("SELECT * FROM tb_transaksi WHERE jenis_transaksi = 'Pengeluaran' AND tipe = 'Sedekah'")->result_array();
        $page['title'] = 'Info keuangan-detail kas';
        $this->load->view('layout_beranda/header2', $page);
        $this->load->view('pengeluaranSed_detail', $data);
        $this->load->view('layout_beranda/footer');
    }
    public function detailNas($id)
    {
        $data = array(
            'nasabah' => $this->db->query("SELECT * FROM tb_nasabah WHERE id_nasabah = '$id'")->result_array(),

            'tabungan' => $this->db->query("SELECT * FROM tb_tabungan  WHERE id_nasabah = '$id' ORDER BY id_tabungan DESC")->result_array(),

            'banyak' => $this->db->query("SELECT SUM(total) AS total FROM tb_tabungan WHERE id_nasabah = '$id'")->row(),
        );
        $page['title'] = 'Info keuangan-detail kas';
        $this->load->view('layout_beranda/header2', $page);
        $this->load->view('nasabah_detail', $data);
        $this->load->view('layout_beranda/footer');
    }
}
