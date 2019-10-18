<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {
	
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
		$data['posts'] = $this->post_model->get_all_posts_with_tag();
		$data['first_post'] = $this->post_model->getLatestPost();
		// $data['posts'] = $this->post_model->get_posts();
		$data['posts_ontop'] = $this->post_model->get_posts_ontop();
		$data['posts_hot'] = $this->post_model->get_posts_hot();
		$data['categories'] = $this->category_model->get_categories();
		$this->render('public/home/index',$data);
	}
}
