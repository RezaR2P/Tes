<?php

class pengumuman_model extends CI_Model
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
        $this->db->like('category', 'pengumuman');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get($this->_table, $limit, $offset);
        return $query->result_array();
    }

    public function getOneData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date', "desc");
        $this->db->like('category', 'pengumuman');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }


    public function getTotalRows() 
    {   
        $this->db->like('category', 'pengumuman');
        return $this->db->get($this->_table)->num_rows();
    }

}