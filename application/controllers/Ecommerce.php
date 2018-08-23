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
		$data['meta_title'] = 'The Best E-Commerce Web Development In Hyderabad | Pracha Technologies Pvt Ltd';
		$data['meta_description'] = 'Electronic Commerce is the buying and selling of products and goods, or transmitting of data or funds majorly on the internet. There are six types of eCommerce they are: Business to Customer (B2C), Business to Business (B2B),...';
		$data['meta_keywords'] = 'ecommerce website development in hyderabad, ecommerce web development in hyderabad, ecommerce web designing in hyderabad.';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('ecommerce');
		$this->load->view('footer');
	}
	public function price(){
		redirect('ecommerce#commerce_price');
		
	}
	
	
	
	
}
