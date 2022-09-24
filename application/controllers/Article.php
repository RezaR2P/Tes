<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["db_article"] = $this->article_model->getData();
        $data["title"] = "Dashboard";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/index", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    function alpha_dash_space($str_in = '')
    {
        return (!preg_match("/^([-a-z0-9_ ])+$/i", $str_in)) ? FALSE : TRUE;
    }

    public function add()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('category', 'Category', 'required');
        
        // if ($this->input->post('image')) {
        //     // $image = $this->input->post('image');

        //     $upload_image = $_FILES['image']['name'];

        //     if ($upload_image) {
        //         $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        //         $config['max_size'] = 20480000;
        //         $config['upload_path'] =  base_url('/assets/img/content/');


        //         $this->load->library('upload', $config);

        //         if ($this->upload->do_upload('image')) {
        //             $new_image = $this->upload->data('file_name');
        //             $this->db->set('images', $new_image);
                   
        //         } else {
        //             echo $this->upload->dispay_errors();
        //         }
        //     };
        // }

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
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["title"] = "Tambah Artikel";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/add", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);

        $config['upload_path'] = './assets/img/content/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']       = 204800;

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/content/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['new_image'] = './assets/img/content/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $id_article = 'article_' . date('Ym') . mt_rand(11111, 99999);
                $username = $this->input->post('username');
                $title = $this->input->post('title');
                $date = time();
                $content = $this->input->post('content');
                $comments = 1;
                $category = $this->input->post('category');

                $this->m_berita->save($id_article, $username, $title, $gambar, $date, $content, $category, $comments);
                redirect('article');
            } else {
                redirect('article/add');
            }
        } else {
            redirect('article/add');
        }
    }


    // public function add()
    // {

    //     $this->load->library('form_validation');

    //     $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
    //     // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
    //     $this->form_validation->set_rules('category', 'Category', 'required');
    //     if ($this->input->post('gambar')) {
    //         $config['upload_path']          = './assets/img/content/';
    //         $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    //         $config['max_size']             = 204800;
    //         $config['max_width']            = 1024;
    //         $config['max_height']           = 768;

    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);

    //         if (!$this->upload->do_upload('gambar')) {
    //             $error = array('error' => $this->upload->display_errors());
    //         } else {
    //             $data = array('upload_data' => $this->upload->data());
    //         }
    //     }

    //     $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
    //     $this->form_validation->set_message('required', '%s Harus diisi');

    //     $article = $this->article_model;
    //     $validation = $this->form_validation;
    //     // $validation->set_rules($crud->rules());
    //     // $validation->set_message($crud->errorMessage());

    //     if ($validation->run() == FALSE) {
    //         $this->session->set_flashdata('error', 'Artikel Gagal Ditambahkan');
    //     } else {
    //         $article->save();
    //         $this->session->set_flashdata('success', 'Ditambahkan');
    //         redirect('article');
    //     }
    //     if (!$this->session->userdata('username')) {
    //         redirect('auth');
    //     }
    //     $data['user'] = $this->db->get_where('user', ['username' =>
    //     $this->session->userdata('username')])->row_array();
    //     $data["title"] = "Tambah Artikel";
    //     $this->load->view("layout/header", $data);
    //     $this->load->view("layout/navbar", $data);
    //     $this->load->view("layout/subtitle", $data);
    //     $this->load->view("article/add", $data);
    //     $this->load->view("layout/sidecontent", $data);
    //     $this->load->view("layout/footer", $data);
    // }

    public function edit()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["title"] = "Edit Artikel";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/edit", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function uploadImage()
    {
        if (isset($_POST['btn'])) {
            //Include file koneksi, untuk koneksikan ke database
            include 'article.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg', 'pdf', '3gp');
                $gambar = $_FILES['gambar']['name'];
                $x = explode('.', $gambar);
                $ekstensi = strtolower(end($x));
                $file_tmp = $_FILES['gambar']['tmp_name'];

                if (!empty($gambar)) {
                    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

                        //Mengupload gambar
                        move_uploaded_file($file_tmp, './assets/img/content/' . $gambar);

                        $sql = "insert into kliping_gambar (gambar) values ('$gambar')";

                        $simpan_bank = mysqli_query($kon, $sql);

                        // if ($simpan_bank) {
                        //     header("Location:index.php?add=berhasil");
                        // } else {
                        //     header("Location:index.php?add=gagal");
                        // }
                    }
                } else {
                    $gambar = "no-image.jpg";
                }
            }
        }
    }

    public function mainContent($id_article)
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
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
