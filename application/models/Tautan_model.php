<?php

class Tautan_model extends CI_Model
{
    private $_table = "tautan";

    public $id_tautan;
    public $username;
    public $title;
    public $tautan;
    public $category;
    public $date_created;

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date_created', "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_tautan)
    {
        $this->db->select('*');
        $this->db->from('db_article');
        $this->db->order_by('date', "desc");
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db->get_where($this->_table, ["username" => $username])->result_array();
    }

    public function save()
    {
        $post = $this->input->post();
            $this->id_tautan = 'tautan_' . date('Ym') . mt_rand(11111, 99999);
            $this->username = $post['username'];
            $this->title = $post["title"];
            $this->tautan = $post["tautan"];
            $this->category = $post['category'];
            $this->date_created = time();
            
            return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_tautan = $post['id_tautan'];
        $this->username = $post['username'];
        $this->title = $post["title"];
        $this->tautan = $post["tautan"];
        $this->category = $post['category'];
        $this->date_created = time();

        return $this->db->update($this->_table, $this, array('id_tautan' => $post['id_tautan']));
    }

    public function delete($id_tautan)
    {
        return $this->db->delete($this->_table, array("id_tautan" => $id_tautan));
    }

}