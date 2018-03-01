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
	
}
