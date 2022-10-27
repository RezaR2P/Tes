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
        if (!$this->session->userdata('username')) {
            redirect('auth');
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
        if (!$this->session->userdata('username')) {
            redirect('auth');
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
        if (!$this->session->userdata('username')) {
            redirect('auth');
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
        if (!$this->session->userdata('username')) {
            redirect('auth');
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

    public function profile() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data["title"] = "Profil Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/index", $data);
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
                
            
            $config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 20480000;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
			if(!$this->upload->do_upload('gambar')){ 
                // $id = $this->uri->segment(3);
                // $old_image = $this->article_model->getById($id);
                $data = array(
                    'avatar' => $user->avatar, 
                    'id_user' => $this->input->post('id_user'),
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                );
                $this->user_model->update($data, $this->input->post('id_user'));
                $this->session->set_flashdata('userSuccess', 'Diubah');
                redirect(base_url('user/edit/'). $this->session->userdata('username'));
            }else {
                $old_image = $user->avatar;
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/content/' . $old_image);
                }
                
                $new_image = $this->upload->data('file_name');
               
                $data = array(
                    'avatar' => $new_image, 
                    'id_user' => $this->input->post('id_user'),
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                );
                $this->user_model->update($data, $this->input->post('id_user'));
                $this->session->set_flashdata('success', 'Diubah');
                redirect(base_url('user/profile/'). $this->session->userdata('username'));
            }
                
        }

    }
}
