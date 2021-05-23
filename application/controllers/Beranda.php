<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{
		$config['base_url'] = 'http://localhost/skripsi_okta/beranda/index';
		$config['total_rows'] = $this->masjid_model->hitungDataAcara();
		$config['per_page'] = 6;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data = array(
			'acara' => $this->masjid_model->getAcara($config['per_page'], $data['start']),
		);
		$page['title'] = 'Beranda';
		$this->load->view('layout_beranda/header', $page);
		$this->load->view('beranda_view', $data);
		$this->load->view('layout_beranda/footer');
	}
}
