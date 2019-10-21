<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends MY_Model
{

    // protected $table = 'posts';

    public function __construct() {
        $this->has_many['tags'] = array('Tag_model','id','id');
        $this->has_one['category'] = array('Category_model','id','category_id');
        parent::__construct();
        $this->load->database();
        $this->load->model('post_model');  
        $this->load->model('category_model');
        $this->pagination_delimiters = array('<li class="">','</li>');
        $this->pagination_arrows = array('&lt;','&gt;');
    }

    public function get_six_posts_with_tag($slug = FALSE) {
        $this->post_model->inRandomOrder();
        $this->post_model->take(6);
        $posts = $this->post_model->as_array()->with('tags')->get_all();
        return $posts;
    }

    public function get_all_posts_with_tag($slug = FALSE) {
        if($slug === FALSE) {
            $posts = $this->post_model->as_array()->with('tags')->get_all();
            return $posts;
        }
        $posts = $this->post_model->as_array()->with('tags')->get(array('slug' => $slug));
        return $posts;
    }

    public function get_all_posts_with_paginate() {
        $total_posts = $this->post_model->count_rows(); // retrieve the total number of posts
        $posts = $this->post_model->as_array()->with('tags')->paginate(4,$total_posts);
        return $posts;
    }

    public function get_posts_ontop() {
        $this->post_model->inRandomOrder();
        $this->post_model->take(4);
        $posts = $this->post_model->as_array()->with('tags')->get_all(array('on_top' => 1));
        return $posts;
    }

    public function getLatestPost() {
        $this->post_model->order_by('created_at','DESC')->limit(1);
        $posts = $this->post_model->with('tags')->get_all();
        return $posts;
    }

    public function get_posts_hot() {
        $this->post_model->inRandomOrder();
        $this->post_model->take(3);
        $posts = $this->post_model->as_array()->with('tags')->get_all(array('hot' => 1));
        return $posts;
    }

    public function getPostWithCategoryAndTag() {
        $posts = $this->post_model->with_tags()->with_category('where:`slug`=\'web-development\'')->get_all();
        return $posts;
    }
}