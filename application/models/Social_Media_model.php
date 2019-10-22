<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Social_Media_model extends MY_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
	}
	
	public function insert_dummy()
    {
        $insert_data = array(
            array(
                'title' => 'fab fa-facebook-f',
                'url' => 'https://www.facebook.com/'
            ),
            array(
                'title' => 'fab fa-twitter',
                'url' => 'https://twitter.com/'
            ),
            array(
                'title' => 'fab fa-instagram',
                'url' => 'https://www.instagram.com/'
            ),
            array(
                'title' => 'fab fa-youtube',
                'url' => 'https://www.youtube.com/'
            ),
            array(
                'title' => 'fab fa-linkedin-in',
                'url' => 'https://www.linkedin.com/'
            ),
            array(
                'title' => 'fab fa-google-plus-g',
                'url' => 'https://accounts.google.com/'
            ),
            array(
                'title' => 'fas fa-rss',
                'url' => site_url().'rss'
            ),
            array(
                'title' => 'fab fa-pinterest-p',
                'url' => 'https://www.pinterest.com/'
            ),
            array(
                'title' => 'fab fa-github-alt',
                'url' => 'https://github.com/giorgosstab/blogxer'
            ),
            array(
                'title' => 'fab fa-kickstarter-k',
                'url' => 'https://www.kickstarter.com/'
            ),
        );
        $this->db->insert_batch($this->table, $insert_data);
    }
}