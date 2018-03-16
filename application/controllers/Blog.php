<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('Pracha_model');
		$this->load->library('user_agent');
	}
	public function index()
	{
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function how_to_create_manage_and_optimize_a_youtube_channel()
	{
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog_details');
		$this->load->view('footer');
	}
	public function what_is_onpage_and_offpage_optimization()
	{
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog2_details');
		$this->load->view('footer');
	}
	
}
