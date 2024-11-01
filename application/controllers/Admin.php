<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('comment_model');
        $this->load->model('article_model');
        $this->load->model('tautan_model');
        $this->load->model('photo_model');
        $this->load->model('video_model');
        $this->load->helper(array('form', 'url'));
       
    }

    public function registration()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') != 1)) {
            redirect('article');
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Admin';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("admin/registration", $data);
        $this->load->view("layout/footer", $data);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah Terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Password terlalu Singkat!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Admin gagal Ditambahkan');
        } else {
            $this->admin_model->save();
            $this->session->set_flashdata('adminSuccess', 'Ditambahkan');
            redirect('admin/registration');
        }

     
    }

    public function menu()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('role') != 1) {
            redirect(base_url('user/profile/') . $this->session->userdata('username'));
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Menu Management';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("admin/menu", $data);
        $this->load->view("layout/footer", $data);
    }

    public function comment()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('role') != 1) {
            redirect(base_url('user/profile/') . $this->session->userdata('username'));
        }

        $data['comments'] = $this->comment_model->getAllData();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Maintain Komentar';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("admin/comment", $data);
        $this->load->view("layout/footer", $data);
    }

    public function article()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('role') != 1) {
            redirect(base_url('user/profile/') . $this->session->userdata('username'));
        }
        
        $data['article'] = $this->article_model->getAllData();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Maintain Artikel';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("admin/article", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tautan()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('role') != 1) {
            redirect(base_url('user/profile/') . $this->session->userdata('username'));
        }
        
        $data['tautan'] = $this->tautan_model->getAllData();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Maintain Tautan';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("admin/tautan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function photo()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('role') != 1) {
            redirect(base_url('user/profile/') . $this->session->userdata('username'));
        }
        
        $data['photo'] = $this->photo_model->getAllData();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Maintain Foto';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("admin/photo", $data);
        $this->load->view("layout/footer", $data);
    }

     public function video()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('role') != 1) {
            redirect(base_url('user/profile/') . $this->session->userdata('username'));
        }
        
        $data['video'] = $this->video_model->getAllData();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Maintain Foto';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("admin/video", $data);
        $this->load->view("layout/footer", $data);
    }
}
