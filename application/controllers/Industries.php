<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industries extends CI_Controller {

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
		$data['meta_title'] = 'Industries | Pracha Technologies Pvt Ltd';
		$data['meta_description'] = 'We at Prachatech Software Solutions, are delighted to offer the full spectrum of web designing services to serve industries.';
		$data['meta_keywords'] = 'web designing company in hyderabad, mobile app development, digital matketing company in hyderabad';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('industries');
		$this->load->view('footer');
	}
	
}
