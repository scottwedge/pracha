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
			$this->load->view('sidebar',$data);
			$this->load->view('profile',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function leaves(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('leaves',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
	}
	public function reportlist(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			if($data['userdetails']['role']==1 || $data['userdetails']['role']==2){
				$details=$this->Employee_model->get_all_employees_dailyreport();
				//echo '<pre>';print_r($details);exit;
				$this->load->view('header1');
				$this->load->view('sidebar',$data);
				$this->load->view('reportlist',$data);
			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
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
			$logindetails= $this->Employee_model->get_employee_logindetails($userdetails['emp_id'],date('Y-m-d'));
			$task_list= $this->Employee_model->get_employee_task_list($userdetails['emp_id'],$logindetails['id']);
			//echo '<pre>';print_r($task_list);exit;
			$diff_in_hrs=$times='';
			foreach ($task_list as $list){
				$times=$this->Employee_model->get_employee_login_logout($list['emp_id'],$list['create_at']);
				
				if(isset($times['logout_time']) && $times['logout_time']=='0000-00-00 00:00:00'){
					$current_time=date('Y-m-d H:i:s');
					$datetime1 = new DateTime($times['login_time']);
					$datetime2 = new DateTime($current_time);
					$interval = $datetime1->diff($datetime2);
					$diff_in_hrs=$interval->format('%h')." Hr ".$interval->format('%i')." Min ".$interval->format('%s').'sec';
				}else{
					
					$datetime1 = new DateTime($times['login_time']);
					$datetime2 = new DateTime($times['logout_time']);
					$interval = $datetime1->diff($datetime2);
					$diff_in_hrs=$interval->format('%h')." hrs ".$interval->format('%i')." Min ".$interval->format('%s').'sec';
				
				
				}
				
				$details[$list['create_at']]['task']=$this->Employee_model->get_employee_daily_task_list($list['emp_id'],$list['id']);
				$t=$list['create_at'];
				
				$details[$list['create_at']]['currentday']=date('F').' - '.date("D d",strtotime($t)); 
				$details[$list['create_at']]['workinghours']=$diff_in_hrs;
				$details[$list['create_at']]['intime']=$times['login_time'];
				$details[$list['create_at']]['outtime']=$times['logout_time'];
			}
			$data['title']=date('F').' - '.date("Y",strtotime(date('Y-m-d'))); 
			if(count($details)>0){
				$data['reportlist']=$details;
			}else{
				$data['reportlist']=array();
			}
			//echo '<pre>';print_r($details);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
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
			$data['roleid'] = $data['userdetails']['role'];
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('profileedit',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function employeeedit(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$emp_id=base64_decode($this->uri->segment(3));
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$employee['roleid'] = $data['userdetails']['role'];
			$employee['role_type'] = 'admin';
			$employee['userdetails'] = $this->Employee_model->get_employee_details($emp_id);
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('profileedit',$employee);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function addemployee(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			if($data['userdetails']['role']==1 ||$data['userdetails']['role']==2){
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('addemployee',$data);
			//$this->load->view('footer');
			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function employeelist(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['employee_list'] = $this->Employee_model->get_employee_list_details();
			if($data['userdetails']['role']==1 ||$data['userdetails']['role']==2){
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('emplist',$data);
			//$this->load->view('footer');
			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}public function status(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['employee_list'] = $this->Employee_model->get_employee_list_details();
			if($data['userdetails']['role']==1 ||$data['userdetails']['role']==2){
				$empid=base64_decode($this->uri->segment(3));
				$status=base64_decode($this->uri->segment(4));
				if($status==1){
					$active=array('status'=>0);	
				}else{
					$active=array('status'=>1);
				}
				$statuschange= $this->Employee_model->update_profile_details($empid,$active);
				if(count($statuschange)>0){
						if($status==1){
							$this->session->set_flashdata('success','Employee  Successfully Deactive');
						}else{
							$this->session->set_flashdata('success','Employee  Successfully Active');
						}
					}else{
						$this->session->set_flashdata('error','Technical problem will occurred .please try again');
						
					}
					redirect('employee/employeelist');

			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function addeployeepost(){
		
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$post=$this->input->post();
			if($data['userdetails']['role']==1 ||$data['userdetails']['role']==2){
						if($_FILES['profilepic']['name']!=''){
						$profilepic=$_FILES['profilepic']['name'];
						move_uploaded_file($_FILES['profilepic']['tmp_name'], "assets/emp_pics/" . $_FILES['profilepic']['name']);

						}else{
							$profilepic='';
						}
						if($_FILES['aadharcard']['name']!=''){
						$aadhar=$_FILES['aadharcard']['name'];
						move_uploaded_file($_FILES['aadharcard']['tmp_name'], "assets/documents/" . $_FILES['aadharcard']['name']);

						}else{
							$aadhar='';
						}
						if($_FILES['pancard']['name']!=''){
						$pancard=$_FILES['pancard']['name'];
						move_uploaded_file($_FILES['pancard']['tmp_name'], "assets/documents/" . $_FILES['pancard']['name']);

						}else{
							$pancard='';
						}
						if($_FILES['kyc']['name']!=''){
						$kyc=$_FILES['kyc']['name'];
						move_uploaded_file($_FILES['kyc']['tmp_name'], "assets/documents/" . $_FILES['kyc']['name']);

						}else{
							$kyc='';
						}
						$addemp=array(
						'emp_name'=>isset($post['name'])?$post['name']:'',
						'emp_role'=>isset($post['designation'])?$post['designation']:'',
						'salary'=>isset($post['salary'])?$post['salary']:'',
						'responsibilities'=>isset($post['responsibilites'])?$post['responsibilites']:'',
						'emp_username'=>isset($post['email'])?$post['email']:'',
						'emp_email'=>isset($post['email'])?$post['email']:'',
						'emp_password'=>isset($post['password'])?md5($post['password']):'',
						'emp_org_password'=>isset($post['password'])?$post['password']:'',
						'emp_mobile'=>isset($post['mobile'])?$post['mobile']:'',
						'emp_altermobile'=>isset($post['altermobile'])?$post['altermobile']:'',
						'emp_doj'=>isset($post['doj'])?$post['doj']:'',
						'emp_profilepic'=>$profilepic,
						'emp_resaddress'=>isset($post['resaddress'])?$post['resaddress']:'',
						'emp_peraddress'=>isset($post['peraddress'])?$post['peraddress']:'',
						'aadharcardno'=>isset($post['aadharnumber'])?$post['aadharnumber']:'',
						'aadharcard'=>$aadhar,
						'pancardno'=>isset($post['pannumber'])?$post['pannumber']:'',
						'pancard'=>$pancard,
						'otherkye'=>$kyc,
						'role'=>3,
						'status'=>1,
						'create'=>date('Y-m-d H:i:s'),
						);
					$addemployee = $this->Employee_model->save_employee($addemp);
					//echo $this->db->last_query();exit;
					if(count($addemployee)>0){
						$id='PT000'.$addemployee;
						$empid=array('emp_office_id'=>$id);
						$this->Employee_model->update_profile_details($addemployee,$empid);
						$this->session->set_flashdata('success','Employee Successfully Added');
						redirect('employee/employeelist');
					}else{
						$this->session->set_flashdata('error','Technical problem will occurred .please try again');
						redirect('employee/addemployee');
					}

			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		} 		
		
		
	}
	public function update(){
		if($this->session->userdata('userdetails'))
		{
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$userdetails=$this->session->userdata('userdetails');
			$cust_upload_file= $this->Employee_model->get_employee_details($post['emp_id']);
			if($_FILES['profilepic']['name']!=''){
			$profilepic=$_FILES['profilepic']['name'];
			move_uploaded_file($_FILES['profilepic']['tmp_name'], "assets/emp_pics/" . $_FILES['profilepic']['name']);

			}else{
				$profilepic=$cust_upload_file['emp_profilepic'];
			}
			if($_FILES['aadharcard']['name']!=''){
			$aadhar=$_FILES['aadharcard']['name'];
			unlink( "assets/documents/".$cust_upload_file['aadharcard']);
			move_uploaded_file($_FILES['aadharcard']['tmp_name'], "assets/documents/" . $_FILES['aadharcard']['name']);

			}else{
				$aadhar=$cust_upload_file['aadharcard'];
			}
			if($_FILES['pancard']['name']!=''){
			$pancard=$_FILES['pancard']['name'];
			unlink( "assets/documents/".$cust_upload_file['pancard']);
			move_uploaded_file($_FILES['pancard']['tmp_name'], "assets/documents/" . $_FILES['pancard']['name']);

			}else{
				$pancard=$cust_upload_file['pancard'];
			}
			if($_FILES['kyc']['name']!=''){
			$kyc=$_FILES['kyc']['name'];
			unlink( "assets/documents/".$cust_upload_file['otherkye']);
			move_uploaded_file($_FILES['kyc']['tmp_name'], "assets/documents/" . $_FILES['kyc']['name']);

			}else{
				$kyc=$cust_upload_file['otherkye'];
			}
			if($post['role_type']=='admin'){
					$salary=$post['salary'];
					$dob=$cust_upload_file['emp_dob'];
					$responsibilites=$post['responsibilites'];	
				}else{
					$salary=$cust_upload_file['salary'];
					$dob=$post['dob'];	
					$responsibilites=$cust_upload_file['responsibilities'];	
				}
			$editdata=array(
			'emp_name'=>isset($post['name'])?$post['name']:'',
			'salary'=>$salary,
			'emp_role'=>isset($post['designation'])?$post['designation']:'',
			'responsibilities'=>$responsibilites,
			'emp_mobile'=>isset($post['mobile'])?$post['mobile']:'',
			'emp_altermobile'=>isset($post['altermobile'])?$post['altermobile']:'',
			'emp_dob'=>$dob,
			'emp_profilepic'=>$profilepic,
			'emp_resaddress'=>isset($post['resaddress'])?$post['resaddress']:'',
			'emp_peraddress'=>isset($post['peraddress'])?$post['peraddress']:'',
			'aadharcardno'=>isset($post['aadharnumber'])?$post['aadharnumber']:'',
			'aadharcard'=>$aadhar,
			'pancardno'=>isset($post['pannumber'])?$post['pannumber']:'',
			'pancard'=>$pancard,
			'otherkye'=>$kyc,
			'create'=>date('Y-m-d H:i:s'),
			);
			//echo '<pre>';print_r($editdata);exit;
			$updateprofile= $this->Employee_model->update_profile_details($post['emp_id'],$editdata);
			
			//echo $this->db->last_query();exit;
			if(count($updateprofile)>0){
				$this->session->set_flashdata('success','Profile Successfully updated');
				if($post['role_type']=='admin'){
					redirect('employee/employeelist');
				}else{
				redirect('employee/profile');	
				}
				
			}else{
				 $this->session->set_flashdata('error','Technical problem will occurred .please try again');
				 redirect('employee/edit');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function dailyreportpost(){
		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			$logindetails= $this->Employee_model->get_employee_logindetails($userdetails['emp_id'],date('Y-m-d'));
			//echo '<pre>';print_r($logindetails);exit;
			if($_FILES['reportfile']['name']!=''){
				$report=$_FILES['reportfile']['name'];
				move_uploaded_file($_FILES['reportfile']['tmp_name'], "assets/dailyreports/" . $_FILES['reportfile']['name']);
			}else{
				$report='';
			}
			$reportdata=array(
			'emp_id'=>$userdetails['emp_id'],
			'login_id'=>$logindetails['id'],
			'comment'=>isset($post['reprotcomment'])?$post['reprotcomment']:'',
			'create_date'=>date('Y-m-d H:i:s'),
			'reportfile'=>$report,
			'status'=>1,
			'date'=>date('Y-m-d'),
			);
			$daily_data= $this->Employee_model->save_daily_report($reportdata);
			if(count($daily_data)>0){
				$this->session->set_flashdata('success','Data Successfully Submited');
				redirect('employee/report');
			}else{
				 $this->session->set_flashdata('error','Technical problem will occurred .please try again');
				 redirect('employee/report');
			}
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
