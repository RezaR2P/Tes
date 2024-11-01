<?php

class Auth_model extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $name;
    public $username;
    public $email;
    public $password;
    public $avatar;
    public $role;

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = 'user_' . date('Ym') . mt_rand(11111, 99999);
        $this->name = $post['name'];
        $this->username = $post['username'];
        $this->email = $post["email"];
        $this->password = $post["password1"];
        $this->avatar = 'default.jpg';
        $this->role = 3;
        
        return $this->db->insert($this->_table, $this);
    }

}