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
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('category', 'Category', 'required');

        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');


        // $validation->set_rules($crud->rules());
        // $validation->set_message($crud->errorMessage());

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Artikel Gagal Ditambahkan');
        } else {
            // $article->save();
            // $this->session->set_flashdata('success', 'Ditambahkan');
            // redirect('article');
            $config['upload_path']          = './assets/img/content/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 20480000;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_userdata('upload_error', $this->upload->display_errors());
                redirect('article/add');
            } else {

                // Hapus session upload error_get_last
                $this->session->unset_userdata('upload_error');

                // Ambil data avatar yang di upload
                $upload = $this->upload->data();

                $data = array(
                    'id_article' => 'article_' . date('Ym') . mt_rand(11111, 99999),
                    'username' => $this->input->post('username'),
                    'title' => $this->input->post('title'),
                    'date' => time(),
                    'content' => $this->input->post('content'),
                    'coverImage' => $upload['file_name'],
                    'category' => $this->input->post('category'),
                    'comments' => 1
                );
                $this->article_model->save($data);
                redirect('article');
            }
        }
        // if ($this->input->post('gambar')) {


        //     $this->load->library('upload', $config);
        //     $this->upload->initialize($config);

        //     if (!$this->upload->do_upload('gambar')) {
        //         $error = array('error' => $this->upload->display_errors());
        //     } else {
        //         $data = array('upload_data' => $this->upload->data());
        //     }
        // }



        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
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

    // public function uploadImage()
    // {
    //     if (isset($_POST['btn'])) {
    //         //Include file koneksi, untuk koneksikan ke database
    //         include 'article.php';
    //         //Cek apakah ada kiriman form dari method post
    //         if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //             $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg', 'pdf', '3gp');
    //             $gambar = $_FILES['gambar']['name'];
    //             $x = explode('.', $gambar);
    //             $ekstensi = strtolower(end($x));
    //             $file_tmp = $_FILES['gambar']['tmp_name'];

    //             if (!empty($gambar)) {
    //                 if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

    //                     //Mengupload gambar
    //                     move_uploaded_file($file_tmp, './assets/img/content/' . $gambar);

    //                     $sql = "insert into kliping_gambar (gambar) values ('$gambar')";

    //                     $simpan_bank = mysqli_query($kon, $sql);

    //                     // if ($simpan_bank) {
    //                     //     header("Location:index.php?add=berhasil");
    //                     // } else {
    //                     //     header("Location:index.php?add=gagal");
    //                     // }
    //                 }
    //             } else {
    //                 $gambar = "no-image.jpg";
    //             }
    //         }
    //     }
    // }

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
