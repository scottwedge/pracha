<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_applications extends CI_Controller {

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
		$data['meta_title'] = 'The Best Mobile App Development Company In Hyderabad | Prachatech';
		$data['meta_description'] = 'Pracha Technologies Pvt. Ltd. is a Web Designing & Mobile App development company in Hyderabad. The company is specialized in developing eCommerce websites, Static & Dynamic Websites , Mobile Apps for (iOS & Android softwares), and offer Digital Marketing services at affordable prices.';
		$data['meta_keywords'] = 'mobile apps, mobile applications, phone apps, phone app services, mobile app development services, mobile app development services in hyderabad, mobile app development company in hyderabad, mobile app developers in hyderabad, mobile application developers in hyderabad, mobile apps designer in hyderabad, mobile applications designer in hyderabad, mobile application services in hyderabad, mobile app services in hyderabad.';
		$data['currentURL'] = current_url();
		if($data['currentURL']== base_url('mobile_applications') || $data['currentURL']== base_url('mobile_applications.xml')){
			redirect('mobile-app-development-company-in-hyderabad');
		}
		$this->load->view('header',$data);
		$this->load->view('mobile_application');
		$this->load->view('footer');
	}
	public function price(){
		redirect('mobile_application#mobile_application_price');
		
	}
	
}
