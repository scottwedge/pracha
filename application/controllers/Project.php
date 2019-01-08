<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html', 'form'));
        $this->load->library('session', 'form_validation');
        $this->load->library('email');
        $this->load->model('Employee_model');
        $this->load->model('Project_model');
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
    public function add_website(){
    if($this->session->userdata('userdetails')) {
        $userdetails=$this->session->userdata('userdetails');
        $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
        $this->load->view('header1');
        $this->load->view('sidebar',$data);
        $this->load->view('add_website_type',$data);

    }
    else{

        redirect('employee');
    }
}
    public function save_project_type(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $apptype=$this->input->post('p_type');
            $name=$this->input->post('name');

           $flag=$this->Project_model->check_project_type($name,$apptype);
           if($flag==1){
               $this->session->set_flashdata('error','Project Type Existed');
               redirect($_SERVER[HTTP_REFERER]);
           }

            $data=array('application_type'=>$apptype,
                'project_type'=>$name,
                'status'=>1,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'created_by'=>$userdetails['emp_id']);

            $flag=$this->Project_model->save_project_type($data);
            if($flag==1){
                $this->session->set_flashdata('success','Project Type Added Successfully');
                redirect('project/project_type_list');

            }
            $this->session->set_flashdata('error','Project Type Not Added ');
            redirect($_SERVER[HTTP_REFERER]);

        }
        else{

            redirect('employee');
        }
    }
    public function project_type_list(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $list=$this->Project_model->get_project_type_list();
            if(count($list)>0){
                $data['status']=1;
                $data['list']=$list;
            }
            else{
                $data['list']=$list;
                $data['status']=0;
            }

            $this->load->view('header1');
            $this->load->view('sidebar',$data);
            $this->load->view('project_type_list',$data);


        }
        else{

            redirect('employee');
        }

    }
    public function ptype_edit(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $id=base64_decode($this->uri->segment(3));
            $data['list']=$this->Project_model->get_type_by_id($id);
            if(count($data['list'])>0){
            }
            else{
                $this->session->set_flashdata('error','This Type is Deleted by another user ');
                redirect($_SERVER[HTTP_REFERER]);

            }
            $this->load->view('header1');
            $this->load->view('sidebar',$data);
            $this->load->view('edit_project_type',$data);

        }
        else{

            redirect('employee');
        }

    }
    public function save_edit_project_type(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $type_id=$this->input->post('type_id');
            $apptype=$this->input->post('p_type');
            $name=$this->input->post('name');

            $flag=$this->Project_model->check_project_edit_type($name,$apptype,$type_id);
            if($flag==1){
                $this->session->set_flashdata('error','Project Type Existed');
                redirect($_SERVER[HTTP_REFERER]);
            }

            $data=array('application_type'=>$apptype,
                'project_type'=>$name,

                'updated_at'=>date('Y-m-d H:i:s'),
                'updated_by'=>$userdetails['emp_id']);

            $flag=$this->Project_model->save_project_edit_type($data,$type_id);
            if($flag==1){
                $this->session->set_flashdata('success','Project Type Added Successfully');
                redirect('project/project_type_list');

            }
            $this->session->set_flashdata('error','Project Type Not Added ');
            redirect($_SERVER[HTTP_REFERER]);


        }
        else{

            redirect('employee');
        }


    }
    public function ptype_status(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $user_id=$userdetails['emp_id'];
            $id= base64_decode($this->uri->segment(3));
            $status=base64_decode($this->uri->segment(4));
            if($status==1){
                $status=2;

            }
            else{
                $status=1;
            }

            $data=array(
                'status'=>$status,
                'updated_by'=>$user_id,
                'updated_at'=>date('Y-m-d H:i:s'));
           $flag=$this->Project_model->change_status($data,$id);
           if($flag==1){
               $this->session->set_flashdata('success','Project Type Status Changed Successfully');
               redirect('project/project_type_list');

           }
            $this->session->set_flashdata('error','Project Type Status Not Changed ');
            redirect('project/project_type_list');

        }
        else{

            redirect('employee');
        }

    }
    public function delete_project_type(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $user_id=$userdetails['emp_id'];
            $id= base64_decode($this->uri->segment(3));



            $data=array(
                'status'=>0,
                'updated_by'=>$user_id,
                'updated_at'=>date('Y-m-d H:i:s'));
            $flag=$this->Project_model->change_status($data,$id);
            if($flag==1){
                $this->session->set_flashdata('success','Project Type Deleted Successfully');
                redirect('project/project_type_list');

            }
            $this->session->set_flashdata('error','Project Type Not Deleted');
            redirect('project/project_type_list');

        }
        else{

            redirect('employee');
        }

    }
    public function  add_project(){
        if($this->session->userdata('userdetails')) {
            $userdetails = $this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $data['roles'] = $this->Project_model->get_roles();
            $data['ptypes'] = $this->Project_model->get_ptypes();
            $this->load->view('header1');
            $this->load->view('sidebar', $data);
            $this->load->view('add_project', $data);
        }
        else{

            redirect('employee');
        }



    }
public function save_project(){
    if($this->session->userdata('userdetails')) {

        $p_name = $this->input->post('name');
        $p_st_dt = $this->input->post('sdate');
        $est_days = $this->input->post('est');
        //$ptypes=$this->input->post('ptype');
        $clt_name = $this->input->post('clt_name');
        $clt_num = $this->input->post('clt_num');
        $clt_email = $this->input->post('clt_email');
        //$roles=$this->input->post('roles');
       $flag=$this->Project_model->check_project_name($p_name);
       if($flag==1){
           $this->session->set_flashdata('error', 'Project Name Existed ');
           redirect($_SERVER[HTTP_REFERER]);

       }
        $data = array('project_name' => $p_name,
            'est_days' => $est_days,
            'start_date' => $p_st_dt,
            'client_name' => $clt_name,
            'client_number' => $clt_num,
            'client_email' => $clt_email);
        $flag = $this->Project_model->save_project_details($data);
        if ($flag == 1) {
            $this->session->set_flashdata('success', 'Project Added Successfully');
            redirect('project/project_list');
        }
        $this->session->set_flashdata('error', 'Project Not Added ');
        redirect('project/add_project');
    }
    else{

        redirect('employee');
    }

    }
    public function project_list(){
        if ($this->session->userdata('userdetails')) {
            $userdetails = $this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $data['project_list']=$this->Project_model->get_all_projects();
            $this->load->view('header1');
            $this->load->view('sidebar',$data);
            $this->load->view('project_list',$data);

        }
        else{

            redirect('employee');
        }
    }
    public function assign_project()
    {
        if ($this->session->userdata('userdetails')) {
            $userdetails = $this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $data['roles'] = $this->Project_model->get_roles();
            $data['projects'] = $this->Project_model->get_projects();

            $this->load->view('header1');
            $this->load->view('sidebar', $data);
            $this->load->view('assign_project', $data);


        }
        else{

            redirect('employee');
        }
    }

    public function save_assign_project()
    {
        if ($this->session->userdata('userdetails')) {
            $userdetails = $this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');
            $pname=$this->input->post('project');






        }
        else{

            redirect('employee');
        }
    }
}
