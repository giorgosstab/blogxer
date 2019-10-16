<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Public_Controller {
	
	/**
     * Display a listing of the resource.
     *
     * @return $data['posts']
     */

	public function index() {
		$data['posts'] = $this->post_model->get_posts();
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
