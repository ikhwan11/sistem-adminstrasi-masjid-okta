<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donatur extends CI_Controller
{
    public function index()
    {

        $config['base_url'] = 'http://localhost/skripsi_okta/donatur/index';
        $config['total_rows'] = $this->masjid_model->hitungDataDon();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'donatur' => $this->masjid_model->getDon($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3),
            'pemasukan' => $this->db->query("SELECT SUM(total) AS total FROM tb_donatur")->row(),
        );

        $page['title'] = 'Admin-Donatur';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/donatur_data', $data);
        $this->load->view('layout_admin/footer');
    }
    public function tambah_donatur()
    {
        $page['title'] = 'Donatur-tambah donatur';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/donatur_form');
        $this->load->view('layout_admin/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_donatur();
        } else {
            $nama                 = $this->input->post('nama');
            $tanggal              = $this->input->post('tanggal');
            $alamat               = $this->input->post('alamat');
            $total                = $this->input->post('total');
            $admin                = $this->input->post('admin');

            $data = array(
                'nama'      => $nama,
                'tanggal'   => $tanggal,
                'alamat'    => $alamat,
                'total'     => $total,
            );

            $data2 = array(
                'total_kas' => $total
            );

            $data3 = array(
                'nama_admin' => $admin,
                'jenis_transaksi' => 'Pemasukan',
                'keterangan' => 'Uang donatur masjid',
                'tanggal' => $tanggal,
                'total' => $total,
                'tipe' => 'Donatur'
            );

            $this->masjid_model->insert_data($data, 'tb_donatur');
            $this->masjid_model->insert_data($data2, 'tb_kas');
            $this->masjid_model->insert_data($data3, 'tb_transaksi');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah donatur berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('donatur/');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama donatur', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('total', 'Total', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
