<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('video_model');
    }

    function alpha_dash_space($str_in = '')
    {
        return (!preg_match("/^([-a-z0-9_ ])+$/i", $str_in)) ? FALSE : TRUE;
    }

    public function add() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('url', 'Url', 'required');
        
        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Video Gagal Ditambahkan');
        } else {
            $this->video_model->save();
            $this->session->set_flashdata('videoSuccess', 'Ditambahkan');
            redirect('article');
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["title"] = "Tambah Video";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("video/add", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('url', 'Url', 'required');
        
        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Video Gagal Ditambahkan');
        } else {
            $this->video_model->update();
            $this->session->set_flashdata('videoSuccess', 'Ditambahkan');
            redirect('article');
        }
    }
    

    public function deleteVideo($id_video) {
        if( !$this->session->userdata('username')) {
            redirect('auth');
        }

        if (!isset($id_video)) show_404();
        
        if ($this->article_model->delete($id_video)) {
            $this->session->set_flashdata('videoSuccess', 'Dihapus');
            redirect('article');
        }
    }
}
