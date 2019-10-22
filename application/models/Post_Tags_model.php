<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Tags_model extends MY_Model
{

    // protected $table = 'post_tag';

    public function __construct() {
        parent::__construct();
        $this->load->database();
	}
	
	public function insert_dummy()
    {
        $insert_data = array(
            array(
                'post_id' => '1',
                'tag_id' => '6'
            ),
            array(
                'post_id' => '2',
                'tag_id' => '3'
            ),
            array(
                'post_id' => '4',
                'tag_id' => '3'
            ),
            array(
                'post_id' => '5',
                'tag_id' => '1'
            ),
            array(
                'post_id' => '6',
                'tag_id' => '2'
            ),
            array(
                'post_id' => '3',
                'tag_id' => '4'
            ),
            array(
                'post_id' => '1',
                'tag_id' => '2'
            )
        );
        $this->db->insert_batch($this->table, $insert_data);
    }
}