<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('form_login');
    }

    public function login()
    {
        $page['title'] = 'Admin';
        $this->load->view('layout_admin/head', $page);
        $this->load->view('layout_admin/sidebar');
        $this->load->view('layout_admin/header');
        $this->load->view('admin/admin_view');
        $this->load->view('layout_admin/footer');
    }
}
