<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Dashboard';
            $this->load->view("layout/header", $data);
            $this->load->view("admin/index");
            $this->load->view("layout/footer");
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 2) {
                    redirect('article');
                } else {
                    redirect('article');
                }
            } else {
                $this->session->set_flashdata('msg_error', 'Password Salah');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('msg_error', 'Username tidak terdaftar');
            redirect('admin');
        }
    }
    public function logout()
    {

        $this->session->unset_userdata('username');
        $this->session->set_flashdata('msg_success', 'Berhasil Logout');
        redirect('auth');
    }
}
