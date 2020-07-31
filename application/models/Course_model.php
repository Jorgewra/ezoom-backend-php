<?php

class Course_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_course()
    {   
        $list = $this->db->findAll();
        return $list;
        
    }
    public function set_course()
    {
        $this->load->helper('url');
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'picture' => $this->input->post('picture')
        );

        return $this->db->insert('news', $data);
    }
}