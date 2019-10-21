<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Public_Controller {
	
	public function __construct() {
		parent::__construct();                
	}
	/**
     * Display a listing of the resource.
     *
     * @return $page
     */

	public function index() {
		$data['title'] = 'test';
		$this->render('public/about/index',$data);
	}
}
