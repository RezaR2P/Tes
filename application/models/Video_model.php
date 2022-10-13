<?php

class Video_model extends CI_Model
{
    private $_table = "video";

    public $id_video;
    public $title;
    public $url;
    public $date_created;

    public function getData()
    {
        $this->db->from($this->_table);
        $this->db->order_by('date_created', "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_video)
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
            $this->id_video = 'video' . date('Ym') . mt_rand(11111, 99999);
            $this->title = $post["title"];
            $this->url = $post["url"];
            $this->date_created = time();
            
            return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_video = 'video_' . date('Ym') . mt_rand(11111, 99999);
        $this->title = $post["title"];
        $this->url = $post["url"];
        $this->date_created = time();

        return $this->db->update($this->_table, $this, array('id_video' => $post['id_video']));
    }

    public function delete($id_video)
    {
        return $this->db->delete($this->_table, array("id_video" => $id_video));
    }

}