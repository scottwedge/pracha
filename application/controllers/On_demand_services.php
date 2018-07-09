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
		$data['meta_title'] = 'On Demand Services In Hyderabad | Pracha Technologies Pvt Ltd.';
		$data['meta_description'] = 'Pracha Technologies Pvt. Ltd. offers various web designing services in Hyderabad for startups and mid-level companies. The company deals with static & complex websites, ecommerce websites, corporate websites, mobile apps (iOS and Android), and promote them across the world digitally through its digital marketing strategies.';
		$data['meta_keywords'] = 'ecommerce websites in hyderabad, complex websites in hyderabad, corporate websites developers, mobile apps developers';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('on_demand_services');
		$this->load->view('footer');
	}

	
	
	
}
