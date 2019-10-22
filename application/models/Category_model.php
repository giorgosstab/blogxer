<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{

    // protected $table = 'categories';

    public function __construct() {
        // $this->has_one['post'] = array('foreign_model'=>'Post_model','foreign_table'=>'posts','foreign_key'=>'id','local_key'=>'user_id');
        parent::__construct();
        $this->load->database();
    }

    public function get_categories() {
        $this->db->order_by('title','asc');
        $query = $this->db->get_where('categories',array('parent_id' => NULL));
        return $query->result_array();
    }

    public function insert_dummy()
    {
        $insert_data = array(
            array(
                'parent_id' => NULL,
                'title' => 'Web Development',
                'slug' => 'web-development'
            ),
            array(
                'parent_id' => NULL,
                'title' => 'Front End Development',
                'slug' => 'frontend-development'
            )
        );
        $this->db->insert_batch($this->table, $insert_data);
    }
}