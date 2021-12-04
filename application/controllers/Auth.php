<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m');
        $this->load->model('User_m');
    }

    public function index()
    {
        $this->cekLogin();
        $data['title'] = 'Halaman Login';
        $this->form_validation->set_rules('username', 'username', 'required|trim', ['required' => 'username wajib di isi!.']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password wajib di isi!.']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login', $data);
            $this->load->view('layout/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->Auth_m->get_where('users', ['username' => $username])->row_array();
        if ($user != null) {
            if (sha1($password) == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level'],
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar!.</div>');
            redirect('auth');
        }
    }
    public function cekLogin()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/dashboard');
        }
    }

    public function registration()
    {
        $data['judul'] = 'Registrasi';
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim', ['required' => 'username wajib di isi!.']);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('nohp', 'nohp', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|max_length[12]');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama_lengkap' => html_escape($this->input->post('nama_lengkap', true)),
                'username' => html_escape($this->input->post('username', true)),
                'alamat' => html_escape($this->input->post('alamat', true)),
                'nohp' => html_escape($this->input->post('nohp', true)),
                'password' => html_escape(sha1($this->input->post('password', true))),
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Register silahkan login.</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Berhasil Logout.</div>');
        redirect('auth');
    }
}
