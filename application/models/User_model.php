<?php

class User_model extends CI_Model
{
    private $_user = "user";
    public $id_user;
    public $name;
    public $username;
    public $email;
    public $avatar;

    public function getByUser($username)
    {
        return $this->db->get_where($this->_user, ["username" => $username])->row();
    }

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date', "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function tampilData()
    {
        $this->db->from($this->_user);
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function update($data, $id_user)
    {
        $this->db->where('id_user', $id_user);
        $query = $this->db->update($this->_user, $data);
        return $query;
    }
}
