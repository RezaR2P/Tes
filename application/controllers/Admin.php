<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function registration()
    {
        $this->load->library('form_validation');
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
