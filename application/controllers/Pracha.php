<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pracha extends CI_Controller {

	public function __construct() 
  {

		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('Pracha_model');
		
 
 }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function howwework()
	{
		redirect('#proc-scroll');
	}
	public function contactus()
	{
		redirect('#contact-scroll');
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
			$this->email->to('pushkar.avi@gmail.com');
			$this->email->subject($post['subject']);
			$this->email->message($post['message']);
			$this->email->send();
			$this->session->set_flashdata('success','Your query successfully sent.Our team get in touch with you');

		}else{
			$this->session->set_flashdata('error','Technical problem will occured . try again after some time');

		}
		redirect('#contact-scroll');

			
		
	}
}
