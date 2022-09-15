<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view("layout/header");
        $this->load->view("layout/navbar");
        $this->load->view("admin/index");
        $this->load->view("layout/footer");
    }
    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
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
            $this->load->view("layout/navbar");
            $this->load->view("admin/registration");
            $this->load->view("layout/footer");
        } else {

            $data = [
                'id_user' => rand(),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'avatar' => 'default.jpg',
                'role_id' => 2,
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('msg_success', 'Congratulation! your account has been created. Please Login');
            redirect('auth');
        }
    }
}
