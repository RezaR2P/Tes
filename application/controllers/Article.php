<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('video_model');
        $this->load->model('photo_model');
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
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
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

    public function artikel() 
    {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data["db_article"] = $this->article_model->getDataArtikel();
        $data["video"] = $this->video_model->getData();
        $data["photo"] = $this->photo_model->getData();
        $data["title"] = "Artikel";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/artikel", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
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
        // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

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
                $this->session->set_flashdata('success', 'Dibuat!');
				redirect('article');
			}  
      
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
    }

    public function edit($id_article) {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }


        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array(); 
        $data["content"] = $this->article_model->getById($id_article);

        

        $data["title"] = "Edit Artikel";
        $this->load->view("layout/header", $data);
        $this->load->view("layout/navbar", $data);
        $this->load->view("layout/subtitle", $data);
        $this->load->view("article/edit", $data);
        $this->load->view("layout/sidecontent", $data);
        $this->load->view("layout/footer", $data);
    }


    public function prosesEdit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean|callback_alpha_dash_space');
        // $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        
        $validation = $this->form_validation;
        $this->form_validation->set_message('alpha_dash_space', '%s Hanya boleh diisi Huruf dan Angka');
        $this->form_validation->set_message('required', '%s Harus diisi');
       

        if ($validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Artikel Gagal Diubah');
        } else {
                

            $config['upload_path']          = './assets/img/content/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 20480000;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
			if(!$this->upload->do_upload('gambar')){ 
                // $id = $this->uri->segment(3);
                // $old_image = $this->article_model->getById($id);
                $data = array(
                    'coverImage' => $this->input->post('gambar'), 
                    'id_article' => $this->input->post('id_article'),
                    'username' => $this->input->post('username'),
                    'title' => $this->input->post('title'),
                    'date' => time(),
                    'content' => $this->input->post('content'),
                    // 'coverImage' => ($upload['file_name']) ? $upload['file_name'] : $this->input->post('coverImage'),
                    'category' => $this->input->post('category'),
                    'comments' => $this->input->post('comments')
                );
                $this->article_model->updateArticle($data, $this->input->post('id_article'));
                $this->session->set_flashdata('success', 'Diubah');
                redirect(base_url('user/profile/'). $this->input->post('username'));
            }else {
                $old_image = $this->input->post('gambar');
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/content/' . $old_image);
                }
                
                $new_image = $this->upload->data('file_name');
               
                $data = array(
                    'coverImage' => $new_image, 
                    'id_article' => $this->id_article,
                    'username' => $this->input->post('username'),
                    'title' => $this->input->post('title'),
                    'date' => time(),
                    'content' => $this->input->post('content'),
                    // 'coverImage' => ($upload['file_name']) ? $upload['file_name'] : $this->input->post('coverImage'),
                    'category' => $this->input->post('category'),
                    'comments' => $this->input->post('comments')
                );
                $this->article_model->updateArticle($data, $this->input->post('id_article'));
                $this->session->set_flashdata('success', 'Diubah');
                redirect(base_url('user/profile/'). $this->input->post('username'));
           
            }
                
        }
    }

   
    public function delete($id_article = null) {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $content = $this->article_model->getById($id_article);
        if( !$this->session->userdata('username')) {
            redirect('auth');
        }

        if (intval($this->session->userdata('role') == 3)) {
            redirect('article');
        }

        if (!isset($id_article)) show_404();
        
        if($content->username != $this->session->userdata('username')) {
            redirect('article');
        } else {
            if ($this->article_model->delete($id_article)) {
                $this->session->set_flashdata('success', 'Dihapus');
                redirect('article');
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
