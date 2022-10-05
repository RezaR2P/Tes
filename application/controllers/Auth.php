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
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('msg_error', 'Username tidak terdaftar');
            redirect('auth');
        }
    }


    private function _sendEmail($token, $type)
    {
        $this->load->library('email');
        $config = array();
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'kecilreza575@gmail.com';
        $config['smtp_pass'] = 'sitllibvxndgjgiq';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $this->email->from('kecilreza575@gmail.com', 'Reza Aja');
        $this->email->to($this->input->post('email'));
        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }


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

    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user_token', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changepassword();
            } else {
                $this->session->set_flashdata('msg_error', 'Reset password failed! Wrong token.');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('msg_error', 'Reset password failed! Wrong email.');
            redirect('auth');
        }
    }

    public function changepassword()
    {

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view("layout/header", $data);
            $this->load->view("auth/change-password");
            $this->load->view("layout/footer");
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');
            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('msg_success', 'Password has been change please login.');
            redirect('auth');
        }
    }
}
