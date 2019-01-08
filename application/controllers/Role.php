<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html', 'form'));
        $this->load->library('session', 'form_validation');
        $this->load->library('email');
        $this->load->model('Employee_model');
        $this->load->model('Project_model');
        $this->load->model('Role_model');
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


    public function role_list(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $list=$this->Role_model->role_list();
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
            $this->load->view('role_list',$data);


        }
        else{

            redirect('employee');
        }

    }
    public function role_edit(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $id=base64_decode($this->uri->segment(3));
            $data['list']=$this->Role_model->get_role_by_id($id);

            if(count($data['list'])>0){
            }
            else{
                $this->session->set_flashdata('error','This Role Type is Deleted by another user ');
                redirect($_SERVER[HTTP_REFERER]);

            }
            $this->load->view('header1');
            $this->load->view('sidebar',$data);
            $this->load->view('edit_role',$data);

        }
        else{

            redirect('employee');
        }

    }
    public function save_edit_role(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $role_id=$this->input->post('role_id');

            $name=$this->input->post('name');

            $flag=$this->Role_model->check_edit_role($name,$role_id);
            if($flag==1){
                $this->session->set_flashdata('error','Role Type Existed');
                redirect($_SERVER[HTTP_REFERER]);
            }

            $data=array(
                'role_name'=>$name,


                'updated_at'=>date('Y-m-d H:i:s'),
                'updated_by'=>$userdetails['emp_id']);

            $flag=$this->Role_model->save_edit_role($data,$role_id);
            if($flag==1){
                $this->session->set_flashdata('success','Role Type UPdated Successfully');
                redirect('role/role_list');

            }
            $this->session->set_flashdata('error','Role Type Not Updated ');
            redirect($_SERVER[HTTP_REFERER]);


        }
        else{

            redirect('employee');
        }


    }
    public function role_status(){
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
            $flag=$this->Role_model->change_status($data,$id);
            if($flag==1){
                $this->session->set_flashdata('success','Role Type Status Changed Successfully');
                redirect('role/role_list');

            }
            $this->session->set_flashdata('error','Role Type Status Not Changed ');
            redirect('role/role_list');

        }
        else{

            redirect('employee');
        }

    }
    public function delete_role(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $user_id=$userdetails['emp_id'];
            $id= base64_decode($this->uri->segment(3));



            $data=array(
                'status'=>0,
                'updated_by'=>$user_id,
                'updated_at'=>date('Y-m-d H:i:s'));
            $flag=$this->Role_model->change_status($data,$id);
            if($flag==1){
                $this->session->set_flashdata('success','Role Type Deleted Successfully');
                redirect('role/role_list');

            }
            $this->session->set_flashdata('error','Role Type Not Deleted');
            redirect('role/role_list');

        }
        else{

            redirect('employee');
        }

    }
    public function add_role(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');
            $data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['emp_id']);
            $this->load->view('header1');
            $this->load->view('sidebar',$data);
            $this->load->view('add_role');

        }
        else{

            redirect('employee');
        }
    }
    public function save_role(){
        if($this->session->userdata('userdetails')) {
            $userdetails=$this->session->userdata('userdetails');

            $name=$this->input->post('name');

            $flag=$this->Role_model->check_role_type($name);
            if($flag==1){
                $this->session->set_flashdata('error','Role  Existed');
                redirect($_SERVER[HTTP_REFERER]);
            }

            $data=array(
                'role_name'=>$name,
                'status'=>1,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'created_by'=>$userdetails['emp_id']);

            $flag=$this->Role_model->save_role($data);
            if($flag==1){
                $this->session->set_flashdata('success','Role Type Added Successfully');
                redirect('role/role_list');

            }
            $this->session->set_flashdata('error','Role Type Not Added ');
            redirect($_SERVER[HTTP_REFERER]);

        }
        else{

            redirect('employee');
        }
    }


}
