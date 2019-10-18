<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tag_model extends MY_Model
{

    // protected $table = 'tags';

    public function __construct() {
        $this->has_one['post'] = array('Post_model','post_id','id');
        parent::__construct();
        $this->load->database();
    }
}