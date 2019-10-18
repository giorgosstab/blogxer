<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends MY_Model
{

    // protected $table = 'posts';

    public function __construct() {
        $this->has_many['tags'] = array('Tag_model','id','id');
        parent::__construct();
        $this->load->database();
        $this->load->model('post_model');  
    }

    public function get_all_posts_with_tag($slug = FALSE) {
        $this->post_model->inRandomOrder();
        $this->post_model->take(6);
        $posts = $this->post_model->as_array()->with('tags')->get_all();
        return $posts;
    }

    public function get_posts_ontop() {
        $this->post_model->inRandomOrder();
        $this->post_model->take(4);
        $posts = $this->post_model->as_array()->with('tags')->get_all(array('on_top' => 1));
        return $posts;
    }

    public function getLatestPost() {
        $posts = $this->post_model->as_array()->with('tags')->get_all(array('created_at' => 1));
        return $posts;
    }

    public function get_posts_hot() {
        $this->post_model->inRandomOrder();
        $this->post_model->take(3);
        $posts = $this->post_model->as_array()->with('tags')->get_all(array('hot' => 1));
        return $posts;
    }
}