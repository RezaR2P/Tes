<?php

class Comment_model extends CI_Model
{
    private $_table = "comments";

    public $id_comment;
    public $id_article;
    public $username;
    public $avatar;
    public $comment;
    public $date_created;

    
    public function getById($id_comment)
    {
        return $this->db->get_where($this->_table, ["id_comment" => $id_comment])->result_array();
    }

    public function getByArticle($id_article)
    {
        return $this->db->get_where($this->_table, ["id_article" => $id_article])->result_array();
    }

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date_created', "desc");
        $this->db->like('id_article', $this->id_article);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function countData($id_article)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('id_article', $id_article);
        return $this->db->count_all_results();
    }

    public function getByUser($username)
    {
        $this->db->select('*');
        $this->db->from('tautan');
        $this->db->like('username', $username);
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db->get_where($this->_table, ["username" => $username])->result_array();
    }

    public function save()
    {
        $post = $this->input->post();
            $this->id_comment = 'comment_' . date('Ym') . mt_rand(11111, 99999);
            $this->id_article = $post['id_article'];
            $this->username = $post['username'];
            $this->avatar = $post["avatar"];
            $this->comment = $post["comment"];
            $this->date_created = time();
            
            return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_comment = $post['id_comment'];
        $this->id_article = $post['id_article'];
        $this->username = $post['username'];
        $this->avatar = $post["avatar"];
        $this->comment = $post["comment"];
        $this->date_created = time();

        return $this->db->update($this->_table, $this, array('id_comment' => $post['id_comment']));
    }   

    public function delete($id_comment)
    {
        return $this->db->delete($this->_table, array("id_comment" => $id_comment));
    }

}