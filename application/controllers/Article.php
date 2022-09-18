<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('article_model');
      }

    public function index()
    {
        $data["db_article"] = $this->article_model->getData();
        $data["title"] = "Dashboard";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/index", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    function alpha_dash_space($str_in = '') {
        return (! preg_match("/^([-a-z0-9_ ])+$/i", $str_in)) ? FALSE : TRUE;
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        if ($this->input->post('mainImage')) {
            // $image = $this->input->post('image');
           

           $upload_image = $_FILES['image']['name'];
           
           if($upload_image) {
               $config['allowed_types'] = 'gif|jpg|png|jpeg';
               $config['max_size'] = 20480;
               $config['upload_path'] = './assets/img/content/';


               $this->load->library('upload', $config);

               if($this->upload->do_upload('mainImage')) {
                   $new_image = $this->upload->data('file_name');
                   $this->db->set('images', $new_image);
               }
               
            };
        }

        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');
       
        $article = $this->article_model;
        $validation = $this->form_validation;
        // $validation->set_rules($crud->rules());
        // $validation->set_message($crud->errorMessage());

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Artikel Gagal Ditambahkan');
        } else {
            $article->save();
            $this->session->set_flashdata('success', 'Ditambahkan');
            redirect('article');
        } 

        $data["title"] = "Tambah Artikel";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/add", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit()
    {
        $data["title"] = "Edit Artikel";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/edit", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function mainContent($id_article) {
        $data["content"] = $this->article_model->getById($id_article);
        $data["title"] = "Konten Artikel";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/maincontent", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }
}
