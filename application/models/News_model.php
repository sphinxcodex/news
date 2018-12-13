<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News_model
 *
 * @author sphinx
 */
class News_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('news');
            //we use result_array() to return collection of results from the database
            return $query->result_array();
        }
        $query = $this->db->get_where('news', array('slug' => $slug));
        //we use row_array() to return one row from the database query result
        return $query->row_array();
    }

    /**
     * @author sphinx <ojinakatochukwu@gmail.com>     
     * @abstract function for setting news item in the database
     * @return void
     */
    public function set_news() 
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        return $this->db->insert('news', $data);
    }

    public function count($db)
    {
        $result = $this->db->get($db);
        $size = $result->num_rows();
        return $size;
    }

    public function paginate($limit,$start)
    {
        $result = $this->db->limit($limit,$start)->get('news');
        return $result->result_array();
    }
}
