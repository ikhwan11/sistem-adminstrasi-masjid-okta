<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas_masjid extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kas_data');
        $this->load->view('layout_admin/footer');
    }

    public function transaksi()
    {
        $page['title'] = 'Kelola kas - transaksi';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/kas_form');
        $this->load->view('layout_admin/footer');
    }
}
