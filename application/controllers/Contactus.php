<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

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
		$data['meta_title'] = 'Pracha Technologies Pvt Ltd';
		$data['meta_description'] = 'If you are searching for a web designing company in Hyderabad, you can contact us at admin@prachatech.com';
		$data['meta_keywords'] = 'web designing company in hyderabad, mobile apps development, digital marketing';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('contactus');
		$this->load->view('footer');
	}
	
}
