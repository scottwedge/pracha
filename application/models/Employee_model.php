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
	public function set_password($empid,$pass,$orgpass){
		$sql1="UPDATE employee SET emp_password ='".$pass."', emp_org_password ='".$orgpass."' WHERE emp_id = '".$empid."'";
       	return $this->db->query($sql1);
	}
	public function check_today_login($empid,$date){
		$this->db->select('*')->from('login_report');
		$this->db->where('emp_id', $empid);	
		$this->db->where('create_at', $date);	
        return $this->db->get()->row_array();
	}
	public function get_employee_list_all_details(){
		$this->db->select('employee.emp_id,employee.role,employee.emp_name,employee.emp_office_id,employee.department,employee.emp_mobile,employee.emp_doj,employee.salary,employee.status,employee.emp_role')->from('employee');
		$this->db->order_by('employee.emp_id asc');
		return $this->db->get()->result_array();
	}
	public function get_employee_list_details(){
		$this->db->select('*')->from('employee');
		$this->db->order_by('employee.emp_id asc');
		return $this->db->get()->result_array();
	}
	public function get_employee_list_basic_details(){
		$this->db->select('employee.emp_id,employee.emp_office_id,employee.emp_name')->from('employee');
		$this->db->order_by('employee.emp_id asc');
		return $this->db->get()->result_array();
	}
	public function get_employee_list(){
		$this->db->select('employee.emp_id,employee.emp_name,employee.emp_office_id')->from('employee');
		$this->db->order_by('employee.emp_id asc');
		return $this->db->get()->result_array();
	}
	public function update_logout_time_status($l_id,$emp_id,$date){
		$sql1="UPDATE login_report SET logout_time ='".$date."' WHERE id = '".$l_id."' AND emp_id = '".$emp_id."'";
       	return $this->db->query($sql1);
	}
	public function update_profile_details($id,$data){
		$this->db->where('emp_id', $id);
		return $this->db->update('employee', $data);
	}
	public function get_employee_logindetails($empid,$date){
		$this->db->select('*')->from('login_report');
		$this->db->where('emp_id', $empid);	
		$this->db->where('create_at', $date);	
        return $this->db->get()->row_array();
	}
	public function save_daily_report($data){
		$this->db->insert('work_sheet', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function sae_invoice_data($data){
		$this->db->insert('payslips', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function save_task_data($data){
		$this->db->insert('task', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function save_leaves_data($data){
		$this->db->insert('leaves', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function save_suggetion_data($data){
		$this->db->insert('suggestion_list', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function save_holidays_data($data){
		$this->db->insert('holidays_list', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function save_employee($data){
		$this->db->insert('employee', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function get_employee_task_list($emp_id,$l_id){
		$this->db->select('login_report.create_at,login_report.emp_id,login_report.id')->from('login_report');
		$this->db->where('emp_id', $emp_id);	
		$this->db->like('create_at', date('Y-m'));
		$this->db->order_by('login_report.create_at desc');
        $this->db->group_by('create_at'); 		
        return $this->db->get()->result_array();
	}
	public function get_employee_daily_task_list($emp_id,$l_id){
		$this->db->select('work_sheet.comment,work_sheet.reportfile,work_sheet.create_date')->from('work_sheet');
		$this->db->where('emp_id', $emp_id);	
		$this->db->where('login_id', $l_id);	
        return $this->db->get()->result_array();
	}
	public function get_employee_login_logout($emp_id,$date){
		$this->db->select('*')->from('login_report');
		$this->db->where('emp_id', $emp_id);	
		$this->db->where('create_at', $date);	
        return $this->db->get()->row_array();
	}
	public function get_all_employees_dailyreport(){
		$this->db->select('employee.emp_name,employee.emp_mobile,employee.emp_name,login_report.emp_id,login_report.create_at,login_report.id,login_report.login_time,login_report.logout_time')->from('login_report');
		$this->db->join('employee', 'employee.emp_id = login_report.emp_id', 'left');
		$this->db->order_by('login_report.id desc');
        return $this->db->get()->result_array();
	}
	public function get_all_employees_monthreport(){
		$this->db->select('employee.emp_name,employee.emp_mobile,employee.emp_name,login_report.emp_id,login_report.create_at,login_report.id,login_report.login_time,login_report.logout_time')->from('login_report');
		$this->db->join('employee', 'employee.emp_id = login_report.emp_id', 'left');
		$this->db->order_by('login_report.id asc');
		$this->db->where('YEAR(CURRENT_DATE - INTERVAL 1 MONTH)');
        return $this->db->get()->result_array();
	}
	public function get_employee_daily_task_lists($emp_id,$l_id){
		$this->db->select('work_sheet.comment,work_sheet.reportfile,work_sheet.create_date')->from('work_sheet');
		$this->db->where('emp_id', $emp_id);	
		$this->db->where('login_id', $l_id);	
        return $this->db->get()->result_array();
	}
	public function get_leaves_data($emp_id){
		$this->db->select('leaves.*,employee.emp_name,leaveemp.emp_name as create_name')->from('leaves');
		$this->db->join('employee', 'employee.emp_id = leaves.emp_id', 'left');
		$this->db->join('employee as leaveemp', 'leaveemp.emp_id = leaves.create_by', 'left');
		$this->db->where('leaves.emp_id', $emp_id);	
        return $this->db->get()->result_array();
	}
	public function get_suggestion_data($emp_id){
		$this->db->select('suggestion_list.*,employee.emp_name,employee.emp_profilepic, replayed.emp_name as empreplyname,, replayed.emp_profilepic as empreplyimage,')->from('suggestion_list');
		$this->db->join('employee', 'employee.emp_id = suggestion_list.emp_id', 'left');
		$this->db->join('employee as replayed', 'replayed.emp_id = suggestion_list.replayed_id', 'left');
		$this->db->where('suggestion_list.emp_id', $emp_id);	
        return $this->db->get()->result_array();
	}
	public function get_all_suggestion_data(){
		$this->db->select('suggestion_list.*,employee.emp_name,employee.emp_profilepic, replayed.emp_name as empreplyname,, replayed.emp_profilepic as empreplyimage,')->from('suggestion_list');
		$this->db->join('employee', 'employee.emp_id = suggestion_list.emp_id', 'left');
		$this->db->join('employee as replayed', 'replayed.emp_id = suggestion_list.replayed_id', 'left');
        return $this->db->get()->result_array();
	}
	public function get_allemployees_leaves_data(){
		$this->db->select('leaves.*,employee.emp_name,leaveemp.emp_name as create_name')->from('leaves');
		$this->db->join('employee', 'employee.emp_id = leaves.emp_id', 'left');
		$this->db->join('employee as leaveemp', 'leaveemp.emp_id = leaves.create_by', 'left');
		$this->db->order_by('leaves.leave_id desc');
        return $this->db->get()->result_array();
	}
	public function get_holidays_list_data(){
		$this->db->select('*')->from('holidays_list');
		$this->db->where('status',1);
		$this->db->order_by('holidays_list.id asc');
        return $this->db->get()->result_array();
	}
	public function get_admin_holidays_list_data(){
		$this->db->select('*')->from('holidays_list');
		$this->db->order_by('holidays_list.id asc');
        return $this->db->get()->result_array();
	}
	public function get_monthly_payslips_details($emp_id){
		$this->db->select('*')->from('payslips');
		$this->db->order_by('payslips.id desc');
		$this->db->where('emp_id', $emp_id);
        return $this->db->get()->result_array();
	}
	public function get_payslip_data($date,$emp_id){
		$this->db->select('*')->from('payslips');
		$this->db->where('emp_id', $emp_id);
		$this->db->where('date', $date);
        return $this->db->get()->row_array();
	}
	public function update_leave_details($emp_id,$data,$leave_id){
		$this->db->where('emp_id', $emp_id);
		$this->db->where('leave_id', $leave_id);
		return $this->db->update('leaves', $data);
	}
	public function update_holiday_details($h_id,$data){
		$this->db->where('id', $h_id);
		return $this->db->update('holidays_list', $data);
	}
	public function delete_holiday_details($hid){
		$sql1="DELETE FROM holidays_list WHERE id = '".$hid."'";
		return $this->db->query($sql1);
	}
	public function get_task_list_data($emp_id){
		$this->db->select('task.*,employee.emp_name,assign.emp_name as assignname')->from('task');
		$this->db->join('employee', 'employee.emp_id = task.emp_id', 'left');
		$this->db->join('employee as assign', 'assign.emp_id = task.assign_by', 'left');
		if($emp_id!=''){
			$this->db->where('task.emp_id', $emp_id);
		}
        return $this->db->get()->result_array();
	}
	public function update_task_details($emp_id,$data,$task_id){
		$this->db->where('emp_id', $emp_id);
		$this->db->where('id', $task_id);
		return $this->db->update('task', $data);
	}
	public function delete_task_details($task_id){
		$sql1="DELETE FROM task WHERE id = '".$task_id."'";
		return $this->db->query($sql1);
	}
	public function get_sick_leaves($emp_id){
		$this->db->select('leaves.leave_id,leaves.to_date1,leaves.form_date1,leaves.create_at,leaves.status,leaves.days')->from('leaves');
		$this->db->where('leaves.emp_id', $emp_id);
		$this->db->where('leaves.leavetype', 1);
		return $this->db->get()->result_array();
	}
	public function get_sick_leave_count($emp_id){
		$this->db->select('SUM(days) AS sick_count')->from('leaves');
		$this->db->where('leaves.emp_id', $emp_id);
		$this->db->where('leaves.leavetype', 1);
		return $this->db->get()->row_array();
	}
	public function get_casual_leaves($emp_id){
		$this->db->select('leaves.leave_id,leaves.to_date1,leaves.form_date1,leaves.create_at,leaves.status,leaves.days')->from('leaves');
		$this->db->where('leaves.emp_id', $emp_id);
		$this->db->where('leaves.leavetype', 2);
		return $this->db->get()->result_array();
	}
	public function get_casual_leave_count($emp_id){
		$this->db->select('SUM(days) AS casual_count')->from('leaves');
		$this->db->where('leaves.emp_id', $emp_id);
		$this->db->where('leaves.leavetype', 2);
		return $this->db->get()->row_array();
	}
	public function get_paid_leave_count($emp_id){
		$this->db->select('SUM(days) AS paid_count')->from('leaves');
		$this->db->where('leaves.emp_id', $emp_id);
		$this->db->where('leaves.leavetype', 3);
		return $this->db->get()->row_array();
	}
	public function get_paid_leaves($emp_id){
		$this->db->select('leaves.leave_id,leaves.to_date1,leaves.form_date1,leaves.create_at,leaves.status,leaves.days')->from('leaves');
		$this->db->where('leaves.emp_id', $emp_id);
		$this->db->where('leaves.leavetype', 3);
		return $this->db->get()->result_array();
	}
	
	/* bills*/
	public function save_project_bills($data){
		$this->db->insert('bills', $data);
		return $insert_id = $this->db->insert_id(); 
	}
	public function get_billing_details($bid){
		$this->db->select('*')->from('bills');
		$this->db->where('bills.b_id', $bid);
		return $this->db->get()->row_array();
	}
	public function get_invoice_list($id){
		$this->db->select('*')->from('bills');
		$this->db->where('bills.created_by', $id);
		$this->db->order_by('bills.b_id', 'DESC');
		return $this->db->get()->result_array();
	}
	public function get_all_invoice_list(){
		$this->db->select('*')->from('bills');
		//$this->db->where('bills.created_by', $id);
		$this->db->order_by('bills.b_id', 'DESC');
		return $this->db->get()->result_array();
	}
	public function update_project_bills($bid,$data){
		$this->db->where('b_id', $bid);
		return $this->db->update('bills', $data);
	}
	
	/* bills*/
	
	/* task export*/
	public  function get_export_task_details($emp_id){
		$this->db->select('comment,reportfile,create_date,date')->from('work_sheet');
		$this->db->where('work_sheet.emp_id', $emp_id);
		$this->db->order_by('work_sheet.date', 'desc');
		return $this->db->get()->result_array();
	}
	public  function get_employee_name($emp_id){
		$this->db->select('emp_id,emp_name')->from('employee');
		$this->db->where('employee.emp_id', $emp_id);
		return $this->db->get()->row_array();
	}
	public function reports_list_data(){
		$this->db->select('sales_details.*')->from('sales_details');		
		$this->db->where('status', 1);
        return $this->db->get()->result_array();	
	}	

	public  function get_employee_working_hours($date){
		$this->db->select('login_report.*,employee.emp_name')->from('login_report');
		$this->db->join('employee', 'employee.emp_id = login_report.emp_id', 'left');		
		//$this->db->where('create_at', $date);
		$this->db->where('MONTH(login_report.create_at)',$date);
		//$this->db->where('YEAR(CURRENT_DATE - INTERVAL 1 MONTH)');
        return $this->db->get()->result_array();	
	}


}