<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{

    protected $table = 'categories';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_categories() {
        $this->db->order_by('title','asc');
        $query = $this->db->get_where('categories',array('parent_id' => NULL));
        return $query->result_array();
    }
}