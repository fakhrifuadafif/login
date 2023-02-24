<?php
class News_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_news()
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }
}


