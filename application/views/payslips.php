 
<div class="container-sty-adm ">
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
					<?php  for ($i = 1; $i < 2; $i++) { ?>
					<option value="<?php echo date('F', strtotime("-$i month")); ?>"><?php echo date('F', strtotime("-$i month")); ?></option>
					<?php } ?>
					<option value="<?php  echo date('F'); ?>"><?php  echo date('F'); ?></option>
				</select>
				
			</div>
			
			<div class="form-group col-md-6">
				<label for="exampleInputEmail">Days worked</label>
				<input type="text" class="form-control"  id="workeddays" name="workeddays" required="true" placeholder="Working Days" value="">
			</div>
			<div class="form-group col-md-6">
				<label for="exampleInputEmail">Working Days</label>
				<input type="text" class="form-control"  id="workingdays" name="workingdays" required="true" placeholder="Working Days" value="">
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