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
		$data['meta_title'] = 'Web Designing Services In Hyderabad | Prachatech Pvt. Ltd.';
		$data['meta_description'] = 'Prachatech Pvt. Ltd. offers various Web Designing Services in Hyderabad, the company also deals with Mobile Apps and Digital Marketing services for startups and mid-level companies.';
		$data['meta_keywords'] = 'web designing, best web designing services in hyderabad, web development, mobile apps, mobile apps development, mobile applications, mobile applications development, digital marketing, digital marketing services, digital marketing company, web designing company, best web designing agency, ui and ux, ui and ux design, ui and ux development, android mobile apps, ios mobile apps, ecommerce, ecommerce website developers, business solutions';
		$data['currentURL'] = current_url();
		if($data['currentURL']== base_url('services') || $data['currentURL']== base_url('services.xml')){
			redirect('web-designing-services-in-hyderabad');
		}
		$this->load->view('header',$data);
		$this->load->view('services');
		$this->load->view('footer');
	}
	public function combo()
	{
		$data['meta_title'] = 'Pracha';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('comboprice');
		$this->load->view('footer');
	}
	
}
