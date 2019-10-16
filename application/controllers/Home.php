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
		$data['posts'] = $this->post_model->get_posts();
		$this->render('public/home/index',$data);
	}
}
