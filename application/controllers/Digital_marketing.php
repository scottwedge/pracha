<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Digital_marketing extends CI_Controller {

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
		
		$data['meta_title'] = 'Best Digital Marketing Company In Hyderabad | Prachatech Pvt.Ltd.';
		$data['meta_description'] = 'Pracha Technologies Pvt. Ltd. is a Web Designing & Digital Marketing Company in Hyderabad. The Company also develops Mobile apps (Android & iOS)  and promotes them digitally at affordable prices to support the Startups and Mid-level companies.';
		$data['meta_keywords'] = 'best digital marketing company in hyderabad, digital marketing company in hyderabad – seo – smo – sem - ppc hyderabad, top marketing companies in hyderabad, list of digital marketing companies in hyderabad, top digital marketing agencies in hyderabad, digital marketing company in hyderabad, digital marketing services in hyderabad, digital marketing agency in hyderabad, digital marketing in hyderabad, digital marketing company in india.';
		$data['currentURL'] = current_url();
		if($data['currentURL']== base_url('digital_marketing') || $data['currentURL']== base_url('digital_marketing.xml')){
			redirect('digital-marketing-company-in-hyderabad');
		}
		
		$this->load->view('header',$data);
		$this->load->view('digital_marketing');
		$this->load->view('footer');
	}
	public function readmore()
	{
		$data['meta_title'] = 'Pracha';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('digital_marketing_readmore');
		$this->load->view('footer');
	}
	public function price(){
		redirect('digitalmarketing#digitalmarketing_price');
		
	}
	
}
