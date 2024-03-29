<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller
{
  protected $data = array();
  protected $langs = array();

  function __construct() {
    parent::__construct();
    $this->load->model('social_media_model');

    $this->data['page_title'] = 'Blogxer';
    $this->data['page_description'] = 'This is a description about blogging site made with codeigniter 3!';
    
    $this->data['google_name'] = '';
    $this->data['google_description'] = '';
    $this->data['google_image'] = '';

    $this->data['twitter_card'] = 'summary';
    $this->data['twitter_site'] = '';
    $this->data['twitter_title'] = '';
    $this->data['twitter_description'] = '';
    $this->data['twitter_creator'] = '';
    $this->data['twitter_image'] = '';
    
    $this->data['og_title'] = '';
    $this->data['og_type'] = 'article';
    $this->data['og_url'] = '';
    $this->data['og_image'] = '';
    $this->data['og_description'] = '';
    $this->data['og_site_name'] = '';
    $this->data['fb_admins'] = '';

    $this->data['before_head'] = '';
    $this->data['before_body'] = '';

    $this->data['social_media'] = $this->social_media_model->geHeader();
  }

  protected function render($the_view = NULL, $data, $template = 'master') {
    if($template == 'json' || $this->input->is_ajax_request()) {
      header('Content-Type: application/json');
      echo json_encode($this->data);
    } elseif(is_null($template)) {
      $this->data['data'] = $data;
      $this->load->view($the_view,$this->data);
    } else {
      $this->data['data'] = $data;
      $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
      $this->load->view('templates/' . $template . '_view', $this->data);
    }
  }

}
 
class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    protected function render($the_view = NULL, $data, $template = 'admin_master') {
        parent::render($the_view, $data, $template);
    }
}
 
class Public_Controller extends MY_Controller {
    protected $data = array();
    function __construct() {
        parent::__construct();
    }

    protected function render($the_view = NULL, $data, $template = 'public_master') {
        parent::render($the_view, $data, $template);
    }
}