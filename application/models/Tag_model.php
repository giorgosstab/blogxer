<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tag_model extends MY_Model
{

    // protected $table = 'tags';

    public function __construct() {
        parent::__construct();
        $this->load->database();
	}
	
	public function insert_dummy()
    {
        $insert_data = array(
            array(
                'title' => '#Fitness',
                'slug' => 'fitness'
            ),
            array(
                'title' => '#Operation',
                'slug' => 'operation'
            ),
            array(
                'title' => '#Lab',
                'slug' => 'lab'
            ),
            array(
                'title' => '#Health',
                'slug' => 'health'
            ),
            array(
                'title' => '#BabyCare',
                'slug' => 'baby-care'
            ),
            array(
                'title' => '#Clinic',
                'slug' => 'clinic'
            )
        );
        $this->db->insert_batch($this->table, $insert_data);
    }
}