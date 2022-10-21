<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function registration()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') != 1)) {
            redirect('article');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already register'
        ]);
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
                'id_user' => 'user_' . date('Ym') . mt_rand(11111, 99999),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'avatar' => 'default.jpg',
                'role' => htmlspecialchars($this->input->post('role', true)),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('msg_success', 'Congratulation! your account has been created. Please Login');
            redirect('admin/registration');
        }
    }
}
