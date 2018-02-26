<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {

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
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('servicesrm');
		$this->load->view('footer');
	}
	public function design(){
		redirect('price#designing_price');
		
	}

	public function estimate()
	{
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('priceviewpage');
		$this->load->view('footer');
	}
	public function details()
	{
		
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$id=base64_decode($this->uri->segment(3));
		if($id==1){
			$this->load->view('webdesignprice');
		}else{
		$this->load->view('price');	
		}
		
		
		$this->load->view('footer');
	}
	
}
