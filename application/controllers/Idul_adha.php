<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Idul_adha extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kurban_data');
        $this->load->view('layout_admin/footer');
    }

    public function tambah_nasabah()
    {
        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kurban_form');
        $this->load->view('layout_admin/footer');
    }

    public function detail()
    {
        $page['title'] = 'Admin-tabungan kurban';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kurban_detail');
        $this->load->view('layout_admin/footer');
    }
}
