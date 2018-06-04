<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('Pracha_model');
		$this->load->library('user_agent');
	}
	public function index()
	{
		$data['currentURL'] = current_url();
		if($data['currentURL']== base_url('services') || $data['currentURL']== base_url('services.xml')){
			redirect('web-designing-services-in-hyderabad');
		}
		$this->load->view('header',$data);
		$this->load->view('services');
		$this->load->view('footer');
	}
	/*public function combo()
	{
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('comboprice');
		$this->load->view('footer');
	}
	*/
}
