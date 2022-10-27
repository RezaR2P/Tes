<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Photo extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('photo_model');
        $this->load->model('video_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        
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

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');

        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');


        // $validation->set_rules($crud->rules());
        // $validation->set_message($crud->errorMessage());

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Foto Gagal Ditambahkan');
        } else {
            // $article->save();
            // $this->session->set_flashdata('success', 'Ditambahkan');
            // redirect('article');
            $config['upload_path']          = './assets/img/photo/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 20480000;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);


            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_userdata('upload_error', $this->upload->display_errors());
                redirect('photo/add');
            } else {

                // Hapus session upload error_get_last
                $this->session->unset_userdata('upload_error');

                // Ambil data avatar yang di upload
                $upload = $this->upload->data();

                $data = array(
                    'id_photo' => 'photo_' . date('Ym') . mt_rand(11111, 99999),
                    'username' => $this->input->post('username'),
                    'title' => $this->input->post('title'),
                    'photo' => $upload['file_name'],
                    'date_created' => time(),
				);
				$this->photo_model->save($data);
                $this->session->set_flashdata('photoSuccess', 'Dibuat!');
				redirect('article');
			}  
      
        }


        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Tambah Foto";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("photo/add", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit()
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');

        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');


        // $validation->set_rules($crud->rules());
        // $validation->set_message($crud->errorMessage());

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Foto Gagal Ditambahkan');
        } else {
            // $article->save();
            // $this->session->set_flashdata('success', 'Ditambahkan');
            // redirect('article');
            $config['upload_path']          = './assets/img/photo/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 20480000;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);


            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_userdata('upload_error', $this->upload->display_errors());
                redirect('photo/add');
            } else {

                // Hapus session upload error_get_last
                $this->session->unset_userdata('upload_error');

                // Ambil data avatar yang di upload
                $upload = $this->upload->data();

                $data = array(
                    'id_photo' => 'photo_' . date('Ym') . mt_rand(11111, 99999),
                    'username' => $this->input->post('username'),
                    'title' => $this->input->post('title'),
                    'photo' => $upload['file_name'],
                    'date_created' => time(),
				);
				$this->photo_model->save($data);
                $this->session->set_flashdata('photoSuccess', 'Dibuat!');
				redirect('article');
			}  
      
        }


        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Edit Foto";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("photo/add", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }

    public function delete($id_photo = null) {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $content = $this->photo_model->getById($id_photo);
        if( !$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        if (!isset($id_photo)) show_404();
        
        if($content->username != $this->session->userdata('username')) {
            redirect('article');
        } else {
            if ($this->photo_model->delete($id_photo)) {
                $this->session->set_flashdata('success', 'Dihapus');
                redirect(base_url('user/photo/') . $content->username);
            }
        }
    }
}