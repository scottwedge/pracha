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
		$data['meta_title'] = 'The Best Web Designing Agency In Hyderabad | Prachatech Pvt. Ltd.';
		$data['meta_description'] = 'Prachatech Pvt. Ltd. is a Web Designing Agency in Hyderabad. The company deals with eCommerce websites, static & dynamic website design,  mobile apps (iOS and Android)  and offer digital marketing services at affordable prices.';
		$data['meta_keywords'] = 'web designing agency, web designing agency in hyderabad, best web designing agencies in hyderabad, web designing, ui and ux design in hyderabad, ui and ux design, web design company in hyderabad, Web design and development company in hyderabad, site architecture and design, static and Dynamic website design, responsive web design, custom web design, corporate website design, template design & customization, web design & development company in hyderabad, web designing company, web design and development, web designing and development';
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
