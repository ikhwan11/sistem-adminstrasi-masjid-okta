<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data = array(
            'user' => $this->masjid_model->get_data('tb_user')->result_array(),
        );
        $page['title'] = 'Admin-Kelola user';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/user_data', $data);
        $this->load->view('layout_admin/footer');
    }

    public function tambah_user($id)
    {
        $data['pengurus'] = $this->db->query("SELECT * FROM tb_staff WHERE id_staff = '$id'")->result_array();
        $page['title'] = 'Admin-Kelola user';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/pengurus_user', $data);
        $this->load->view('layout_admin/footer');
    }

    public function tambah_user_aksi()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data = array(
            'id_staff' => $id,
            'username' => $username,
            'nama' => $nama,
            'password' => $password,
        );
        $this->masjid_model->insert_data($data, 'tb_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah user berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/');
    }



    public function hapus_user($id)
    {
        $where = array('id_user' => $id);

        $this->masjid_model->delete_data($where, 'tb_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data user dihapus!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/');
    }

    public function edit_user($id)
    {
        $data['user'] = $this->db->query("SELECT * FROM tb_user WHERE id_user = '$id'")->result_array();
        $page['title'] = 'Kelola user-edit user';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/user_edit', $data);
        $this->load->view('layout_admin/footer');
    }

    public function edit_user_aksi()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data = array(
            'username' => $username,
            'password' => $password,
        );

        $where = array(
            'id_user' => $id
        );

        $this->masjid_model->update_data('tb_user', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Update user berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/');
    }

    // pengurus
    public function pengurus()
    {
        $data = array(
            'pengurus' => $this->masjid_model->get_data('tb_staff')->result_array(),
        );
        $page['title'] = 'Admin-Kelola pengurus';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/pengurus_data', $data);
        $this->load->view('layout_admin/footer');
    }
    public function tambah_pengurus()
    {
        $page['title'] = 'Kelola pengurus-Tambah pengurus';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/pengurus_form');
        $this->load->view('layout_admin/footer');
    }

    public function tambah_pengurus_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_pengurus();
        } else {
            $nama                 = $this->input->post('nama');
            $panggilan            = $this->input->post('panggilan');
            $jk1                  = $this->input->post('jk1');
            $tl                   = $this->input->post('tl');
            $no_hp                = $this->input->post('no_hp');
            $email                = $this->input->post('email');
            $jabatan              = $this->input->post('jabatan');
            $alamat1              = $this->input->post('alamat1');
            $alamat2              = $this->input->post('alamat2');


            $data = array(
                'nama_lengkap'      => $nama,
                'panggilan'         => $panggilan,
                'jenis_kelamin'     => $jk1,
                'tanggal_lahir'     => $tl,
                'no_hp'             => $no_hp,
                'email'             => $email,
                'jabatan'           => $jabatan,
                'alamat_domisili'   => $alamat1,
                'alamat_asal'       => $alamat2,
            );


            $this->masjid_model->insert_data($data, 'tb_staff');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah pengurus berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('user/pengurus');
        }
    }

    public function detail_pengurus($id)
    {
        $data['pengurus'] = $this->db->query("SELECT * FROM tb_staff WHERE id_staff = '$id'")->result_array();
        $page['title'] = 'Kelola pengurus-Detail pengurus';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/pengurus_detail', $data);
        $this->load->view('layout_admin/footer');
    }

    public function hapus_pengurus($id)
    {
        $where = array('id_staff' => $id);

        $this->masjid_model->delete_data($where, 'tb_staff');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data pengurus dihapus!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/pengurus');
    }

    public function edit_pengurus($id)
    {
        $data['pengurus'] = $this->db->query("SELECT * FROM tb_staff WHERE id_staff = '$id'")->result_array();
        $page['title'] = 'Kelola pengurus-edit pengurus';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/pengurus_edit', $data);
        $this->load->view('layout_admin/footer');
    }

    public function edit_pengurus_aksi()
    {
        $id                   = $this->input->post('id');
        $nama                 = $this->input->post('nama');
        $panggilan            = $this->input->post('panggilan');
        $jk1                  = $this->input->post('jk1');
        $tl                   = $this->input->post('tl');
        $no_hp                = $this->input->post('no_hp');
        $email                = $this->input->post('email');
        $jabatan              = $this->input->post('jabatan');
        $alamat1              = $this->input->post('alamat1');
        $alamat2              = $this->input->post('alamat2');


        $data = array(
            'nama_lengkap'      => $nama,
            'panggilan'         => $panggilan,
            'jenis_kelamin'     => $jk1,
            'tanggal_lahir'     => $tl,
            'no_hp'             => $no_hp,
            'email'             => $email,
            'jabatan'           => $jabatan,
            'alamat_domisili'   => $alamat1,
            'alamat_asal'       => $alamat2,
        );

        $where = array(
            'id_staff' => $id
        );


        $this->masjid_model->update_data('tb_staff', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data pengurus di update berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/pengurus');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama lengkap', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('panggilan', 'Nama panggilan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('jk1', 'Jenis kelamin', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('tl', 'Tanggal lahir', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('alamat1', 'Alamat domisili', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('alamat2', 'Alamat asal', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
