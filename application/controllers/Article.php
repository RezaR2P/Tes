<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function index()
    {
        $this->load->view("layout/header");
        $this->load->view("layout/navbar");
        $this->load->view("article/index");
        $this->load->view("layout/footer");
    }

    public function edit()
    {
        $this->load->view("article/edit");
    }
}
