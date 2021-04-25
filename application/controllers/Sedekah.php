<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sedekah extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/sedekah_data');
        $this->load->view('layout_admin/footer');
    }

    public function kelola_dana()
    {
        $page['title'] = 'Kelola kas';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/sedekah_form');
        $this->load->view('layout_admin/footer');
    }
}