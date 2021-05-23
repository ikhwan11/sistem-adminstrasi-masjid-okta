<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
{
    public function index()
    {
        $config['base_url'] = 'http://localhost/skripsi_okta/acara/index';
        $config['total_rows'] = $this->masjid_model->hitungDataAcara();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'acara' => $this->masjid_model->getAcara($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3)
        );
        $page['title'] = 'Admin-Acara';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/acara_data', $data);
        $this->load->view('layout_admin/footer');
    }
    public function tambah()
    {
        $page['title'] = 'Acara-tambah data';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/acara_form');
        $this->load->view('layout_admin/footer');
    }

    public function tambah_aksi()
    {
        $judul                 = $this->input->post('judul');
        $rangka                 = $this->input->post('rangka');
        $tanggal                 = $this->input->post('tanggal');
        $mulai                 = $this->input->post('mulai');
        $selesai                 = $this->input->post('selesai');
        $pengisi                 = $this->input->post('pengisi');
        $tempat                 = $this->input->post('tempat');
        $admin                 = $this->input->post('admin');
        $keterangan                 = $this->input->post('ket');
        $foto                 = $_FILES['foto']['name'];

        if ($foto = '') {
        } else {
            $config['upload_path']     = './assets/banner_acara';
            $config['allowed_types']    = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Foto gagal di upload!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'admin'              => $admin,
            'judul_acara'              => $judul,
            'tujuan_acara'              => $rangka,
            'tanggal_acara'              => $tanggal,
            'waktu_mulai'              => $mulai,
            'waktu_selesai'              => $selesai,
            'pengisi_acara'              => $pengisi,
            'tempat_acara'              => $tempat,
            'keterangan'              => $keterangan,
            'foto'              => $foto
        );


        $this->masjid_model->insert_data($data, 'tb_acara');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah acara berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('acara/');
    }

    public function edit($id)
    {
        $data['acara'] = $this->db->query("SELECT * FROM tb_acara WHERE id_acara = '$id'")->result_array();
        $page['title'] = 'Acara-tambah data';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/acara_edit', $data);
        $this->load->view('layout_admin/footer');
    }

    public function edit_aksi()
    {
        $id                 = $this->input->post('id');
        $judul                 = $this->input->post('judul');
        $rangka                 = $this->input->post('rangka');
        $tanggal                 = $this->input->post('tanggal');
        $mulai                 = $this->input->post('mulai');
        $selesai                 = $this->input->post('selesai');
        $pengisi                 = $this->input->post('pengisi');
        $tempat                 = $this->input->post('tempat');
        $admin                 = $this->input->post('admin');
        $keterangan                 = $this->input->post('ket');
        $foto                 = $_FILES['foto']['name'];

        if ($foto = '') {
        } else {
            $config['upload_path']     = './assets/banner_acara';
            $config['allowed_types']    = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Foto gagal di upload!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'admin'              => $admin,
            'judul_acara'              => $judul,
            'tujuan_acara'              => $rangka,
            'tanggal_acara'              => $tanggal,
            'waktu_mulai'              => $mulai,
            'waktu_selesai'              => $selesai,
            'pengisi_acara'              => $pengisi,
            'tempat_acara'              => $tempat,
            'keterangan'              => $keterangan,
            'foto'              => $foto
        );

        $where = array(
            'id_acara' => $id
        );


        $this->masjid_model->update_data('tb_acara', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Edit acara berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('acara/');
    }

    public function hapus($id)
    {
        $where = array('id_acara' => $id);

        $this->masjid_model->delete_data($where, 'tb_acara');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data acara dihapus!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('acara/');
    }
}
