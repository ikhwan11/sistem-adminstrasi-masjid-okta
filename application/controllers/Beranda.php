<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{
		$this->load->view('layout_beranda/header');
		$this->load->view('beranda_view');
		$this->load->view('layout_beranda/footer');
	}
}
