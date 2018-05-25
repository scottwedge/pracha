<?php //echo '<pre>';print_r($userdetails);exit;?>
<div class="col-md-3 bg-dark col-xs-12 pos-fix sm-hide" style="width:20%;">
	<ul class="side-bar">
		<a href="<?php echo base_url('employee/profile'); ?>"><li> Employee Profile</li></a>
		<?php if($userdetails['role']==1 || $userdetails['role']==2){ ?>
		<a href="<?php echo base_url('employee/reportlist'); ?>"><li>Daily WorkMangagment  </li></a>
		<a href="<?php echo base_url('employee/employeelist'); ?>"><li>Employee List</li></a>
		<?php }else{ ?>
		<a href="<?php echo base_url('employee/report'); ?>"><li>Daily WorkMangagment </li></a>
		<?php } ?>
		<?php if($userdetails['role']==1 || $userdetails['role']==2){ ?>
		<a href="<?php echo base_url('employee/leaveslist'); ?>"><li>Leave Management</li></a>
		<a href="<?php echo base_url('employee/holidays_list'); ?>"><li>Holidays List</li></a>
		<a href="<?php echo base_url('employee/payslips'); ?>"><li>Pay Slips</li></a>
		<a href="<?php echo base_url('employee/suggestion'); ?>"><li>Complaint/ Suggestion Box</li></a>
		<a href="<?php echo base_url('employee/task'); ?>"><li>Task Mangagment </li></a>
		<a href="<?php echo base_url('employee/last_month_login_report'); ?>"><li>Last Month Login A & Logout TIme Sheet</li></a>
		<a href="<?php echo base_url('payment/bill_list'); ?>"><li>Invoice List</li></a>
		<?php }else{  ?>
		<a href="<?php echo base_url('employee/leaves'); ?>"><li>Leave Management</li></a>
		<a href="<?php echo base_url('employee/holidays_list'); ?>"><li>Holidays List</li></a>
		<a href="<?php echo base_url('employee/payslip'); ?>"><li>Pay Slips</li></a>
		<a href="<?php echo base_url('employee/suggestion'); ?>"><li>Complaint/ Suggestion Box</li></a>
		<a href="<?php echo base_url('employee/task'); ?>"><li>Task Mangagment </li></a>
		<?php } ?>
		<?php if($userdetails['role']==4){ ?>
			<a href="<?php echo base_url('payment/billing'); ?>"><li>Billing</li></a>
			<a href="<?php echo base_url('payment/bill_list'); ?>"><li>Invoice List</li></a>
		<?php } ?>
	</ul>
</div>

