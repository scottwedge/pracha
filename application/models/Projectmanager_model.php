<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projectmanager_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
        $this->load->database("default");
    }
    public function save_project_details($data){
	$this->db->insert('project', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_project_list(){
	$this->db->select('project.*')->from('project');
	$this->db->where('project.status!=',2);
	return $this->db->get()->result_array();
	} 
	public function edit_project_details($p_id){
	$this->db->select('project.*')->from('project');
	$this->db->where('project.p_id',$p_id);
	return $this->db->get()->row_array();
	} 
	public function update_project_details($p_id,$data){
	$this->db->where('p_id', $p_id);
	return $this->db->update('project', $data);
	}
	public function delete_project_details($p_id){
      $this->db->where('p_id',$p_id);
    return $this->db->delete('project');
	}
	/* role */
	public function save_role_details($data){
	$this->db->insert('project_roles', $data);
	return $insert_id = $this->db->insert_id();
	}
	public function get_role_list(){
	$this->db->select('project_roles.*')->from('project_roles');
	$this->db->where('project_roles.status!=',2);
	return $this->db->get()->result_array();
	} 
	public function get_edit_role($p_r_id){
	$this->db->select('project_roles.*')->from('project_roles');
	$this->db->where('project_roles.p_r_id',$p_r_id);
	return $this->db->get()->row_array();
	} 
	public function edit_role_details($p_r_id,$data){
	$this->db->where('p_r_id', $p_r_id);
	return $this->db->update('project_roles', $data);
	}
	public function delete_role_details($p_r_id){
	$this->db->where('p_r_id',$p_r_id);
    return $this->db->delete('project_roles');
	}
	public function check_role_already($role){
	$this->db->select('project_roles.*')->from('project_roles');
		$this->db->where('project_roles.role',$role);
		$this->db->where('project_roles.status ',1);
		return $this->db->get()->row_array();
	}
	public function check_role_data_exsists($role){
	$this->db->select('*')->from('project_roles');
	$this->db->where('role',$role);
	$this->db->where('status !=',2);
	return $this->db->get()->row_array();
	}
	
	
	
	
	/* role wise employeess */
	public function check_employess_role_wise_data_exsists($role_name,$employe_name){
			$this->db->select('role_wise_employee.r_w_id')->from('role_wise_employee');
			$this->db->where('role_wise_employee.role_name',$role_name);
			$this->db->where('role_wise_employee.employe_name',$employe_name);
			$this->db->where('role_wise_employee.status ',1);
			return $this->db->get()->result_array();
		}
	
	
	public function role_details_data(){
	$this->db->select('project_roles.p_r_id,project_roles.role')->from('project_roles');
	$this->db->where('project_roles.status',1);
	return $this->db->get()->result_array();
	} 
	public function employee_role_wise_list(){
	$this->db->select('role_wise_employee.*,project_roles.role')->from('role_wise_employee');
	$this->db->join('project_roles', 'project_roles.p_r_id = role_wise_employee.role_name', 'left');
	$this->db->where('role_wise_employee.status!=',2);
	return $this->db->get()->result_array();
	} 
	
	public function save_role_wise_employee_details($data){
	$this->db->insert('role_wise_employee', $data);
	return $insert_id = $this->db->insert_id();
	}
	public function edit_role_wise_employee_data($r_w_id){
	$this->db->select('role_wise_employee.*')->from('role_wise_employee');
	$this->db->where('role_wise_employee.r_w_id',$r_w_id);
	return $this->db->get()->row_array();
	}
	public function update_role_wise_employee_details($r_w_id,$data){
	$this->db->where('r_w_id', $r_w_id);
	return $this->db->update('role_wise_employee', $data);
	}
	public function delete_role_wise_employee_details($r_w_id){
	$this->db->where('r_w_id',$r_w_id);
    return $this->db->delete('role_wise_employee');
	}
	/* work assign */
	public function get_project_data(){
	$this->db->select('project.p_id,project.project_name')->from('project');
	$this->db->where('project.status',1);
	return $this->db->get()->result_array();
	} 
	public function  get_role_type_list(){
	$this->db->select('project_roles.p_r_id,project_roles.role')->from('project_roles');
	$this->db->where('project_roles.status',1);
	return $this->db->get()->result_array();
	} 
	public function save_work_details($data){
	$this->db->insert('work_assign', $data);
	return $insert_id = $this->db->insert_id();
	}
	public function get_work_assign_list(){
	$this->db->select('work_assign.*,project.project_name,project_roles.role')->from('work_assign');
	$this->db->join('project', 'project.p_id = work_assign.work_project_name', 'left');
	$this->db->join('project_roles', 'project_roles.p_r_id = work_assign.role_type', 'left');
	$this->db->where('work_assign.status!=',2);
	return $this->db->get()->result_array();
	} 
	public function edit_work_details($w_id){
	$this->db->select('work_assign.*')->from('work_assign');
	$this->db->where('work_assign.w_id',$w_id);
	return $this->db->get()->row_array();
	} 
	public function upadte_work_details($w_id,$data){
	$this->db->where('w_id', $w_id);
	return $this->db->update('work_assign', $data);
	}
	public function delete_work_details($w_id){
	$this->db->where('w_id',$w_id);
    return $this->db->delete('work_assign');
	}
	
	
	
	
	
	public  function get_role_wise_list($role_type){
			$this->db->select('role_wise_employee.r_w_id,role_wise_employee.employe_name')->from('role_wise_employee');
			$this->db->join('project_roles', 'project_roles.p_r_id = role_wise_employee.role_name', 'left');
			$this->db->where('role_wise_employee.role_name',$role_type);
			return $this->db->get()->result_array();
		}
	
	
	
	
	
	
	
	
	
	
   
}