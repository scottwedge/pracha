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
		 $this->load->model('Projectmanager_model');
		$this->load->library('user_agent');
		$this->load->library('pdf');
		$ip = $this->input->ip_address();
		$this->load->library('livemumtowordclsconvert');

		//echo '<pre>';print_r($ip);exit;
		/*$ip_list = array("122.175.58.42", "49.207.6.7", "64.233.173.34","64.233.173.63", "64.233.173.61", "64.233.173.64");
		if (!in_array($ip , $ip_list))
		{
		redirect('');
		}*/

	}
	public function index()
	{

		if(!$this->session->userdata('userdetails'))
		{
		$this->load->view('header1');
		$this->load->view('login');
		//$this->load->view('footer');
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
			$format = "Y-m-d H:i:s";
			$logintime= date($format, strtotime("-5 minute"));
			$login_data=array(
			'emp_id'=>$logindetails['emp_id'],
			'emp_office_id'=>$logindetails['emp_office_id'],
			'login_time'=>$logintime,
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
		//	echo '<pre>';print_r($data);exit;

			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('profile',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}


	}
	
	public function add_project(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('add_project',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	
	public function add_project_post(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
             $post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			if(isset($_FILES['project_document']['name']) && $_FILES['project_document']['name']!=''){
							$temp = explode(".", $_FILES["project_document"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['project_document']['tmp_name'], "assets/projectdocument/" . $documents);
						}else{
							$documents='';
						}
			     $save_data=array(
	            'project_name'=>isset($post['project_name'])?$post['project_name']:'',
	            'project_type'=>isset($post['project_type'])?$post['project_type']:'',
	            'p_strat_date'=>isset($post['p_strat_date'])?$post['p_strat_date']:'',
	            'frame_work'=>isset($post['frame_work'])?$post['frame_work']:'',
	            'estimated_days'=>isset($post['estimated_days'])?$post['estimated_days']:'',
	            'client_name'=>isset($post['client_name'])?$post['client_name']:'',
	            'client_number'=>isset($post['client_number'])?$post['client_number']:'',
	            'client_email'=>isset($post['client_email'])?$post['client_email']:'',
	            'project_document'=>isset($documents)?$documents:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
				 );
			//echo '<pre>';print_r($save_data);exit;
			$save=$this->Projectmanager_model->save_project_details($save_data);	
				 //echo '<pre>';print_r($save);exit;
				   if(count($save)>0){
						$this->session->set_flashdata('success',"Project successfully added");	
						redirect('employee/project_type_list');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('employee/add_project');
					}  
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function project_type_list(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
		//	echo '<pre>';print_r($data);exit;
            $data['project_list']=$this->Projectmanager_model->get_project_list();
				//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('project_type_list',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function projectedit(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$project=base64_decode ($this->uri->segment(3));
			$data['edit_project']=$this->Projectmanager_model->edit_project_details($project);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('edit_project',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function editprojectpost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
             $post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$edit_project=$this->Projectmanager_model->edit_project_details($post['p_id']);
			//echo '<pre>';print_r($edit_project);exit;
			if(isset($_FILES['project_document']['name']) && $_FILES['project_document']['name']!=''){
							$temp = explode(".", $_FILES["project_document"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['project_document']['tmp_name'], "assets/projectdocument/" . $documents);
						}else{
							$documents=$edit_project['project_document'];
						}
			     $update_data=array(
	            'project_name'=>isset($post['project_name'])?$post['project_name']:'',
	            'project_type'=>isset($post['project_type'])?$post['project_type']:'',
	            'p_strat_date'=>isset($post['p_strat_date'])?$post['p_strat_date']:'',
	            'frame_work'=>isset($post['frame_work'])?$post['frame_work']:'',
	            'estimated_days'=>isset($post['estimated_days'])?$post['estimated_days']:'',
	            'client_name'=>isset($post['client_name'])?$post['client_name']:'',
	            'client_number'=>isset($post['client_number'])?$post['client_number']:'',
	            'client_email'=>isset($post['client_email'])?$post['client_email']:'',
	            'project_document'=>isset($documents)?$documents:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
				 );
			//echo '<pre>';print_r($update_data);exit;
			$update=$this->Projectmanager_model->update_project_details($post['p_id'],$update_data);	
				 //echo '<pre>';print_r($update);exit;
				   if(count($update)>0){
						$this->session->set_flashdata('success',"Project successfully updated");	
						redirect('employee/project_type_list');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('employee/project_type_list');
					}  
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function projectstatus()
	{
if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
	             $p_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($p_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Projectmanager_model->update_project_details($p_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Project successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Project successfully  Activate.");
								}
								redirect('employee/project_type_list');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('employee/project_type_list');
							}
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('employee');
					}	
	
        }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('employee');  
	   }
    }
	
	
	public function projectdelete(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$project=base64_decode ($this->uri->segment(3));
			$delete_details =$this->Projectmanager_model->delete_project_details($project);
						 //echo'<pre>';print_r($delete_details);exit;  		
                  	if(count($delete_details)>0){				 
					$this->session->set_flashdata('success'," Project successfully deleted");		 
					redirect('employee/project_type_list');			  					  
					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");

			  redirect('employee/project_type_list');	
				 } 
			
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function role(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('role/role',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function addrole(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$check_role_exit=$this->Projectmanager_model->check_role_already($post['role']);
				//echo'<pre>';print_r($check_role_exit);exit;
				if(count($check_role_exit)>0){
					$this->session->set_flashdata('error',"role Name already exist. Please use another role name");
					redirect('employee/role');
				}	
			
			
			
			$save_data=array(
	            'role'=>isset($post['role'])?$post['role']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				 );
			//echo '<pre>';print_r($save_data);exit;
			$save=$this->Projectmanager_model->save_role_details($save_data);	
				// echo '<pre>';print_r($save);exit;
				   if(count($save)>0){
						$this->session->set_flashdata('success',"Role successfully added");	
						redirect('employee/rolelist');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('employee/addrole');
					}  
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function rolelist(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			
			$data['role_list']=$this->Projectmanager_model->get_role_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('role/role-list',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function editrole(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$role=base64_decode ($this->uri->segment(3));
			$data['edit_role']=$this->Projectmanager_model->get_edit_role($role);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('role/edit-role',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function editrolepost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$role_details=$this->Projectmanager_model->get_edit_role($post['role_id']);
		 if($role_details['role']!=$post['role']){
						$check=$this->Projectmanager_model->check_role_data_exsists($post['role']);
						if(count($check)>0){
						$this->session->set_flashdata('error',"Role Name already exist. Please use another role name");
						redirect('employee/rolelist');
						}	
					}	
			$save_data=array(
	            'role'=>isset($post['role'])?$post['role']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				 );
			//echo '<pre>';print_r($save_data);exit;
			$save=$this->Projectmanager_model->edit_role_details($post['role_id'],$save_data);	
				//echo '<pre>';print_r($save);exit;
				   if(count($save)>0){
						$this->session->set_flashdata('success',"Role successfully updated");	
						redirect('employee/rolelist');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('employee/rolelist');
					}  
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function rolestatus()
	{
if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
	             $role_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($role_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Projectmanager_model->edit_role_details($role_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Role successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Role successfully  Activate.");
								}
								redirect('employee/rolelist');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('employee/rolelist');
							}
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('employee');
					}	
	
        }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('employee');  
	   }
    }
	
	
	
	
	
	
	public function roledelete(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$role=base64_decode ($this->uri->segment(3));
			$delete_details =$this->Projectmanager_model->delete_role_details($role);
						 //echo'<pre>';print_r($delete_details);exit;  		
                  	if(count($delete_details)>0){				 
					$this->session->set_flashdata('success'," Role successfully deleted");		 
					redirect('employee/rolelist');			  					  
					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");

			  redirect('employee/rolelist');	
				 } 
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	
	
	public function addemployees(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$data['role_list']=$this->Projectmanager_model->role_details_data();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('role/add-employee',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function addemployeespost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$check=$this->Projectmanager_model->check_employess_role_wise_data_exsists($post['role_name'],$post['employe_name']);
						//echo '<pre>';print_r($check);exit;
						if(count($check)>0){
							$this->session->set_flashdata('error',"employee Name already exist. Please use another employee name");
							redirect('employee/addemployees');
						}
			
			
			$save_data=array(
	            'role_name'=>isset($post['role_name'])?$post['role_name']:'',
	            'employe_name'=>isset($post['employe_name'])?$post['employe_name']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
				 );
			//echo '<pre>';print_r($save_data);exit;
			$save=$this->Projectmanager_model->save_role_wise_employee_details($save_data);	
				//echo '<pre>';print_r($save);exit;
				   if(count($save)>0){
						$this->session->set_flashdata('success',"role wise employee successfully added");	
						redirect('employee/employeeslist');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('employee/addemployees');
					}  
			
			
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function employeeslist(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$data['employee_role_list']=$this->Projectmanager_model->employee_role_wise_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('role/employe-list',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function editemployee(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$role=base64_decode ($this->uri->segment(3));
			$data['edit_employee']=$this->Projectmanager_model->edit_role_wise_employee_data($role);
			$data['role_list']=$this->Projectmanager_model->role_details_data();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('role/edit-employee',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function editemployeespost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$data['edit_employee']=$this->Projectmanager_model->edit_role_wise_employee_data($r_w_id);
			 if($edit_employee['role_name']!=$post['role_name'] || $edit_employee['employe_name']!=$post['employe_name']){
						$check=$this->Projectmanager_model->check_employess_role_wise_data_exsists($post['role_name'],$post['employe_name']);
						if(count($check)>0){
						$this->session->set_flashdata('error',"Employee Name already exist. Please use another Employee name");
						redirect('employee/employeeslist');
						}	
					}	
			
			$save_data=array(
	            'role_name'=>isset($post['role_name'])?$post['role_name']:'',
	            'employe_name'=>isset($post['employe_name'])?$post['employe_name']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
				 );
			//echo '<pre>';print_r($save_data);exit;
			$save=$this->Projectmanager_model->update_role_wise_employee_details($post['r_w_id'],$save_data);	
				//echo '<pre>';print_r($save);exit;
				   if(count($save)>0){
						$this->session->set_flashdata('success',"role wise employee successfully updated");	
						redirect('employee/employeeslist');	
					}else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('employee/employeeslist');
					}  
			
			
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function employeedelete(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$work=base64_decode ($this->uri->segment(3));
			$delete_details =$this->Projectmanager_model->delete_role_wise_employee_details($work);
						 //echo'<pre>';print_r($delete_details);exit;  		
                  	if(count($delete_details)>0){				 
					$this->session->set_flashdata('success'," role wise employee  successfully deleted");		 
					redirect('employee/employeeslist');			  					  
					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");

			  redirect('employee/employeeslist');	
				 } 
			
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function get_role_wise_list(){
	if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
					$id=$this->input->post('role_type');
					$student_list=$this->Projectmanager_model->get_role_wise_list($id);
					//echo'<pre>';print_r($student_list);exit;
					if(count($student_list)>0){
						$data['msg']=1;
						$data['list']=$student_list;
						echo json_encode($data);exit;	
					}else{
						$data['msg']=0;
						echo json_encode($data);exit;
					}
					
			
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('home');
		}
	}
	
	
	
	public function project_work_assign(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
		//	echo '<pre>';print_r($data);exit;
            $data['project_data']=$this->Projectmanager_model->get_project_data();
			$data['role_types']=$this->Projectmanager_model->get_role_type_list();
			//echo '<pre>';print_r($data);exit;
			
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('project-work-assign',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function addwork(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			if(isset($_FILES['document']['name']) && $_FILES['document']['name']!=''){
							$temp = explode(".", $_FILES["document"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['document']['tmp_name'], "assets/workdocement/" . $documents);
						}else{
							$documents='';
						}
			$save_data=array(
	            'role_type'=>isset($post['role_type'])?$post['role_type']:'',
	            'work_project_name'=>isset($post['work_project_name'])?$post['work_project_name']:'',
	            'p_s_date'=>isset($post['p_s_date'])?$post['p_s_date']:'',
	            'f_work'=>isset($post['f_work'])?$post['f_work']:'',
	            'e_days'=>isset($post['e_days'])?$post['e_days']:'',
				'document'=>isset($documents)?$documents:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
				 );
			//echo '<pre>';print_r($save_data);exit;
			$save=$this->Projectmanager_model->save_work_details($save_data);	
			if(count($save)>0){
			if(isset($post['employee_name']) && count($post['employee_name'])>0){
					$cnt=0;foreach($post['employee_name'] as $list){ 
						  $add_data=array(
						  'w_id'=>isset($save)?$save:'',
						  'employee_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
						  );
						   //echo '<pre>';print_r($add_data);
						  $this->Projectmanager_model->save_work_employee_details($add_data);	

				       $cnt++;}
					}
					//exit;
					  $this->session->set_flashdata('success',"work successfully added");	
						redirect('employee/project_work_assign_list');	
				    }else{
						$this->session->set_flashdata('error',"technical problem occurred. please try again once");
						redirect('employee/project_work_assign');
					}  
		
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	
	
	public function project_work_assign_list(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
		//	echo '<pre>';print_r($data);exit;
          $data['work_assign_list']=$this->Projectmanager_model->get_work_assign_list();
		  
		  	//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('project-work-assign-list',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function workedit(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$project=base64_decode ($this->uri->segment(3));
			$data['edit_work']=$this->Projectmanager_model->edit_work_details($project);
			$data['project_data']=$this->Projectmanager_model->get_project_data();
			$data['role_types']=$this->Projectmanager_model->get_role_type_list();
			$data['employee_data']=$this->Projectmanager_model->get_role_wise_list($data['edit_work']['role_type']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('edit_work',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function workview(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$project=base64_decode ($this->uri->segment(3));
			$data['edit_work']=$this->Projectmanager_model->edit_work_view_details($project);
			
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('edit_work_view',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	
	public function editworkpost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$edit_work=$this->Projectmanager_model->edit_work_details($post['w_id']);
			//echo '<pre>';print_r($edit_work);exit;
			if(isset($_FILES['document']['name']) && $_FILES['document']['name']!=''){
							$temp = explode(".", $_FILES["document"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['document']['tmp_name'], "assets/workdocement/" . $documents);
						}else{
							$documents=$edit_work['document'];
						}
			$update_data=array(
	            'role_type'=>isset($post['role_type'])?$post['role_type']:'',
	            'work_project_name'=>isset($post['work_project_name'])?$post['work_project_name']:'',
	            'p_s_date'=>isset($post['p_s_date'])?$post['p_s_date']:'',
	            'f_work'=>isset($post['f_work'])?$post['f_work']:'',
	            'e_days'=>isset($post['e_days'])?$post['e_days']:'',
				'document'=>isset($documents)?$documents:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
				 );
			//echo '<pre>';print_r($update_data);exit;
			$update=$this->Projectmanager_model->upadte_work_details($post['w_id'],$update_data);	
				if(count($update)>0){
			$details=$this->Projectmanager_model->get_edit_role_wise_employee_list($post['w_id']);
				  if(count($details)>0){
					  foreach($details as $lis){
						 $this->Projectmanager_model->delete_employee_role_wisedetails($lis['w_a_e']); 
					  }
					}
					if(isset($post['employee_name']) && count($post['employee_name'])>0){
					$cnt=0;foreach($post['employee_name'] as $list){ 
						  $add_data=array(
						  'w_id'=>isset($post['w_id'])?$post['w_id']:'',
						  'employee_name'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:''
						  );
						   //echo '<pre>';print_r($add_data);
						  $this->Projectmanager_model->save_role_wise_list_details_data($add_data);	

				       $cnt++;}
					}
			//exit;
			$this->session->set_flashdata('success',"work successfully updated");	
			redirect('employee/project_work_assign_list');		
			
			}else{
			$this->session->set_flashdata('error',"technical problem occurred. please try again once");
			redirect('employee/project_work_assign_list');
			}  
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	public function workstatus()
	{
if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
	             $w_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($w_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Projectmanager_model->upadte_work_details($w_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Work Assign successfully  Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Work Assign successfully  Activate.");
								}
								redirect('employee/project_work_assign_list');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('employee/project_work_assign_list');
							}
						}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('employee');
					}	
	
        }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('employee');  
	   }
    }
	
	
	
	
	public function workdelete(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$work=base64_decode ($this->uri->segment(3));
			$delete_details =$this->Projectmanager_model->delete_work_details($work);
						 //echo'<pre>';print_r($delete_details);exit;  		
                  	if(count($delete_details)>0){				 
					$this->session->set_flashdata('success'," Work successfully deleted");		 
					redirect('employee/project_work_assign_list');			  					  
					}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");

			  redirect('employee/project_work_assign_list');	
				 } 
			
			
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	
	
	public function payslip(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['payslips_details'] = $this->Employee_model->get_monthly_payslips_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data['payslips_details']);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('payslips_list',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}


	}
	public function payslips(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['emp_details'] = $this->Employee_model->get_employee_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('payslips',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}


	}
	public function payslippost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$data['userdetails'] = $this->Employee_model->get_employee_details($post['emp_id']);
				$val = $this->load->library('livemumtowordclsconvert');
				$data['grossearningwords']=$this->livemumtowordclsconvert->mycustom_convert_num($post['grossearning']);
				$path = rtrim(FCPATH,"/");
				$file_name =$post['month'].'_Month_payslip_'.$data['userdetails']['emp_office_id'].'.pdf';
				$data['name']=$file_name;
				$data['month']=$post['month'];
				$data['workeddays']=$post['workeddays'];
				$data['workingdays']=$post['workingdays'];
				$data['grossearning']= $post['grossearning'];
				$data['grossearning_lop']= ($post['grossearning'])- ($post['grossdeduction']);
				$data['grossdeduction']=$post['grossdeduction'];
				$data['grossearning_lop_inwords']=$this->livemumtowordclsconvert->mycustom_convert_num($data['grossearning_lop']);

				$data['lop']=$post['workingdays']- $post['workeddays'];
				$data['heading']=$post['month'].' '.date('Y');
				$pdfFilePath = $path."/assets/payslips/".$file_name;
				ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
				$html =$this->load->view('pdf',$data, true); // render the view into HTML
				//echo '<pre>';print_r($html);exit;
				$this->load->library('pdf');
				$pdf = $this->pdf->load();
				$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
				$pdf->SetDisplayMode('fullpage');
				$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
				$pdf->WriteHTML($html); // write the HTML into the PDF
				$pdf->Output($pdfFilePath, 'F');
				$monthname = date("m", strtotime($post['month']));
				$displaydate= date('Y').'-'.$monthname.'-1';
				$invoicedata=array(
				'emp_id'=>$post['emp_id'],
				'month'=>$post['month'],
				'inovie_name'=>$file_name,
				'create_at'=>date('Y-m-d H:i:s'),
				'date'=> $displaydate,
				);
				$this->Employee_model->sae_invoice_data($invoicedata);

				$this->session->set_flashdata('success','Pay Slip successfully created');
				redirect('employee/payslips');



		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function holidays_list(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			if($data['userdetails']['role']==3){
				$data['holidays_list']=$this->Employee_model->get_holidays_list_data();
			}else{
			$data['holidays_list']=$this->Employee_model->get_admin_holidays_list_data();
			}

			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('holidays',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function task(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			if($data['userdetails']['role']==3){

			$data['task_list']=$this->Employee_model->get_task_list_data($userdetails['emp_id']);
			}else{
			$data['task_list']=$this->Employee_model->get_task_list_data('');
			}
			$data['emp_details'] = $this->Employee_model->get_employee_list();
			//echo '<pre>';print_r($data['emp_details']);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('task',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function suggestion(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			if($data['userdetails']['role']==3){
			$data['suggestion_list']=$this->Employee_model->get_suggestion_data($userdetails['emp_id']);
			}else{
				$data['suggestion_list']=$this->Employee_model->get_all_suggestion_data();
				$data['emp_list']=$this->Employee_model->get_employee_list_details();

			}
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('suggestion',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function suggestionpost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			if(isset($post['emp_id']) && $post['emp_id']!=''){
				$emp=$post['emp_id'];
				$replyemp=$data['userdetails']['emp_id'];
				$type='Replayed';
			}else{
				$emp=$data['userdetails']['emp_id'];
				$replyemp=$data['userdetails']['emp_id'];
				$type='Replay';
			}
			$msgdata=array(
				'emp_id'=>$emp,
				'replayed_id'=>$replyemp,
				'comment'=>isset($post['message'])?$post['message']:'',
				'type'=>$type,
				'status'=>1,
				'create'=>date('Y-m-d H:i:s'),
				);
				//echo '<pre>';print_r($msgdata);exit;
			$addmsg=$this->Employee_model->save_suggetion_data($msgdata);
			if(count($addmsg)>0){
				$this->session->set_flashdata('success','Your suggestion Successfully submitted');
				redirect('employee/suggestion');
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred .please try again');
				redirect('employee/suggestion');
			}

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
			$data['leaves_list']=$this->Employee_model->get_leaves_data($userdetails['emp_id']);
			$data['emp_list']=$this->Employee_model->get_employee_list_basic_details();
			$data['sick']=$this->Employee_model->get_sick_leaves($userdetails['emp_id']);
			$data['sick_count']=$this->Employee_model->get_sick_leave_count($userdetails['emp_id']);
			$data['casual_count']=$this->Employee_model->get_casual_leave_count($userdetails['emp_id']);
			$data['casual']=$this->Employee_model->get_casual_leaves($userdetails['emp_id']);
			$data['paid']=$this->Employee_model->get_paid_leaves($userdetails['emp_id']);
			$data['paid_count']=$this->Employee_model->get_paid_leave_count($userdetails['emp_id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('leaves',$data);
			//$this->load->view('footer');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function leaveslist(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			if($data['userdetails']['role']==1 || $data['userdetails']['role']==2){
				$data['leaves_list']=$this->Employee_model->get_allemployees_leaves_data();
				$data['emp_list']=$this->Employee_model->get_employee_list_basic_details();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('header1');
				$this->load->view('sidebar',$data);
				$this->load->view('leaves',$data);

			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function leavepost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$post=$this->input->post();

				$timestamp = strtotime($post['fromdate']);
				$timestamp1 = strtotime($post['todate']);
				$currentDate = date('Y-m-d', $timestamp);
				$newDate = date('Y-m-d', $timestamp1);
				if(isset($post['type']) && $post['type']==1){
					$emp_id=$post['emp_id'];
				}else{
					$emp_id=$data['userdetails']['emp_id'];
				}
			$date1=date_create($currentDate);
			$date2=date_create($newDate);
			$diff=date_diff($date1,$date2);
			$leavedata=array(
				'emp_id'=>$emp_id,
				'form_date1'=>$currentDate,
				'to_date1'=>$newDate,
				'form_date'=>isset($post['fromdate'])?$post['fromdate']:'',
				'to_date'=>isset($post['todate'])?$post['todate']:'',
				'region'=>isset($post['comment'])?$post['comment']:'',
				'leavetype'=>isset($post['leavetype'])?$post['leavetype']:'',
				'status'=>1,
				'create_at'=>date('Y-m-d H:i:s'),
				'create_by'=>isset($data['userdetails']['emp_id'])?$data['userdetails']['emp_id']:'',
				'days'=>$diff->format("%a")+1,
				);
				//echo '<pre>';print_r($leavedata);exit;
			$addleave=$this->Employee_model->save_leaves_data($leavedata);
			if(count($addleave)>0){
				$this->session->set_flashdata('success','Your Request Successfully submitted');
				if(isset($post['type']) && $post['type']==1){
				redirect('employee/leaveslist');
				}else{
					redirect('employee/leaves');
				}
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred .please try again');
				if(isset($post['type']) && $post['type']==1){
					redirect('employee/leaveslist');
				}else{
					redirect('employee/leaves');
				}
			}

		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function taskpost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$taskdata=array(
				'emp_id'=>isset($post['task'])?$post['task']:'',
				'assign_by'=>isset($userdetails['emp_id'])?$userdetails['emp_id']:'',
				'from_date'=>isset($post['fromdate'])?$post['fromdate']:'',
				'to_date'=>isset($post['todate'])?$post['todate']:'',
				'comment'=>isset($post['comment'])?$post['comment']:'',
				'status'=>1,
				'create_at'=>date('Y-m-d H:i:s'),
				);
				//echo '<pre>';print_r($leavedata);exit;
			$addtask=$this->Employee_model->save_task_data($taskdata);
			if(count($addtask)>0){
				$this->session->set_flashdata('success','Task Successfully added');
				redirect('employee/task');
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred .please try again');
				redirect('employee/task');
			}

		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public function holiydayadd(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$holidaysdata=array(
				'emp_id'=>isset($data['userdetails']['emp_id'])?$data['userdetails']['emp_id']:'',
				'festival'=>isset($post['festivalname'])?$post['festivalname']:'',
				'date'=>isset($post['date'])?$post['date']:'',
				'day'=>isset($post['day'])?$post['day']:'',
				'status'=>1,
				'create_at'=>date('Y-m-d H:i:s'),
				);
				//echo '<pre>';print_r($leavedata);exit;
			$addholidaysdata=$this->Employee_model->save_holidays_data($holidaysdata);
			if(count($addholidaysdata)>0){
				$this->session->set_flashdata('success','Your Request Successfully submitted');
				redirect('employee/holidays_list');
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred .please try again');
				redirect('employee/holidays_list');
			}

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
				$task_list= $this->Employee_model->get_all_employees_dailyreport();
				//echo '<pre>';print_r($task_list);
				foreach ($task_list as $list){
					if(isset($list['logout_time']) && $list['logout_time']=='0000-00-00 00:00:00'){
						$current_time=date('Y-m-d H:i:s');
						$datetime1 = new DateTime($list['login_time']);
						$datetime2 = new DateTime($current_time);
						$interval = $datetime1->diff($datetime2);
						$diff_in_hrs=$interval->format('%h')." Hr ".$interval->format('%i')." Min ".$interval->format('%s').'sec';
					}else{
						$datetime1 = new DateTime($list['login_time']);
						$datetime2 = new DateTime($list['logout_time']);
						$interval = $datetime1->diff($datetime2);
						$diff_in_hrs=$interval->format('%h')." hrs ".$interval->format('%i')." Min ".$interval->format('%s').'sec';
					}
					$t=$list['create_at'];
					$details[$list['id']]['currentday']=$t;
					$details[$list['id']]['name']=$list['emp_name'];
					$details[$list['id']]['mobile']=$list['emp_mobile'];
					$details[$list['id']]['workinghours']=$diff_in_hrs;
					$details[$list['id']]['intime']=$list['login_time'];
					$details[$list['id']]['outtime']=$list['logout_time'];
					$details[$list['id']]['dailywork']=$this->Employee_model->get_employee_daily_task_list($list['emp_id'],$list['id']);

				}
				//echo '<pre>';print_r($details);exit;
				if(count($details)>0){
				$data['reportlist']=$details;
				}else{
				$data['reportlist']=array();
				}
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
			//echo '<pre>';print_r($data);exit;
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
	public function allemployeeedit(){

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
			$this->load->view('allprofileedit',$employee);
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
			//echo '<pre>';print_r($data['userdetails'] );exit;
			if($data['userdetails']['role']==1 ){
			    $data['role_list']=$this->Employee_model->role_list();
				
                $data['dept_list']=$this->Employee_model->department_list();
				//echo '<pre>';print_r($data);exit;
				//echo '<pre>';print_r($data);exit;
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
	
	
	public function allemployees(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			//echo '<pre>';print_r($data['userdetails'] );exit;
			if($data['userdetails']['role']==2){
			    $data['role_list']=$this->Employee_model->role_list_data_hr();
				
                $data['dept_list']=$this->Employee_model->department_list();
				//echo '<pre>';print_r($data);exit;
				//echo '<pre>';print_r($data);exit;
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('allemployees',$data);
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
	
	public function allemployeelist(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$employee_list = $this->Employee_model->get_employee_list_all_details();
			foreach($employee_list as $list){
				$sick=$this->Employee_model->get_sick_leave_count($list['emp_id']);
				$casual=$this->Employee_model->get_casual_leave_count($list['emp_id']);
				$paid=$this->Employee_model->get_paid_leave_count($list['emp_id']);
				$all_list[$list['emp_id']]=$list;
				$all_list[$list['emp_id']]['sick_leaves']=$sick['sick_count'];
				$all_list[$list['emp_id']]['causal_leaves']=$casual['casual_count'];
				$all_list[$list['emp_id']]['paid_leaves']=$paid['paid_count'];
			}
			$data['employee_list']=$all_list;
			//echo '<pre>';print_r($all_list);exit;
			if($data['userdetails']['role']==2){
			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('allemployeelist',$data);
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
			$employee_list = $this->Employee_model->get_employee_list_all_details();
			//echo'<pre>';print_r($employee_list);exit;
			foreach($employee_list as $list){
				$sick=$this->Employee_model->get_sick_leave_count($list['emp_id']);
				$casual=$this->Employee_model->get_casual_leave_count($list['emp_id']);
				$paid=$this->Employee_model->get_paid_leave_count($list['emp_id']);
				$all_list[$list['emp_id']]=$list;
				$all_list[$list['emp_id']]['sick_leaves']=$sick['sick_count'];
				$all_list[$list['emp_id']]['causal_leaves']=$casual['casual_count'];
				$all_list[$list['emp_id']]['paid_leaves']=$paid['paid_count'];
			}
			$data['employee_list']=$all_list;
			//echo '<pre>';print_r($all_list);exit;
			if($data['userdetails']['role']==1){
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


	}
	public function status(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['employee_list'] = $this->Employee_model->get_employee_list_details();
			if($data['userdetails']['role']==1){
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
	public function allemployeestatus(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['employee_list'] = $this->Employee_model->get_employee_list_details();
			if($data['userdetails']['role']==2){
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
					redirect('employee/allemployeelist');

			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}


	}
	
	
	
	
	
	
	
	
	
	public function holidaystatus(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['employee_list'] = $this->Employee_model->get_employee_list_details();
			if($data['userdetails']['role']==1 ||$data['userdetails']['role']==2){
				$hid=base64_decode($this->uri->segment(3));
				$status=base64_decode($this->uri->segment(4));
				if($status==1){
					$active=array('status'=>0);
				}else{
					$active=array('status'=>1);
				}
				if($status==2){

					$statuschange= $this->Employee_model->delete_holiday_details($hid);
					//echo $this->db->last_query();exit;
					if(count($statuschange)>0){
						$this->session->set_flashdata('success','Holiday Successfully Deleted');

						}else{
							$this->session->set_flashdata('error','Technical problem will occurred .please try again');

					}

				}else{

					$statuschange= $this->Employee_model->update_holiday_details($hid,$active);
					if(count($statuschange)>0){
							if($status==1){
								$this->session->set_flashdata('success','Holiday Successfully Deactive');
							}else{
								$this->session->set_flashdata('success','Holiday Successfully Active');
							}
						}else{
							$this->session->set_flashdata('error','Technical problem will occurred .please try again');

						}
				}

					redirect('employee/holidays_list');

			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}


	}
	public function leavestatus(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['employee_list'] = $this->Employee_model->get_employee_list_details();
			if($data['userdetails']['role']==1 ||$data['userdetails']['role']==2){
				$empid=base64_decode($this->uri->segment(3));
				$status=base64_decode($this->uri->segment(4));
				$leave_id=base64_decode($this->uri->segment(5));
				$active=array('status'=>$status);
				$statuschange= $this->Employee_model->update_leave_details($empid,$active,$leave_id);
				if(count($statuschange)>0){
						if($status==2){
							$this->session->set_flashdata('success','Employee request Successfully Approved');
						}else{
							$this->session->set_flashdata('success','Employee request Successfully Rejected');
						}
					}else{
						$this->session->set_flashdata('error','Technical problem will occurred .please try again');

					}
					redirect('employee/leaveslist');

			}else{
				$this->session->set_flashdata("error","You don't have permissions to access that page");
				redirect('employee/profile');
			}
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}


	}
	public function taskstatus(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$data['employee_list'] = $this->Employee_model->get_employee_list_details();
			if($data['userdetails']['role']==1 ||$data['userdetails']['role']==2){
				$empid=base64_decode($this->uri->segment(3));
				$status=base64_decode($this->uri->segment(4));
				$task_id=base64_decode($this->uri->segment(5));
				$active=array('status'=>$status);
			if($status==4){
				$statuschange= $this->Employee_model->delete_task_details($task_id);
				//echo $this->db->last_query();exit;
				if(count($statuschange)>0){
						if($status==2){
							$this->session->set_flashdata('success','Task deleted Successfully');
						}else{
							$this->session->set_flashdata('success','Task status done Successfully Updated');
						}
					}else{
						$this->session->set_flashdata('error','Technical problem will occurred .please try again');

					}

			}else{
				$statuschange= $this->Employee_model->update_task_details($empid,$active,$task_id);
				//echo $this->db->last_query();exit;
				if(count($statuschange)>0){
						if($status==2){
							$this->session->set_flashdata('success','Task status In progress Successfully Updated');
						}else{
							$this->session->set_flashdata('success','Task status done Successfully Updated');
						}
					}else{
						$this->session->set_flashdata('error','Technical problem will occurred .please try again');

					}

			}
					redirect('employee/task');

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
			//echo '<pre>';print_r($post);exit;
			if($data['userdetails']['role']==1){
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
						'basicsalary'=>isset($post['basicsalary'])?$post['basicsalary']:'',
						'hra'=>isset($post['hra'])?$post['hra']:'',
						'specialallowance'=>isset($post['specialallowance'])?$post['specialallowance']:'',
						'conveyance'=>isset($post['conveyance'])?$post['conveyance']:'',
						'medicalreimbursement'=>isset($post['medicalreimbursement'])?$post['medicalreimbursement']:'',
						'pfnumber'=>isset($post['pfnumber'])?$post['pfnumber']:'',
						'pfamount'=>isset($post['pfamount'])?$post['pfamount']:'',
						'pt'=>isset($post['pt'])?$post['pt']:'',
						'esi'=>isset($post['esi'])?$post['esi']:'',
						'others'=>isset($post['others'])?$post['others']:'',
						'advance'=>isset($post['advance'])?$post['advance']:'',
						'bankname'=>isset($post['bankname'])?$post['bankname']:'',
						'bankaccountnumber'=>isset($post['bankaccountnumber'])?$post['bankaccountnumber']:'',
						'emp_profilepic'=>$profilepic,
						'emp_resaddress'=>isset($post['resaddress'])?$post['resaddress']:'',
						'emp_peraddress'=>isset($post['peraddress'])?$post['peraddress']:'',
						'aadharcardno'=>isset($post['aadharnumber'])?$post['aadharnumber']:'',
						'aadharcard'=>$aadhar,
						'pancardno'=>isset($post['pannumber'])?$post['pannumber']:'',
						'pancard'=>$pancard,
						'otherkye'=>$kyc,
						'role'=>isset($post['role'])?$post['role']:'',
						'status'=>1,
						'create'=>date('Y-m-d H:i:s'),
                            'department'=>'IT'
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
	public function alleployeepost(){

		if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			if($data['userdetails']['role']==2){
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
						'basicsalary'=>isset($post['basicsalary'])?$post['basicsalary']:'',
						'hra'=>isset($post['hra'])?$post['hra']:'',
						'specialallowance'=>isset($post['specialallowance'])?$post['specialallowance']:'',
						'conveyance'=>isset($post['conveyance'])?$post['conveyance']:'',
						'medicalreimbursement'=>isset($post['medicalreimbursement'])?$post['medicalreimbursement']:'',
						'pfnumber'=>isset($post['pfnumber'])?$post['pfnumber']:'',
						'pfamount'=>isset($post['pfamount'])?$post['pfamount']:'',
						'pt'=>isset($post['pt'])?$post['pt']:'',
						'esi'=>isset($post['esi'])?$post['esi']:'',
						'others'=>isset($post['others'])?$post['others']:'',
						'advance'=>isset($post['advance'])?$post['advance']:'',
						'bankname'=>isset($post['bankname'])?$post['bankname']:'',
						'bankaccountnumber'=>isset($post['bankaccountnumber'])?$post['bankaccountnumber']:'',
						'emp_profilepic'=>$profilepic,
						'emp_resaddress'=>isset($post['resaddress'])?$post['resaddress']:'',
						'emp_peraddress'=>isset($post['peraddress'])?$post['peraddress']:'',
						'aadharcardno'=>isset($post['aadharnumber'])?$post['aadharnumber']:'',
						'aadharcard'=>$aadhar,
						'pancardno'=>isset($post['pannumber'])?$post['pannumber']:'',
						'pancard'=>$pancard,
						'otherkye'=>$kyc,
						'role'=>isset($post['role'])?$post['role']:'',
						'status'=>1,
						'create'=>date('Y-m-d H:i:s'),
                            'department'=>'IT'
						);
					$addemployee = $this->Employee_model->save_employee($addemp);
					//echo $this->db->last_query();exit;
					if(count($addemployee)>0){
						$id='PT000'.$addemployee;
						$empid=array('emp_office_id'=>$id);
						$this->Employee_model->update_profile_details($addemployee,$empid);
						$this->session->set_flashdata('success','Employee Successfully Added');
						redirect('employee/allemployeelist');
					}else{
						$this->session->set_flashdata('error','Technical problem will occurred .please try again');
						redirect('employee/allemployees');
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
	public function allupdate(){
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
					$basicsalary=$post['basicsalary'];
					$hra=$post['hra'];
					$specialallowance=$post['specialallowance'];
					$conveyance=$post['conveyance'];
					$medicalreimbursement=$post['medicalreimbursement'];
					$pfnumber=$post['pfnumber'];
					$pfamount=$post['pfamount'];
					$pt=$post['pt'];
					$esi=$post['esi'];
					$others=$post['others'];
					$advance=$post['advance'];
					$bankname=$post['bankname'];
					$bankaccountnumber=$post['bankaccountnumber'];
					$salary_increment=$post['salary_increment'];
				}else{
					$salary=$cust_upload_file['salary'];
					$dob=$post['dob'];
					$responsibilites=$cust_upload_file['responsibilities'];
					$basicsalary=$cust_upload_file['basicsalary'];
					$hra=$cust_upload_filecust_upload_file['hra'];
					$specialallowance=$cust_upload_file['specialallowance'];
					$conveyance=$cust_upload_file['conveyance'];
					$medicalreimbursement=$cust_upload_file['medicalreimbursement'];
					$pfnumber=$cust_upload_file['pfnumber'];
					$pfamount=$cust_upload_file['pfamount'];
					$pt=$cust_upload_file['pt'];
					$esi=$cust_upload_file['esi'];
					$others=$cust_upload_file['others'];
					$advance=$cust_upload_file['advance'];
					$bankname=$cust_upload_file['bankname'];
					$bankaccountnumber=$cust_upload_file['bankaccountnumber'];
					$salary_increment=$cust_upload_file['salary_increment'];
				}
			$editdata=array(
			'emp_name'=>isset($post['name'])?$post['name']:'',
			'salary'=>$salary,
			'emp_role'=>isset($post['designation'])?$post['designation']:'',
			'responsibilities'=>$responsibilites,
			'emp_mobile'=>isset($post['mobile'])?$post['mobile']:'',
			'emp_altermobile'=>isset($post['altermobile'])?$post['altermobile']:'',
			'basicsalary'=>$basicsalary,
			'hra'=>$hra,
			'specialallowance'=>$specialallowance,
			'conveyance'=>$conveyance,
			'medicalreimbursement'=>$medicalreimbursement,
			'pfnumber'=>$pfnumber,
			'pfamount'=>$pfamount,
			'pt'=>$pt,
			'esi'=>$esi,
			'others'=>$others,
			'advance'=>$advance,
			'bankname'=>$bankname,
			'bankaccountnumber'=>$bankaccountnumber,
			'salary_increment'=>$salary_increment,
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
					redirect('employee/allemployeelist');
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
					$basicsalary=$post['basicsalary'];
					$hra=$post['hra'];
					$specialallowance=$post['specialallowance'];
					$conveyance=$post['conveyance'];
					$medicalreimbursement=$post['medicalreimbursement'];
					$pfnumber=$post['pfnumber'];
					$pfamount=$post['pfamount'];
					$pt=$post['pt'];
					$esi=$post['esi'];
					$others=$post['others'];
					$advance=$post['advance'];
					$bankname=$post['bankname'];
					$bankaccountnumber=$post['bankaccountnumber'];
					$salary_increment=$post['salary_increment'];
				}else{
					$salary=$cust_upload_file['salary'];
					$dob=$post['dob'];
					$responsibilites=$cust_upload_file['responsibilities'];
					$basicsalary=$cust_upload_file['basicsalary'];
					$hra=$cust_upload_filecust_upload_file['hra'];
					$specialallowance=$cust_upload_file['specialallowance'];
					$conveyance=$cust_upload_file['conveyance'];
					$medicalreimbursement=$cust_upload_file['medicalreimbursement'];
					$pfnumber=$cust_upload_file['pfnumber'];
					$pfamount=$cust_upload_file['pfamount'];
					$pt=$cust_upload_file['pt'];
					$esi=$cust_upload_file['esi'];
					$others=$cust_upload_file['others'];
					$advance=$cust_upload_file['advance'];
					$bankname=$cust_upload_file['bankname'];
					$bankaccountnumber=$cust_upload_file['bankaccountnumber'];
					$salary_increment=$cust_upload_file['salary_increment'];
				}
			$editdata=array(
			'emp_name'=>isset($post['name'])?$post['name']:'',
			'salary'=>$salary,
			'emp_role'=>isset($post['designation'])?$post['designation']:'',
			'responsibilities'=>$responsibilites,
			'emp_mobile'=>isset($post['mobile'])?$post['mobile']:'',
			'emp_altermobile'=>isset($post['altermobile'])?$post['altermobile']:'',
			'basicsalary'=>$basicsalary,
			'hra'=>$hra,
			'specialallowance'=>$specialallowance,
			'conveyance'=>$conveyance,
			'medicalreimbursement'=>$medicalreimbursement,
			'pfnumber'=>$pfnumber,
			'pfamount'=>$pfamount,
			'pt'=>$pt,
			'esi'=>$esi,
			'others'=>$others,
			'advance'=>$advance,
			'bankname'=>$bankname,
			'bankaccountnumber'=>$bankaccountnumber,
			'salary_increment'=>$salary_increment,
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
	public function getpayslips(){

		$post=$this->input->post();
		$ids=explode('_',$post['emp_id']);
		$getpayslip= $this->Employee_model->get_payslip_data($ids[0],$ids[1]);
		if(count($getpayslip) > 0)
		{
			$data['msg']=1;
			$data=$getpayslip;
			echo json_encode($data);
		}else{
			$data['msg']=0;
			echo json_encode($data);
		}

	}
	public function last_month_login_report(){
		if($this->session->userdata('userdetails'))
		{
			$currentMonth = date('F');
			$file_name= Date('F', strtotime($currentMonth . " last month"));
			header("Content-type: application/csv");
            header("Content-Disposition: attachment; filename=\"$file_name"."_employees".".csv\"");
            header("Pragma: no-cache");
            header("Expires: 0");

			$userdetails=$this->session->userdata('userdetails');
			//$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
				$task_list= $this->Employee_model->get_all_employees_monthreport();
				//echo '<pre>';print_r($task_list);exit;
				foreach ($task_list as $list){
					if(isset($list['logout_time']) && $list['logout_time']=='0000-00-00 00:00:00'){
						$current_time=date('Y-m-d H:i:s');
						$datetime1 = new DateTime($list['login_time']);
						$datetime2 = new DateTime($current_time);
						$interval = $datetime1->diff($datetime2);
						$diff_in_hrs=$interval->format('%h')." Hr ".$interval->format('%i')." Min ".$interval->format('%s').'sec';
					}else{
						$datetime1 = new DateTime($list['login_time']);
						$datetime2 = new DateTime($list['logout_time']);
						$interval = $datetime1->diff($datetime2);
						$diff_in_hrs=$interval->format('%h')." hrs ".$interval->format('%i')." Min ".$interval->format('%s').'sec';
					}
					$t=$list['create_at'];
					$details[$list['id']]['currentday']=date("D d",strtotime($t));
					$details[$list['id']]['name']=$list['emp_name'];
					$details[$list['id']]['mobile']=$list['emp_mobile'];
					$details[$list['id']]['workinghours']=$diff_in_hrs;
					$details[$list['id']]['intime']=$list['login_time'];
					$details[$list['id']]['outtime']=$list['logout_time'];
					//$details[$list['id']]['dailywork']=$this->Employee_model->get_employee_daily_task_list($list['emp_id'],$list['id']);

				$data[] = array('Date'=> $details[$list['id']]['currentday'], 'Name'=> $details[$list['id']]['name'], 'Login time'=> $details[$list['id']]['intime'],'Outime'=>$details[$list['id']]['outtime'], 'Working Hours'=> $details[$list['id']]['workinghours'],);
				}

            $handle = fopen('php://output', 'w');
			foreach ($data as $data) {
                fputcsv($handle, $data);
            }
                fclose($handle);
            exit;

		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}
	}
	public  function timecalculation(){

		$task_list= $this->Employee_model->get_employee_working_hours(date('m'));
		//echo '<pre>';print_r($task_list);exit;
		foreach($task_list as $li){
			if(isset($li['logout_time']) && $li['login_time']=='0000-00-00 00:00:00'){
						$current_time=date('Y-m-d H:i:s');
						$datetime1 = new DateTime($li['login_time']);
						$datetime2 = new DateTime($current_time);
						$interval = $datetime1->diff($datetime2);
						$diff_in_hrs =$interval->format('%h');
						$diff_in_mins =$interval->format('%i');
					}else{
						$datetime1 = new DateTime($li['login_time']);
						$datetime2 = new DateTime($li['logout_time']);
						$interval = $datetime1->diff($datetime2);
						$diff_in_hrs =$interval->format('%h');
						$diff_in_mins =$interval->format('%i');
					}
					//$diff_in_mins

			$datas[$li['emp_id']]['hours'][] = $diff_in_hrs;
			$datas[$li['emp_id']]['mins']= $diff_in_mins;
			$datas[$li['emp_id']]['emp_name']=$li['emp_name'];


		}

		foreach($datas as $li){
			//echo '<pre>';print_r($li);
			echo $li['emp_name'].'=   Hours : '.array_sum($li['hours']).'------min :'.$li['mins'];
			echo '<br>';

		}

		exit;


	}
	public  function alltaskexport(){


		$emp_id=base64_decode($this->uri->segment(3));
		$filename=$emp_id;
		$usersdetails=$this->Employee_model->get_employee_name($emp_id);
		$name=str_replace(" ","_",$usersdetails['emp_name']);
		$usersData=$this->Employee_model->get_export_task_details($emp_id);
		$filename = $name.'_daily_work_update_sheet_'.date('Ymd').'.csv';
		//echo '<pre>';print_r($filename);exit;
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");

		// get data
		//$usersData = $this->Main_model->getUserDetails();

		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Comment","Upload File","Upload Date & Time","Date");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;

	}
	

	public  function taskexport(){


		$emp_id=base64_decode($this->uri->segment(3));
		$filename=$emp_id;
		$usersdetails=$this->Employee_model->get_employee_name($emp_id);
		$name=str_replace(" ","_",$usersdetails['emp_name']);
		$usersData=$this->Employee_model->get_export_task_details($emp_id);
		$filename = $name.'_daily_work_update_sheet_'.date('Ymd').'.csv';
		//echo '<pre>';print_r($filename);exit;
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");

		// get data
		//$usersData = $this->Main_model->getUserDetails();

		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Comment","Upload File","Upload Date & Time","Date");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;

	}
	public function sales()
	{

	if($this->session->userdata('userdetails'))
		{
			$userdetails=$this->session->userdata('userdetails');
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
			$employee_list = $this->Employee_model->get_employee_list_all_details();


			if($data['userdetails']['role']==4){

			$data['reports_list']=$this->Employee_model->reports_list_data();
			 //echo'<pre>';print_r($data);exit;

			$this->load->view('header1');
			$this->load->view('sidebar',$data);
			$this->load->view('reports',$data);
			//$this->load->view('footer');
			}else{
				redirect('employee/sales');

			}
	      }else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('employee');
		}

	}

}
