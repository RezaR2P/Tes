<?php

class Article_model extends CI_Model
{
    private $_table = "db_article";

    public $id_article;
    public $username;
    public $title;
    public $date;
    public $content;
    public $images;
    public $category;
    public $comments;

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date', "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_article)
    {
        return $this->db->get_where($this->_table, ["id_article" => $id_article])->row();
    }

    public function upload(){
    $nama = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, './assets/img/content/'.$nama);
}



    public function save()
    {
        $post = $this->input->post();
        $this->id_article = 'article_' . date('Ym') . mt_rand(11111, 99999);
        $this->username = $post["username"];
        $this->title = $post["title"];
        $this->date =  time();
        if ($post["image"]) {
            $this->images = $this->upload();
        }
        // $this->images =  ($post["image"])  ? $post["image"] : "no-image.jpg";
        $this->content = $post["content"];
        $this->category = $post["category"];
        $this->comments = 1;
        return $this->db->insert($this->_table, $this);
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
