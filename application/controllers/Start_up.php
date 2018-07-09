<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start_up extends CI_Controller {

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
		$data['meta_title'] = 'Pracha Technologies Pvt Ltd for Startups';
		$data['meta_description'] = 'Pracha Technologies Pvt. Ltd. offers digital marketing and web designing services in Hyderabad for startups and mid-level companies. ';
		$data['meta_keywords'] = 'web designing for startups, web designing for individuals, digital marketing for startups, digital marketing for individuals';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('start_up');
		$this->load->view('footer');
	}
	public function readmore()
	{
		$data['meta_title'] = 'Pracha';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('start_up');
		$this->load->view('footer');
	}
	
	
}
