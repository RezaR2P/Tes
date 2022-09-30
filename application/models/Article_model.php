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



    public function save($data)
    {
       
        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_article = 'article_' . date('Ym') . mt_rand(11111, 99999);
        $this->username = "Ujang";
        $this->title = $post["title"];
        $this->date = $post["date"];
        $this->content = $post["content"];
        $this->category = $post["category"];
        // $this->comments = ;
        return $this->db->update($this->_table, $this, array('no' => $post['no']));
    }

    public function hapus($no)
    {
        return $this->db->delete($this->_table, array("no" => $no));
    }
}
