<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {
	
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
		//header variables
		$this->data['page_title'] .= ' | Home';

		$this->SEO();

		//model content data
		$data['posts'] = $this->post_model->get_six_posts_with_tag();
		$data['first_post'] = $this->post_model->getLatestPost();
		$data['latest'] = $this->post_model->getLatestPost();
		$data['posts_ontop'] = $this->post_model->get_posts_ontop();
		$data['posts_hot'] = $this->post_model->get_posts_hot();
		$data['categories'] = $this->category_model->get_categories();
		$data['posts_category'] = $this->post_model->getPostWithCategoryAndTag();
		$data['social_media'] = $this->social_media_model->getAll();

		$this->render('public/home/index',$data);
	}

	public function SEO() {
		$this->data['google_name'] = 'Blogxer';
		$this->data['google_description'] = 'This is a description about blogging site made with codeigniter 3!';
		$this->data['google_image'] = path().'img/logo-dark.png';

		$this->data['twitter_card'] = 'summary';
		$this->data['twitter_site'] = '@publisher_handle';
		$this->data['twitter_title'] = $this->data['page_title'].' | Home';
		$this->data['twitter_description'] = 'Page description less than 200 characters';
		$this->data['twitter_creator'] = '@author_handle';
		$this->data['twitter_image'] = path().'img/logo-dark.png';
		
		$this->data['og_title'] = $this->data['page_title'].' | Home';
		$this->data['og_type'] = 'article';
		$this->data['og_url'] = site_url('/');
		$this->data['og_image'] = path().'img/logo-dark.png';
		$this->data['og_description'] = 'Description Here';
		$this->data['og_site_name'] = $this->data['page_title'];
		$this->data['fb_admins'] = 'Facebook numberic ID';
	}
}
