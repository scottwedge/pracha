<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_development extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['meta_title'] = 'Best Web Development Company In Hyderabad|Prachatech Pvt. Ltd.';
		$data['meta_description'] = 'Pracha Technologies Pvt. Ltd. is a web development company in Hyderabad, India. The company also develops mobile apps and offer digital marketing services at affordable prices.';
		$data['meta_keywords'] = 'web development, web development company in hyderabad, web designing agency in hyderabad, web design company in hyderabad, Web design and development company in hyderabad, mobile apps, mobile apps development, mobile applications, mobile applications development, digital marketing, digital marketing services, digital marketing company, ui and ux, ui and ux design, ui and ux development, android mobile apps, ios mobile apps, ecommerce, ecommerce website developers, web design & development company in hyderabad, web designing company, web design and development, web designing and development, web development company in India.';
		$data['currentURL'] = current_url();
		if($data['currentURL']== base_url('web_development') || $data['currentURL']== base_url('web_development.xml')){
			redirect('web-development-company-in-hyderabad');
		}
		$this->load->view('header',$data);
		$this->load->view('develop_service');
		$this->load->view('footer');
	}
	public function price(){
		redirect('develop_service#designing_price');
		
	}
	public function commerce_price(){
		redirect('develop_service#commerce_price');
		
	}
	
}
