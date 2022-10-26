<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regulasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('regulasi_model');
        $this->load->model('video_model');
        $this->load->model('photo_model');
        
    }

   public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // Pagination
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/inti/pengumuman/index';
        $config['total_rows'] = $this->regulasi_model->getTotalRows();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;

        
        $this->pagination->initialize($config);
        $offset = $this->uri->segment(3);



        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["db_article"] = $this->regulasi_model->getData( $config['per_page'], $offset);
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Regulasi";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("regulasi/index", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

}