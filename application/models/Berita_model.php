<?php

class Berita_model extends CI_Model
{
    private $_table = "db_article";

    public $id_article;
    public $username;
    public $title;
    public $date;
    public $content;
    public $coverImage;
    public $category;
    public $comments;

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date', "desc");
        $this->db->like('category', 'berita');
        $query = $this->db->get();
        return $query->result();
    }

}