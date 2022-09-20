<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password not match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header");
            $this->load->view("admin/registration");
            $this->load->view("layout/footer");
        } else {

            $data = [
                'id_user' => rand(1, 1000),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'avatar' => 'default.jpg',
                'role' => 2,
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('msg_success', 'Congratulation! your account has been created. Please Login');
            redirect('admin/registration');
        }
    }
}
