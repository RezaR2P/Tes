<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->get_datasess = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
    }

    public function profile($username)
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["contentuser"] = $this->user_model->getByUser($username);
        $data["title"] = "Profil Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/index", $data);
        $this->load->view("layout/footer", $data);
    }
    public function editProfile()
    {

        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->library('form_validation');

        // $this->form_validation->set_rules('nipeg', 'Nipeg', 'xss_clean|max_length[10]|integer', ['integer' => "%s Hanya boleh diisi Angka"]);

        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|trim');
        if ($this->input->post('image')) {
            // $image = $this->input->post('image');


            $upload_image = $_FILES['image']['image'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 20480;
                $config['upload_path'] = './assets/img/profile';


                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }
            };
        }

        $this->form_validation->set_message('required', "%s Harus diisi!");


        $crud = $this->user_model;
        $validation = $this->form_validation;

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data Gagal Diubah');
        } else {


            $crud->update();
            $this->session->set_flashdata('success', 'Diubah');
            redirect('article');
        }


        $data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["title"] = "Profil Saya";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/sidebar", $data);
        $this->load->view("user/edit", $data);
        $this->load->view("layout/footer", $data);
    }
}
