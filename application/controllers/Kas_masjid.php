<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas_masjid extends CI_Controller
{
    public function index()
    {

        // pagination
        $config['base_url'] = 'http://localhost/skripsi_okta/kas_masjid/index';
        $config['total_rows'] = $this->masjid_model->hitungDataKas();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'arus_kas' => $this->masjid_model->getKas($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3),
            'pemasukan' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_kas")->row(),
            'pengeluaran' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE jenis_transaksi ='Pengeluaran' AND tipe ='Kas'")->row(),
        );
        $page['title'] = 'Admin-Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kas_data', $data);
        $this->load->view('layout_admin/footer');
    }

    // total masuk

    public function transaksi_masuk()
    {
        $page['title'] = 'Kelola kas - transaksi masuk';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kas_form_masuk');
        $this->load->view('layout_admin/footer');
    }

    public function transaksi_masuk_aksi()
    {
        $this->_rules_masuk();

        if ($this->form_validation->run() == FALSE) {
            $this->transaksi_masuk();
        } else {
            $tanggal                 = $this->input->post('tanggal_transaksi');
            $jenis_transaksi         = $this->input->post('jenis_transaksi');
            $ket                     = $this->input->post('ket');
            $total_transaksi         = $this->input->post('total_transaksi');
            $admin                   = $this->input->post('admin');

            $data1 = array(
                'tanggal'           => $tanggal,
                'jenis_transaksi'   => $jenis_transaksi,
                'keterangan'        => $ket,
                'total'             => $total_transaksi,
                'nama_admin'        => $admin,
                'tipe'              => 'as',
            );

            $data2 = array(
                'total_kas'         => $total_transaksi
            );

            $this->masjid_model->insert_data($data1, 'tb_transaksi');
            $this->masjid_model->insert_data($data2, 'tb_kas');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah kas berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('kas_masjid/');
        }
    }

    public function _rules_masuk()
    {
        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('total_transaksi', 'Total kas masuk', 'required', array('required' => '{field} tidak boleh kosong!'));
    }


    // end total masuk
    public function transaksi_keluar()
    {
        $page['title'] = 'Kelola kas - transaksi keluar';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kas_form_keluar');
        $this->load->view('layout_admin/footer');
    }

    public function transaksi_keluar_aksi()
    {
        $this->_rules_keluar();

        if ($this->form_validation->run() == FALSE) {
            $this->transaksi_masuk();
        } else {
            $tanggal                 = $this->input->post('tanggal_transaksi');
            $jenis_transaksi         = $this->input->post('jenis_transaksi');
            $ket                     = $this->input->post('ket');
            $total_transaksi         = $this->input->post('total_transaksi');
            $admin                   = $this->input->post('admin');

            $data1 = array(
                'tanggal'           => $tanggal,
                'jenis_transaksi'   => $jenis_transaksi,
                'keterangan'        => $ket,
                'total'             => $total_transaksi,
                'nama_admin'        => $admin,
            );

            $this->masjid_model->insert_data($data1, 'tb_transaksi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  Pengeluaran kas berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('kas_masjid/');
        }
    }

    public function _rules_keluar()
    {
        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('total_transaksi', 'Total kas masuk', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
