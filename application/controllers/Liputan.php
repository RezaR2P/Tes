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
        $this->load->model('pengumuman_model');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // Pagination
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/inti/liputan/index';
        $config['total_rows'] = $this->liputan_model->getTotalRows();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;

        
        $this->pagination->initialize($config);
        $offset = $this->uri->segment(3);



        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["db_article"] = $this->liputan_model->getData( $config['per_page'], $offset);
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();        $data["pengumuman"] = $this->pengumuman_model->getOneData();
        $data["title"] = "Liputan";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitleSearch", $data);
        $this->load->view("liputan/index", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

}