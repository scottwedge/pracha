<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('Employee_model');
		$this->load->library('user_agent');
	}
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function loginpost(){
		$post=$this->input->post();
		$logindetails = $this->Employee_model->login_details($post['emp_email'],md5($post['emp_password']));
		if(count($logindetails)>0){
			$this->session->set_userdata('userdetails',$logindetails);
			redirect('employee/profile');			
		}else{
			$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
			redirect('employee');
		}
		
	}
	public function profile(){
		
		$userdetails=$this->session->userdata('userdetails');
		$this->load->view('header1');
		$this->load->view('profile',$userdetails);

		$this->load->view('footer');			
		
		//echo '<pre>';print_r($userdetails);exit;
		
	}
	
	
	
	
	
}
