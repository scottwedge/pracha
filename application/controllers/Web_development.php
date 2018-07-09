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
		$data['meta_title'] = 'Pracha';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
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
