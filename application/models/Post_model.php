<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model
{

    protected $table = 'posts';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_posts($slug = FALSE) {
        if($slug === FALSE) {
            $query = $this->db->get('posts');
            return $query->result_array();
        }
        $query = $this->db->get_where('posts',array('slug' => $slug));
        return $query->row_array();
    }

    // public function get_count_post_of_category() {
        
    // }
}