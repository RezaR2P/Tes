<?php

use function PHPSTORM_META\type;

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
            $data['title'] = 'Login page';
            $this->load->view("layout/header", $data);
            $this->load->view("auth/index");
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


    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'kecilreza575@gmail.com',
            'smtp_pass' => '1234567890',
            'smtp_port' =>  465,
            'mailtype' =>  'html',
            'starttls'  => true,
            'charset' =>  'utf-8',
            'newline' =>  "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('kecilreza575@gmail.com', 'Reza Aja');
        $this->email->to('rezaramdanp@gmail.com');
        $this->email->subject('Reset Password');
        $this->email->message('p');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }





    public function logout()
    {

        $this->session->unset_userdata('username');
        $this->session->set_flashdata('msg_success', 'Berhasil Logout');
        redirect('auth');
    }

    public function forgotpassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Password';
            $this->load->view("layout/header", $data);
            $this->load->view("auth/forgot-password");
            $this->load->view("layout/footer");
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('msg_success', 'Please check your email to reset password');
                redirect('auth/forgotpassword');
            } else {
                $this->session->set_flashdata('msg_error', 'Email is not registered');
                redirect('auth/forgotpassword');
            }
        }
    }
}
