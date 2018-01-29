<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function login_details($email,$pass){
		$sql = "SELECT * FROM employee WHERE (emp_email ='".$email."' AND emp_password='".$pass."'  AND status='1') OR (emp_username ='".$email."' AND emp_password='".$pass."' AND status='1')";
		return $this->db->query($sql)->row_array();	
	}
	public function check_employee_email($email){
		$sql = "SELECT * FROM employee WHERE emp_email ='".$email."'AND status='1'";
		return $this->db->query($sql)->row_array();	
	}
	public function get_employee_details($id){
		$sql = "SELECT * FROM employee WHERE emp_id ='".$id."'";
		return $this->db->query($sql)->row_array();	
	}
	public function save_login_time_status($data){
		$this->db->insert('login_report', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function getcustomer_oldpassword($empid){
		$sql="SELECT * FROM employee WHERE emp_id ='".$empid."'";
        return $this->db->query($sql)->row_array(); 
	}
	public function set_password($empid,$pass){
		$sql1="UPDATE employee SET emp_password ='".$pass."' WHERE emp_id = '".$empid."'";
       	return $this->db->query($sql1);
	}


}