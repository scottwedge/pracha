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
		
		if(!$this->session->userdata('userdetails'))
		{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		}else{
			redirect('employee/profile');	
		}
	}
	public function loginpost(){
		$post=$this->input->post();
		$logindetails = $this->Employee_model->login_details($post['emp_email'],md5($post['emp_password']));
		if(count($logindetails)>0){
			$this->session->set_userdata('userdetails',$logindetails);
			$login_data=array(
			'emp_id'=>$logindetails['emp_id'],
			'emp_office_id'=>$logindetails['emp_office_id'],
			'login_time'=>date('Y-m-d H:i:s'),
			'create_at'=>date('Y-m-d H:i:s'),
			);
			$logindatasave = $this->Employee_model->save_login_time_status($login_data);
			if(count($logindatasave)>0){
				redirect('employee/profile');	
			}else{
				$this->session->set_flashdata('loginerror',"Technical problem will occured. Please try again.");
				redirect('employee');
			}
					
		}else{
			$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
			redirect('employee');
		}
		
	}
	public function profile(){
		
		if($this->session->userdata('userdetails'))
		{
			$data['userdetails']=$this->session->userdata('userdetails');
			$this->load->view('header1');
			$this->load->view('profile',$data);
			$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function logout(){
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$this->session->unset_userdata($userdetails);
			$this->session->unset_userdata('userdetails');
			$this->session->sess_destroy('userdetails');
			$this->session->unset_userdata('userdetails');
			redirect('employee');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 
	}
	
	
	
	
	
}
