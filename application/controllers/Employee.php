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
		$this->load->view('header1');
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
			$checklogin= $this->Employee_model->check_today_login($logindetails['emp_id'],date('Y-m-d'));
			$this->session->set_userdata('userdetails',$logindetails);
			$login_data=array(
			'emp_id'=>$logindetails['emp_id'],
			'emp_office_id'=>$logindetails['emp_office_id'],
			'login_time'=>date('Y-m-d H:i:s'),
			'create_at'=>date('Y-m-d'),
			);
			if(count($checklogin)==0){
				$logindatasave = $this->Employee_model->save_login_time_status($login_data);
				if(count($logindatasave)>0){
					redirect('employee/profile');	
				}else{
					$this->session->set_flashdata('loginerror',"Technical problem will occured. Please try again.");
					redirect('employee');
				}
			}else{
				redirect('employee/profile');
			}
					
		}else{
			$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
			redirect('employee');
		}
		
	}
	public function profile(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$this->load->view('header1');
			$this->load->view('sidebar');
			$this->load->view('profile',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function report(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$this->load->view('header1');
			$this->load->view('sidebar');
			$this->load->view('dailyreport',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function edit(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$this->load->view('header1');
			$this->load->view('sidebar');
			$this->load->view('profileedit',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function changepassword(){
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$this->load->view('header1');
			$this->load->view('changepassword',$data);
			$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function changepasswordpost(){
		if($this->session->userdata('userdetails'))
		{
			$post=$this->input->post();
			$currentpostpassword=md5($post['old_email']);
			$newpassword=md5($post['new_password']);
			$conpassword=md5($post['confirm_password']);
			$userdetails = $this->Employee_model->getcustomer_oldpassword($post['emp_id']);
			$currentpasswords=$userdetails['emp_password'];
				if($currentpostpassword == $currentpasswords ){
					if($newpassword == $conpassword){
						$passwordchange = $this->Employee_model->set_password($post['emp_id'],$conpassword,$post['confirm_password']);
							if (count($passwordchange)>0)
							{
								$this->session->set_flashdata('updatpassword',"Password successfully changed!");
								redirect('employee/changepassword');
							}else
								{
								$this->session->set_flashdata('passworderror',"Something went wrong in change password process!");
								redirect('employee/changepassword');
							}
					}else{
						$this->session->set_flashdata('passworderror',"New password and confirm password was not matching");
						redirect('employee/changepassword');
					}
				}else{
					$this->session->set_flashdata('passworderror',"Your Old password is incorrect. Please try again.");
					redirect('employee/changepassword');
				}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function forgotpassword()
	{
		
		if(!$this->session->userdata('userdetails'))
		{
				$post=$this->input->post();
				$check_email = $this->Employee_model->check_employee_email($post['emp_email']);
				if(count($check_email)>0){
					//echo '<pre>';print_r($check_email);exit;
						$this->load->library('email');
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from('prachatech.com');
						$this->email->to($check_email['emp_email']);
						$this->email->subject('Login - Password');
						$html = $check_email['emp_name'].'Your login password id <strong>'.$check_email['emp_org_password'].'</strong>'; 
						//echo $html;exit;
						$this->email->message($html);
						if($this->email->send()){
							$this->session->set_flashdata('success',"Check your registered email");
							redirect('employee');
						}else{
							$this->session->set_flashdata('loginerror',"In Our local  emails  are  not  sent");
							redirect('employee');
						}
						
				}else{
					$this->session->set_flashdata('loginerror',"Invalid Email Address. please try again");
					redirect('employee');
				}
		}else{
			redirect('employee/profile');	
		}
	}
	public function logout(){
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$checklogin= $this->Employee_model->check_today_login($userdetails['emp_id'],date('Y-m-d'));
			$this->Employee_model->update_logout_time_status($checklogin['id'],$checklogin['emp_id'],date('Y-m-d H:i:s'));
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
