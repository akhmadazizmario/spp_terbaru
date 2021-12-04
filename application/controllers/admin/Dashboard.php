<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('User_m');
		cekSession();
	}

	public function index()
	{
		$data['title'] = 'Dashboard ADMIN';
		$data['user'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['siswa_aktif'] = $this->Auth_m->countTotalSiswa();
		$data['user_aktif'] = $this->Auth_m->countTotalUser();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/topbar', $data);
		$this->load->view('admin/dashboard', $data);
	}
}
