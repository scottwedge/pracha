<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

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
		$data['meta_title'] = 'Portfolio | Pracha Technologies Pvt Ltd';
		$data['meta_description'] = 'Pracha Technologies Pvt. Ltd. offers digital marketing and web designing services in Hyderabad for startups and mid-level companies. The company deals with static & complex websites, ecommerce websites, corporate websites, mobile apps (iOS and Android), and promote them across the world digitally through its digital marketing strategies.';
		$data['meta_keywords'] = 'web designing company in hyderabad';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('portfolio');
		$this->load->view('footer');
	}
	
}
