<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Public_Controller {
	
	public function __construct() {
		parent::__construct();        
		$this->load->model('category_model');      
		$this->load->model('post_model');   
		$this->load->model('social_media_model');   
	}
	/**
     * Display a listing of the resource.
     *
     * @return $data['posts']
     */

	public function index() {
		$data['posts'] = $this->post_model->get_all_posts_with_paginate();
		$data['categories'] = $this->category_model->get_categories();
		$data['social_media'] = $this->social_media_model->get_six();
		$this->render('public/blog/index',$data);
	}


	/**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return $data['post']
     */

    public function show($slug = NULL) {
		$data['post'] = $this->post_model->get_all_posts_with_tag($slug);
		$data['categories'] = $this->category_model->get_categories();
		$data['social_media'] = $this->social_media_model->get_six();
		$data['social_media_bottom'] = $this->social_media_model->get_five();

		if(empty($data['post'])) {
			show_404();
		}
		
		$this->render('public/blog/show',$data);
	}
}
