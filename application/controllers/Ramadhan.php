<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ramadhan extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/ramadhan_data');
        $this->load->view('layout_admin/footer');
    }
    public function transaksi_ramadhan()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/ramadhan_form');
        $this->load->view('layout_admin/footer');
    }
}
