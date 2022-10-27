<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Liputan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('liputan_model');
        $this->load->model('video_model');
        $this->load->model('photo_model');
        
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["db_article"] = $this->liputan_model->getData();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Liputan";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("liputan/index", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

}