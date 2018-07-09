<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui_and_ux_design extends CI_Controller {

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
		if($data['currentURL']== base_url('ui_and_ux_design') || $data['currentURL']== base_url('ui_and_ux_design.xml')){
			redirect('web-designing-agency-in-hyderabad');
		}
		
		//echo '<pre>';print_r($data);exit;
		$this->load->view('header',$data);
		$this->load->view('servicesrm');
		$this->load->view('footer');
	}
	public function designing_price(){
		redirect('#designing_price');
		
	}
	
}
