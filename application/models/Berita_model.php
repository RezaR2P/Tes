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

    public function getData($limit = null, $offset = null)
    {
        $this->db->like('category', 'berita');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get($this->_table, $limit, $offset);
        return $query->result_array();
    }

    public function getTotalRows() 
    {   
        $this->db->like('category', 'berita');
        return $this->db->get($this->_table)->num_rows();
    }


}