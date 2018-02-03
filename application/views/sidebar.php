<?php //echo '<pre>';print_r($userdetails);exit;?>
<div class="col-md-3 bg-dark col-xs-12 pos-fix sm-hide">
	<ul class="side-bar">
		<a href="<?php echo base_url('employee/profile'); ?>"><li> Employee Profile</li></a>
		<?php if($userdetails['role']==1 || $userdetails['role']==2){ ?>
		<a href="<?php echo base_url('employee/reportlist'); ?>"><li>Task report list </li></a>
		<a href="<?php echo base_url('employee/employeelist'); ?>"><li>Employee List</li></a>
		<?php }else{ ?>
		<a href="<?php echo base_url('employee/report'); ?>"><li>Task Mangagment </li></a>
		<?php } ?>
		<?php if($userdetails['role']==1 || $userdetails['role']==2){ ?>
		<a href="<?php echo base_url('employee/leaveslist'); ?>"><li>Leaves</li></a>
		<?php }else{  ?>
		<a href="<?php echo base_url('employee/leaves'); ?>"><li>Leaves</li></a>
		<?php } ?>
		<a href="#"><li>User Profile</li></a>
		<a href="#"><li>User Profile</li></a>
		<a href="#"><li>User Profile</li></a>
		<a href="#"><li>User Profile</li></a>
		<a href="#"><li>User Profile</li></a>
		<a href="#"><li>User Profile</li></a>

	
	</ul>
</div>

