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
	
	
	/* role wise employeess */
	public function role_details_data(){
	$this->db->select('project_roles.p_r_id,project_roles.role')->from('project_roles');
	$this->db->where('project_roles.status',1);
	return $this->db->get()->result_array();
	} 
	public function save_role_wise_employee_details($data){
	$this->db->insert('role_wise_employee', $data);
	return $insert_id = $this->db->insert_id();
	}
	
	
	
	/* work assign */
	public function get_project_data(){
	$this->db->select('project.p_id,project.project_name')->from('project');
	$this->db->where('project.status',1);
	return $this->db->get()->result_array();
	} 
	
	
	
	
	
   
}