<?php

class Photo_model extends CI_Model
{
    private $_table = "photo";

    public $id_photo;
    public $username;
    public $title;
    public $date_created;
    public $photo;

    public function getAllData()
    {
        
        $this->db->from($this->_table);
        $this->db->order_by('date_created', "desc");
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db->get_where($this->_table, ["username" => $username])->result_array();
    }

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date_created', "desc");
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_photo)
    {
        return $this->db->get_where($this->_table, ["id_photo" => $id_photo])->row();
    }

    public function getByUser($username)
    {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->like('username', $username);
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db->get_where($this->_table, ["username" => $username])->result_array();
    }

    public function save($data)
    {
       
        return $this->db->insert($this->_table, $data);
    }

    public function delete($id_photo)
    {
        return $this->db->delete($this->_table, array("id_photo" => $id_photo));
    }
}
