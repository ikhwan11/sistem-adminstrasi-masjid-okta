<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Idul_adha extends CI_Controller
{
    public function index()
    {
        $config['base_url'] = 'http://localhost/skripsi_okta/idul_adha/index';
        $config['total_rows'] = $this->masjid_model->hitungDataNasabah();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'nasabah' => $this->masjid_model->getNasabah($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3),
        );

        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kurban_data', $data);
        $this->load->view('layout_admin/footer');
    }
    public function haji()
    {
        $config['base_url'] = 'http://localhost/skripsi_okta/idul_adha/haji/index';
        $config['total_rows'] = $this->masjid_model->hitungDataHaji();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);

        $data = array(
            'haji' => $this->masjid_model->getHaji($config['per_page'], $data['start']),
            'start' => $this->uri->segment(4),
        );

        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/haji_data', $data);
        $this->load->view('layout_admin/footer');
    }

    // nasabah kurban

    public function tambah_nasabah()
    {
        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kurban_form');
        $this->load->view('layout_admin/footer');
    }

    public function tambah_nasabah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_nasabah();
        } else {
            $nama                 = $this->input->post('nama');
            $jk                   = $this->input->post('jk');
            $no_hp                = $this->input->post('no_hp');
            $tl                   = $this->input->post('tl');
            $alamat               = $this->input->post('alamat');
            $hk                   = $this->input->post('hk');

            $data = array(
                'nama' => $nama,
                'jenis_kelamin' => $jk,
                'no_hp' => $no_hp,
                'tanggal_lahir' => $tl,
                'alamat' => $alamat,
                'kurban' => $hk,
                'jenis' => 'Kurban'
            );

            $this->masjid_model->insert_data($data, 'tb_nasabah');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah nasabah berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('idul_adha/');
        }
    }

    // nasabah haji
    public function tambah_nasabah_haji()
    {
        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/haji_form');
        $this->load->view('layout_admin/footer');
    }

    public function tambah_nasabah_haji_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_nasabah_haji();
        } else {
            $nama                 = $this->input->post('nama');
            $jk                   = $this->input->post('jk');
            $no_hp                = $this->input->post('no_hp');
            $tl                   = $this->input->post('tl');
            $alamat               = $this->input->post('alamat');
            $hk                   = $this->input->post('hk');

            $data = array(
                'nama' => $nama,
                'jenis_kelamin' => $jk,
                'no_hp' => $no_hp,
                'tanggal_lahir' => $tl,
                'alamat' => $alamat,
                'kurban' => $hk,
                'jenis' => 'Haji'
            );

            $this->masjid_model->insert_data($data, 'tb_nasabah');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah nasabah berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('idul_adha/haji');
        }
    }

    // nasabah end

    // tabungan kurban
    public function kurban_tambah()
    {

        $tanggal = $this->input->post('tanggal');
        $id_nasabah = $this->input->post('id_nasabah');
        $total = $this->input->post('total');
        $admin = $this->input->post('admin');

        $data = array(
            'tanggal' => $tanggal,
            'id_nasabah' => $id_nasabah,
            'total' => $total,
            'admin' => $admin,
        );

        $this->masjid_model->insert_data($data, 'tb_tabungan');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah tabungan berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('idul_adha/');
    }
    // tabungan haji
    public function haji_tambah()
    {

        $tanggal = $this->input->post('tanggal');
        $id_nasabah = $this->input->post('id_nasabah');
        $total = $this->input->post('total');
        $admin = $this->input->post('admin');

        $data = array(
            'tanggal' => $tanggal,
            'id_nasabah' => $id_nasabah,
            'total' => $total,
            'admin' => $admin,
        );

        $this->masjid_model->insert_data($data, 'tb_tabungan');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah tabungan berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('idul_adha/haji');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama nasabah', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('no_hp', 'No hp', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('tl', 'Tanggal lahir', 'required', array('required' => '{field} tidak boleh kosong!'));
    }


    public function detail_nasabah($id)
    {
        $data = array(
            'nasabah' => $this->db->query("SELECT * FROM tb_nasabah WHERE id_nasabah = '$id'")->result_array(),
            'tabungan' => $this->db->query("SELECT * FROM tb_tabungan tb, tb_nasabah nb WHERE tb.id_nasabah = nb.id_nasabah AND tb.id_nasabah = '$id' ORDER BY id_tabungan DESC LIMIT 5")->result_array(),

            'hewan' => $this->db->query("SELECT * FROM tb_nasabah WHERE id_nasabah = '$id'")->result_array(),

            'jumlah' => $this->db->query("SELECT SUM(total) AS total FROM tb_tabungan  WHERE id_nasabah = '$id'")->row(),
        );
        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kurban_detail', $data);
        $this->load->view('layout_admin/footer');
    }

    public function detail_nasabah_haji($id)
    {
        $data = array(
            'nasabah' => $this->db->query("SELECT * FROM tb_nasabah WHERE id_nasabah = '$id'")->result_array(),
            'tabungan' => $this->db->query("SELECT * FROM tb_tabungan tb, tb_nasabah nb WHERE tb.id_nasabah = nb.id_nasabah AND tb.id_nasabah = '$id' ORDER BY id_tabungan DESC LIMIT 5")->result_array(),

            'jumlah' => $this->db->query("SELECT SUM(total) AS total FROM tb_tabungan  WHERE id_nasabah = '$id'")->row(),
        );
        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/haji_detail', $data);
        $this->load->view('layout_admin/footer');
    }
}
