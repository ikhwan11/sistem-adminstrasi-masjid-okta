<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sedekah extends CI_Controller
{
    public function index()
    {

        // pagination
        $config['base_url'] = 'http://localhost/skripsi_okta/sedekah/index';
        $config['total_rows'] = $this->masjid_model->hitungDataDana();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'dana' => $this->masjid_model->getDana($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3),

            'pemasukan' => $this->db->query("SELECT SUM(total_kas) AS total_kas FROM tb_dana_Sedekah")->row(),

            'pengeluaran' => $this->db->query("SELECT SUM(total) AS total FROM tb_transaksi WHERE tipe = 'Sedekah' AND jenis_transaksi ='Pengeluaran'")->row(),
        );
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/sedekah_data', $data);
        $this->load->view('layout_admin/footer');
    }

    // dana masuk

    public function kelola_dana_masuk()
    {

        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/sedekah_form_masuk');
        $this->load->view('layout_admin/footer');
    }

    public function masuk_aksi()
    {
        $this->_rules_masuk();

        if ($this->form_validation->run() == FALSE) {
            $this->kelola_dana_masuk();
        } else {
            $tanggal                 = $this->input->post('tanggal_transaksi');
            $jenis_transaksi         = $this->input->post('jenis_transaksi');
            $ket                     = $this->input->post('ket');
            $total_transaksi         = $this->input->post('total_transaksi');
            $admin                   = $this->input->post('admin');

            $data = array(
                'tanggal'           => $tanggal,
                'jenis_transaksi'   => $jenis_transaksi,
                'keterangan'        => $ket,
                'total'             => $total_transaksi,
                'nama_admin'        => $admin,
                'tipe'              => 'Sedekah',
            );

            $data2 = array(
                'total_kas'         => $total_transaksi
            );

            $this->masjid_model->insert_data($data, 'tb_transaksi');
            $this->masjid_model->insert_data($data2, 'tb_dana_sedekah');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah dana berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('sedekah/');
        }
    }

    public function _rules_masuk()
    {
        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('total_transaksi', 'Total kas masuk', 'required', array('required' => '{field} tidak boleh kosong!'));
    }

    // dana keluar

    public function kelola_dana_keluar()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/sedekah_form_keluar');
        $this->load->view('layout_admin/footer');
    }

    public function keluar_aksi()
    {
        $this->_rules_keluar();

        if ($this->form_validation->run() == FALSE) {
            $this->kelola_dana_keluar();
        } else {
            $tanggal                 = $this->input->post('tanggal_transaksi');
            $jenis_transaksi         = $this->input->post('jenis_transaksi');
            $ket                     = $this->input->post('ket');
            $total_transaksi         = $this->input->post('total_transaksi');
            $admin                   = $this->input->post('admin');

            $data = array(
                'tanggal'           => $tanggal,
                'jenis_transaksi'   => $jenis_transaksi,
                'keterangan'        => $ket,
                'total'             => $total_transaksi,
                'nama_admin'        => $admin,
                'tipe'              => 'Sedekah',
            );

            $this->masjid_model->insert_data($data, 'tb_transaksi');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah dana berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('sedekah/');
        }
    }

    public function _rules_keluar()
    {
        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('total_transaksi', 'Total kas masuk', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
