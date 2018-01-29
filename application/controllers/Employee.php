<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('Employee_model');
		$this->load->library('user_agent');
	}
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	
	
	
	
}
