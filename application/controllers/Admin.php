<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data = array(
            'arus_kas' => $this->db->query("SELECT * FROM tb_transaksi ORDER BY id_transaksi DESC LIMIT 5")->result(),
        );
        $page['title'] = 'Admin-Dashboard';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/admin_view', $data);
        $this->load->view('layout_admin/footer');
    }
}
