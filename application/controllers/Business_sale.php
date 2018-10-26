<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_sale extends CI_Controller {

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
		$data['meta_title'] = 'Jobs In Hyderabad | Pracha Technologies Career Opportunities';
		$data['meta_description'] = 'Learn more about jobs in Hyderabad and career opportunities at Pracha Technologies. Search our current openings today to find the best fit for you and your career goals.';
		$data['meta_keywords'] = 'jobs in hyderabad, software jobs in hyderabad, marketing jobs in hyderabad, career opportunity, job openings, jobs, careers, carriers, carrier.';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('business_sale');
		$this->load->view('footer');
	}
	
}
