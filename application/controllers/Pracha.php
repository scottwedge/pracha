<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pracha extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('Pracha_model');
		$this->load->library('user_agent');
	}
	public function index()
	{
		
		$data['currentURL'] = current_url();
		$data['meta_title'] = 'The Best Web Designing Company In Hyderabad | Prachatech Pvt Ltd';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
		//echo '<pre>';print_r($data);exit;
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function designing_price(){
		redirect('#designing_price');
		
	}
	
	
	public function contactpost(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$details=array(
		'name'=>$post['name'],
		'email'=>$post['email'],
		'subject'=>$post['subject'],
		'message'=>$post['message'],
		'create-at'=>date('y-m-d H:i:s')
		);
		$savedata= $this->Pracha_model->save_contactus($details);
		if(count($savedata)>0){
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$this->email->set_mailtype("html");
			$this->email->from($post['email']);
			$this->email->to('prachatechit@gmail.com');
			$this->email->subject($post['subject']);
			$this->email->message($post['message']);
			$this->email->send();
			$this->session->set_flashdata('success','Your Query is successfully sent. Our team will contact you soon.');

		}else{
			$this->session->set_flashdata('error','Technical problem will occured . try again after some time');

		}
		if(isset($post['direct']) && $post['direct']==1){
			redirect('services');
		}else{
		redirect('#contact-scroll');
		}

			
		
	}
}
