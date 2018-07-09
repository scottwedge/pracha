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
		$data['meta_title'] = 'Pracha';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
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
