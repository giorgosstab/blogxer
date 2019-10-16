<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Public_Controller {
	
	public function __construct() {
		parent::__construct();        
		$this->load->model('category_model');      
		$this->load->model('post_model');      
	}
	/**
     * Display a listing of the resource.
     *
     * @return $data['posts']
     */

	public function index() {
		$data['posts'] = $this->post_model->get_posts();
		$data['categories'] = $this->category_model->get_categories();
		$this->render('public/blog/index',$data);
	}


	/**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return $data['post']
     */

    public function show($slug = NULL) {
		$data['post'] = $this->post_model->get_posts($slug);

		if(empty($data['post'])) {
			show_404();
		}
		
		$this->render('public/blog/show',$data);
	}
}
