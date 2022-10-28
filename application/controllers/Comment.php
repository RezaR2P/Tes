<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('photo_model');
        $this->load->model('video_model');
        $this->load->model('comment_model');
        $this->load->helper(array('form', 'url'));
        
    }


    public function add() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('comment', 'Comment', 'required|xss_clean');
        
        $validation = $this->form_validation;
        $this->form_validation->set_message('required', '%s Harus diisi');

        $id_article =  $this->uri->segment(3);

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Komentar Gagal Ditambahkan');
        } else {
            $this->comment_model->save();
            $this->session->set_flashdata('commentSuccess', 'Ditambahkan');
            redirect(base_url('article/maincontent/') . $this->input->post('id_article'));
        }
    }

    public function edit($id_comment) 
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getById($id_comment);
        $data["title"] = "Edit Komentar";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("tautan/edit", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function prosesEdit() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('url', 'Url', 'required');
        
        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Tautan Gagal Diubah');
        } else {
            $this->tautan_model->update();
            $this->session->set_flashdata('tautanSuccess', 'Diubah');
            redirect('article');
        }
    }
    

    public function delete($id_comment = null) {
        if( !$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        if (!isset($id_comment)) show_404();
        
        if ($this->comment_model->delete($id_comment)) {
            $this->session->set_flashdata('commentSuccess', 'Dihapus');
            if($this->session->userdata('role') == 1) {
                redirect(base_url('admin/comment/'));
            } else {
                redirect(base_url('user/comment/') . $this->session->userdata('username'));
            }
            
        }
    }
}
