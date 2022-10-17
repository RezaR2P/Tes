<?php

class Photo_model extends CI_Model
{
    private $_table = "photo";

    public $id_photo;
    public $username;
    public $title;
    public $date_created;
    public $photo;

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date_created', "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_photo)
    {
        return $this->db->get_where($this->_table, ["id_photo" => $id_photo])->row();
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
