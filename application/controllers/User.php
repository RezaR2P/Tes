<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('article_model');
        $this->load->model('photo_model');
        $this->load->model('video_model');
        $this->load->model('comment_model');
        $this->load->model('tautan_model');
        $this->load->library('upload');

        date_default_timezone_set('Asia/Jakarta');

        $this->get_datasess = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
    }

    public function article($username)
    {
        $user = $this->user_model->getByUser($username);
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('username') != $user->username) {
            redirect(base_url('user/article/') . $this->session->userdata('username'));
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["contentuser"] = $this->article_model->getByUser($username);
        
        $data["title"] = "Artikel Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/article", $data);
        $this->load->view("layout/footer", $data);
    }

    public function photo($username) {
        $user = $this->user_model->getByUser($username);
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('username') != $user->username) {
            redirect(base_url('user/photo/') . $this->session->userdata('username'));
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["photo"] = $this->photo_model->getByUser($username);
        
        $data["title"] = "Foto Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/photo", $data);
        $this->load->view("layout/footer", $data);
    }

    public function video($username) {
        $user = $this->user_model->getByUser($username);
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('username') != $user->username) {
            redirect(base_url('user/video/') . $this->session->userdata('username'));
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["video"] = $this->video_model->getByUser($username);
        
        $data["title"] = "Video Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/video", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tautan($username) {
        $user = $this->user_model->getByUser($username);
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('username') != $user->username) {
            redirect(base_url('user/tautan/') . $this->session->userdata('username'));
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getByUser($username);
        
        $data["title"] = "Tautan Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/tautan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function comment($username) {
        $user = $this->user_model->getByUser($username);
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('username') != $user->username) {
            redirect(base_url('user/comment/') . $this->session->userdata('username'));
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["comments"] = $this->comment_model->getByUser($username);
        
        $data["title"] = "Komentar Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/comment", $data);
        $this->load->view("layout/footer", $data);
    }

    public function profile()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Menu Management';
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/profile", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit($username)
    {
        $user = $this->user_model->getByUser($username);

         if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if($this->session->userdata('username') != $user->username) {
            redirect(base_url('user/edit/') . $this->session->userdata('username'));
        }

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('nipeg', 'Nipeg', 'xss_clean|max_length[10]|integer', ['integer' => "%s Hanya boleh diisi Angka"]);

        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|trim');

       

        $data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
      
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/edit", $data);
        $this->load->view("layout/footer", $data);
    }

    public function prosesEdit() 
    {
        $user =  $this->user_model->getByUser($this->session->userdata('username'));
        $this->load->library('form_validation');

        // $this->form_validation->set_rules('nipeg', 'Nipeg', 'xss_clean|max_length[10]|integer', ['integer' => "%s Hanya boleh diisi Angka"]);

        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Profil Gagal Diubah');
        } else {
                
            
            $config['upload_path']          = './assets/img/content/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 20480000;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);


            if (!$this->upload->do_upload('avatar')) {
                $this->session->set_userdata('upload_error', $this->upload->display_errors());
                redirect(base_url('user/edit/'). $this->session->userdata('username'));
            } else {
                // Hapus session upload error_get_last
                $this->session->unset_userdata('upload_error');

                // Ambil data avatar yang di upload
                $upload = $this->upload->data();

                $data = array(
                    'avatar' => ( $this->upload->data()) ? $upload['file_name'] : $user->avatar,
                    'id_user' => $this->input->post('id_user'),
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                );
                $this->user_model->update($data, $this->input->post('id_user'));
                $this->session->set_flashdata('userSuccess', 'Diubah');
                redirect(base_url('user/edit/'). $this->session->userdata('username'));
            }
        }
    }
}