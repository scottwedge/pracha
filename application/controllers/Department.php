<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html', 'form'));
        $this->load->library('session', 'form_validation');
        $this->load->library('email');
        $this->load->model('Employee_model');
        $this->load->model('Project_model');
        $this->load->model('Department_model');
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


    public function department_list(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $list=$this->Department_model->department_list();
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
            $this->load->view('department_list',$data);


        }
        else{

            redirect('employee');
        }

    }
    public function department_edit(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $id=base64_decode($this->uri->segment(3));
            $data['list']=$this->Department_model->get_department_by_id($id);

            if(count($data['list'])>0){
            }
            else{
                $this->session->set_flashdata('error','This Department Name  is Deleted by another user ');
                redirect($_SERVER[HTTP_REFERER]);

            }
            $this->load->view('header1');
            $this->load->view('sidebar',$data);
            $this->load->view('edit_department',$data);

        }
        else{

            redirect('employee');
        }

    }
    public function save_edit_department(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $department_id=$this->input->post('department_id');

            $name=$this->input->post('name');

            $flag=$this->Department_model->check_edit_department($name,$department_id);
            if($flag==1){
                $this->session->set_flashdata('error','Department Name Existed');
                redirect($_SERVER[HTTP_REFERER]);
            }

            $data=array(
                'department_name'=>$name,


                'updated_at'=>date('Y-m-d H:i:s'),
                'updated_by'=>$userdetails['emp_id']);

            $flag=$this->Department_model->save_edit_department($data,$department_id);
            if($flag==1){
                $this->session->set_flashdata('success','Department Name UPdated Successfully');
                redirect('department/department_list');

            }
            $this->session->set_flashdata('error','Department Name  Not Updated ');
            redirect($_SERVER[HTTP_REFERER]);


        }
        else{

            redirect('employee');
        }


    }
    public function department_status(){
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
            $flag=$this->Department_model->change_status($data,$id);
            if($flag==1){
                $this->session->set_flashdata('success','Department  Status Changed Successfully');
                redirect('department/department_list');

            }
            $this->session->set_flashdata('error','Department Status Not Changed ');
            redirect('department/department_list');

        }
        else{

            redirect('employee');
        }

    }
    public function delete_department(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $user_id=$userdetails['emp_id'];
            $id= base64_decode($this->uri->segment(3));



            $data=array(
                'status'=>0,
                'updated_by'=>$user_id,
                'updated_at'=>date('Y-m-d H:i:s'));
            $flag=$this->Department_model->change_status($data,$id);
            if($flag==1){
                $this->session->set_flashdata('success','Department Name Deleted Successfully');
                redirect('department/department_list');

            }
            $this->session->set_flashdata('error','Department Name Not Deleted');
            redirect('department/department_list');

        }
        else{

            redirect('employee');
        }

    }
    public function add_department(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $this->load->view('header1');
            $this->load->view('sidebar',$data);
            $this->load->view('add_department');

        }
        else{

            redirect('employee');
        }
    }
    public function save_department(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');

            $name=$this->input->post('name');

            $flag=$this->Department_model->check_department_type($name);
            if($flag==1){
                $this->session->set_flashdata('error','Department  Existed');
                redirect($_SERVER[HTTP_REFERER]);
            }

            $data=array(
                'department_name'=>$name,
                'status'=>1,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'created_by'=>$userdetails['emp_id']);

            $flag=$this->Department_model->save_department($data);
            if($flag==1){
                $this->session->set_flashdata('success','Department  Added Successfully');
                redirect('department/department_list');

            }
            $this->session->set_flashdata('error','Department  Not Added ');
            redirect($_SERVER[HTTP_REFERER]);

        }
        else{

            redirect('employee');
        }
    }


}
