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

        // Search
        if($this->input->post('keyword')) {
           $data['keyword'] = $this->input->post('keyword');
           $this->session->set_userdata('keyword', $data['keyword']);
        } else {
           $data['keyword'] =null;
        }

        // Pagination
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/inti/tautan/inti/index';
        $config['total_rows'] = $this->tautan_model->getTotalRowsInti();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        
        $this->pagination->initialize($config);
        $offset = $this->uri->segment(4);



        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getDataInti( $config['per_page'], $offset ,$data['keyword']);
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Tautan Inti";
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

        // Search
        if($this->input->post('keyword')) {
           $data['keyword'] = $this->input->post('keyword');
           $this->session->set_userdata('keyword', $data['keyword']);
        } else {
           $data['keyword'] =null;
        }

        // Pagination
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/inti/tautan/koperasi/index';
        $config['total_rows'] = $this->tautan_model->getTotalRowsKoperasi();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        
        $this->pagination->initialize($config);
        $offset = $this->uri->segment(4);



        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getDataKoperasi( $config['per_page'], $offset ,$data['keyword']);
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Tautan Koperasi";
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

        // Search
        if($this->input->post('keyword')) {
           $data['keyword'] = $this->input->post('keyword');
           $this->session->set_userdata('keyword', $data['keyword']);
        } else {
           $data['keyword'] =null;
        }

        // Pagination
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/inti/tautan/serikatkerja/index';
        $config['total_rows'] = $this->tautan_model->getTotalRowsSerikat();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        
        $this->pagination->initialize($config);
        $offset = $this->uri->segment(4);



        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["tautan"] = $this->tautan_model->getDataSerikat( $config['per_page'], $offset ,$data['keyword']);
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Tautan Serikat Kerja";
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
