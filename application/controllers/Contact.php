<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('social_media_model');
	}
	/**
     * Display a listing of the resource.
     *
     * @return $page
     */

	public function index() {
		$data['social_media'] = $this->social_media_model->get_six();
		$this->render('public/contact/index',$data);
	}
}
