<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carriers extends CI_Controller {

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
		$this->load->view('header',$data);
		$this->load->view('carriers');
		$this->load->view('footer');
	}
	
}
