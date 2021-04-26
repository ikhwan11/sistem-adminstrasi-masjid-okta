<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donatur extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/donatur_data');
        $this->load->view('layout_admin/footer');
    }
    public function tambah_donatur()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/donatur_form');
        $this->load->view('layout_admin/footer');
    }
}
