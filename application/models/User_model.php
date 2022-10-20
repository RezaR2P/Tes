<?php

class User_model extends CI_Model
{
    private $_user = "user";
    public $id_user;
    public $name;
    public $username;
    public $email;
    public $avatar;

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date', "desc");
        $query = $this->db->get();
        return $query->result();
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


    public function tampilData()
    {
        $this->db->from($this->_user);
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function update()
    {

        $post = $this->input->post();
        $this->name = $post["name"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->avatar = ($post["avatar"])  ? $post["avatar"] : "default.jpg";
        return $this->db->update($this->_user, $this, array('name' => $post['name']));

    }
}
