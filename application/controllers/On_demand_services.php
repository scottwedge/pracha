<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class On_demand_services extends CI_Controller {

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
		$data['meta_title'] = 'Pracha';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('on_demand_services');
		$this->load->view('footer');
	}

	
	
	
}
