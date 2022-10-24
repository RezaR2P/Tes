<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tautan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tautan_model');
        $this->load->model('video_model');
        $this->load->model('photo_model');
    }

    public function inti() 
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getDataInti();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "INTI";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("tautan/inti", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function koperasi() 
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getDataKoperasi();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Koperasi";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("tautan/koperasi", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function serikatKerja() 
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getDataKerja();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Serikat Kerja";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("tautan/serikatkerja", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    function alpha_dash_space($str_in = '')
    {
        return (!preg_match("/^([-a-z0-9_ ])+$/i", $str_in)) ? FALSE : TRUE;
    }

    public function add() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('tautan', 'Tautan', 'required|xss_clean');
        
        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Tautan Gagal Ditambahkan');
        } else {
            $this->tautan_model->save();
            $this->session->set_flashdata('tautanSuccess', 'Ditambahkan');
            redirect('article');
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Tambah Tautan";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("tautan/add", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit($id_tautan) 
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getById($id_tautan);
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Edit Tautan";
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
    

    public function delete($id_tautan = null) {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $content = $this->tautan_model->getById($id_tautan);
        if( !$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        if (!isset($id_tautan)) show_404();
        
        if($content->username != $this->session->userdata('username')) {
            redirect('article');
        } else {
            if ($this->tautan_model->delete($id_tautan)) {
                $this->session->set_flashdata('success', 'Dihapus');
                redirect(base_url('user/tautan/') . $content->username);
            }
        }
    }
}
