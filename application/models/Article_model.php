<?php

class Article_model extends CI_Model
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
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_article)
    {
        return $this->db->get_where($this->_table, ["id_article" => $id_article])->row();
    }

    public function getDataArtikel() {
 
        $this->db->from($this->_table);
        $this->db->order_by('date', "desc");
        $this->db->like('category', 'artikel');
        $query = $this->db->get();
        return $query->result();
    
    }

    public function save($data)
    {
       
        return $this->db->insert($this->_table, $data);
    }

    public function updateArticle($data, $id_article)
    {
        $this->db->where('id_article', $id_article);
        $query = $this->db->update($this->_table, $data);
        return $query;
    }

    public function delete($id_article)
    {
        
        return $this->db->delete($this->_table, array("id_article" => $id_article));
    }
}
