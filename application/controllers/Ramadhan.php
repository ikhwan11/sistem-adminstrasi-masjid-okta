<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ramadhan extends CI_Controller
{
    public function index()
    {

        $config['base_url'] = 'http://localhost/skripsi_okta/ramadhan/index';
        $config['total_rows'] = $this->masjid_model->hitungDataRamadhan();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'ramadhan' => $this->masjid_model->getRamadhan($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3),
            'pemasukan' => $this->db->query("SELECT SUM(total) AS total FROM tb_ramadhan WHERE jenis ='Pemasukan'")->row(),
            'pengeluaran' => $this->db->query("SELECT SUM(total) AS total FROM tb_ramadhan WHERE jenis ='Pengeluaran'")->row(),
        );

        $page['title'] = 'Admin-Ramadhan';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/ramadhan_data', $data);
        $this->load->view('layout_admin/footer');
    }

    // pemasukan
    public function pemasukan()
    {
        $page['title'] = 'Ramadhan-Pemasukan';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/ramadhan_form_pemasukan');
        $this->load->view('layout_admin/footer');
    }

    public function pemasukan_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->pemasukan();
        } else {
            $tanggal                 = $this->input->post('tanggal_transaksi');
            $hijriah                 = $this->input->post('hijriah');
            $ket                     = $this->input->post('ket');
            $total_transaksi         = $this->input->post('total_transaksi');
            $admin                   = $this->input->post('admin');

            $data = array(
                'tanggal'       => $tanggal,
                'ramadhan'      => $hijriah,
                'keterangan'    => $ket,
                'total'         => $total_transaksi,
                'admin'         => $admin,
                'jenis'         => 'Pemasukan'
            );


            $this->masjid_model->insert_data($data, 'tb_ramadhan');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah keuangan ramadhan berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('ramadhan/');
        }
    }

    // end
    public function pengeluaran()
    {
        $page['title'] = 'Ramadhan-pengeluaran';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/ramadhan_form_pengeluaran');
        $this->load->view('layout_admin/footer');
    }

    public function pengeluaran_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->pengeluaran();
        } else {
            $tanggal                 = $this->input->post('tanggal_transaksi');
            $hijriah                 = $this->input->post('hijriah');
            $ket                     = $this->input->post('ket');
            $total_transaksi         = $this->input->post('total_transaksi');
            $admin                   = $this->input->post('admin');

            $data = array(
                'tanggal'       => $tanggal,
                'ramadhan'      => $hijriah,
                'keterangan'    => $ket,
                'total'         => $total_transaksi,
                'admin'         => $admin,
                'jenis'         => 'Pengeluaran'
            );


            $this->masjid_model->insert_data($data, 'tb_ramadhan');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah Pengeluaran ramadhan berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('ramadhan/');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tanggal_transaksi', 'Tanggal', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('hijriah', 'Tanggal ramadhan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('total_transaksi', 'Total', 'required', array('required' => '{field} tidak boleh kosong!'));
    }

    // zakat
    public function zakat()
    {
        // pagination
        $config['base_url'] = 'http://localhost/skripsi_okta/ramadhan/zakat/index';
        $config['total_rows'] = $this->masjid_model->hitungDataZakat();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);

        $data = array(
            'zakat' => $this->masjid_model->getZakat($config['per_page'], $data['start']),
            'start' => $this->uri->segment(4),
        );

        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/zakat_data', $data);
        $this->load->view('layout_admin/footer');
    }
    public function transaksi_zakat()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/zakat_form');
        $this->load->view('layout_admin/footer');
    }

    public function input_zakat()
    {
        $this->_rules_zakat();

        if ($this->form_validation->run() == FALSE) {
            $this->transaksi_zakat();
        } else {
            $tanggal        = $this->input->post('tanggal_transaksi');
            $beras          = $this->input->post('merk_beras');
            $pemberi        = $this->input->post('pemberi');
            $anggota        = $this->input->post('anggota');
            $total_harga    = $this->input->post('total_harga');
            $admin          = $this->input->post('admin');

            $data = array(
                'tanggal'           => $tanggal,
                'merk_beras'        => $beras,
                'nama_pemberi'      => $pemberi,
                'jumlah_anggota'    => $anggota,
                'total_harga'       => $total_harga,
                'admin'             => $admin,
            );

            $this->masjid_model->insert_data($data, 'tb_zakat');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah zakat berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('ramadhan/zakat');
        }
    }

    public function _rules_zakat()
    {
        $this->form_validation->set_rules('tanggal_transaksi', 'Tanggal', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('merk_beras', 'Merek beras', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('pemberi', 'Pemberi zakat', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('anggota', 'Jumlah anggota', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('total_harga', 'Total pembayaran', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
