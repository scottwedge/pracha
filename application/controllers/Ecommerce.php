<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller {

	public function __construct() 
		{

		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		//$this->load->library('pdf');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('ecommerce');
		$this->load->view('footer');
	}
	public function price(){
		redirect('ecommerce#commerce_price');
		
	}
	
	
	
	
}
