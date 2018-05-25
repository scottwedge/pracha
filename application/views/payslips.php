 
<div class="container-sty-adm ">
 <?php if($this->session->flashdata('success')): ?>
		<div class="alert alert-success">
		<strong><?php echo $this->session->flashdata('success'); ?></strong> 
		</div>

		<?php endif; ?>
		<?php if($this->session->flashdata('error')): ?>
		<div class="alert alert-warning">
		<strong><?php echo $this->session->flashdata('error'); ?></strong> 
		</div>
		<?php endif; ?>
<form action="<?php echo base_url('employee/payslippost'); ?>" method="post">
	<div class=" row justify-content-md-end" >
	 
		<div class="col-md-9  " style="margin-top:60px">
			<div class="row mtb-30">
			<div class="col-md-6">
				<select class="mdb-select" id="emp_id" name="emp_id" required="true">
					<option value="" disabled selected>Choose your Employee</option>
					<?php foreach($emp_details as $lis){ ?>
					<option value="<?php echo $lis['emp_id']; ?>"><?php echo $lis['emp_name']; ?></option>
					<?php } ?>
				</select>
				
			</div>
			<div class="col-md-6">
				<select class="mdb-select" id="month" name="month" required="true">
					<option value="" disabled selected>Choose your Month</option>
					<option value="January">January</option>
					<option value="February" >February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
					
				</select>
				
			</div>
			
			<div class="form-group col-md-6">
				<label for="exampleInputEmail">Company worked days</label>
				<input type="text" class="form-control"  id="workeddays" name="workeddays" required="true" placeholder="Company worked days" value="">
			</div>
			<div class="form-group col-md-6">
				<label for="exampleInputEmail">Employee Worked Days</label>
				<input type="text" class="form-control"  id="workingdays" name="workingdays" required="true" placeholder="Employee Worked Days" value="">
			</div>
			<div class="form-group col-md-6">
		  				<label for="exampleInputUsername">Gross Earnings</label>
				    	<input type="text" class="form-control" name="grossearning" id="grossearning" required="true" placeholder=" Gross Earnings" value="">
			 </div>
			<div class="form-group col-md-6">
		  				<label for="exampleInputUsername">Gross Deductions</label>
				    	<input type="text" class="form-control" name="grossdeduction" id="grossdeduction" required="true" placeholder="Gross Deductions" value="">
			 </div>
			<div class="col-md-4">
				<button type="submit" class="btn btn-default">send</button>
				
			</div>
			</div>
		</div>
	</div>
	</form>
</div>

	
<script>
	 $(document).ready(function() {
    $('.mdb-select').material_select();
  });
</script>