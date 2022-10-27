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

    public function getData($limit = null, $offset = null ,$keyword = null)
    {
        if($keyword){
			$this->db->like('title', $keyword);
            $this->db->or_like('content', $keyword);
            $this->db->or_like('username', $keyword);
            $this->db->or_like('category', $keyword);
        }
        $this->db->order_by('date', 'desc');
        $query = $this->db->get($this->_table, $limit, $offset);
        return $query->result_array();
    }

    public function getById($id_article)
    {
        return $this->db->get_where($this->_table, ["id_article" => $id_article])->row();
    }

    public function getByUser($username)
    {
        $this->db->select('*');
        $this->db->from('db_article');
        $this->db->like('username', $username);
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db->get_where($this->_table, ["username" => $username])->result_array();
    }

    public function getTotalRows() 
    {
        return $this->db->get($this->_table)->num_rows();
    }

    public function getTotalRowsArtikel() 
    {   
        $this->db->like('category', 'artikel');
        return $this->db->get($this->_table)->num_rows();
    }

    public function getDataArtikel($limit = null, $offset = null) 
    {
        $this->db->like('category', 'artikel');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get($this->_table, $limit, $offset);
        return $query->result_array();
    
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
