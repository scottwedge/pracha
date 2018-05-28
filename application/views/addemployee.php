<div class="container-sty-adm ">
<div class=" row justify-content-md-end">
	<div class="col-md-9   card">
			<div class="row">
		<form action="<?php echo base_url('employee/addeployeepost');?>" method="post" enctype="multipart/form-data">
			<div class="col-md-12">
			    
			    <div class="row">
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
				<div class="col-md-12">
						<h3 class=" text-center"> Add Employee</h3>
						<hr>
				</div>
		  			<div class="form-group col-md-6">
		  				<label for="exampleInputUsername">Employee Role</label>
						<select class="mdb-select" id="role" name="role" required>
						<option value="" disabled selected>Choose Role</option>
						<option value="1">HR</option>
						<option value="3" >Employee</option>
						<option value="4" >Sales</option>
						</select>
			  		</div>
					<div class="form-group col-md-6">
		  				<label for="exampleInputUsername">Name</label>
				    	<input type="text" class="form-control" name="name" id="name" placeholder=" Enter Name" required="true" value="" >
			  		</div>
			  		<div class="form-group col-md-6">
				    	<label for="exampleInputEmail">Designation</label>
				    	<input type="text" class="form-control" id="designation" required="true" name="designation" placeholder=" Enter Designation" value="">
				  	</div>	
				  	<div class="form-group col-md-6">
				    	<label for="telephone">Responsibilites</label>
				    	<input type="text" class="form-control"  required="true" name="responsibilites" id="responsibilites"  placeholder=" Enter Responsibilites" value="">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Email Address</label>
				    	<input type="email" class="form-control" required="true" name="email" required="true" id="email" placeholder="Email Address" value="">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Password</label>
				    	<input type="password" class="form-control" required="true" minlength="6" name="password" required="true" id="password" placeholder="Password" value="">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Mobile No</label>
				    	<input type="text" class="form-control" name="mobile" required="true" id="mobile" placeholder="Mobile No" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Alternate Mobile No</label>
				    	<input type="text" class="form-control" name="altermobile" id="altermobile" required="true" value="" placeholder="Alternate Mobile No">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">DOJ</label>
				    	<input type="text" class="form-control" name="doj" id="doj" required="true" placeholder="Date of Join" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Basic Salary</label>
				    	<input type="text" class="form-control"  name="basicsalary" id="basicsalary" required="true"  placeholder="Basic Salary" value="<?php echo isset($userdetails['basicsalary'])?$userdetails['basicsalary']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">HRA</label>
				    	<input type="text" class="form-control"  name="hra" id="hra"  placeholder="HRA" required="true" value="<?php echo isset($userdetails['hra'])?$userdetails['hra']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Special Allowance</label>
				    	<input type="text" class="form-control"  name="specialallowance" id="specialallowance" required="true"  placeholder=" Special Allowance" value="<?php echo isset($userdetails['specialallowance'])?$userdetails['specialallowance']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Conveyance</label>
				    	<input type="text" class="form-control"  name="conveyance" id="conveyance" required="true"  placeholder=" Conveyance" value="<?php echo isset($userdetails['conveyance'])?$userdetails['conveyance']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Medical Reimbursement</label>
				    	<input type="text" class="form-control"  name="medicalreimbursement" id="medicalreimbursement" required="true"  placeholder=" Medical Reimbursement" value="<?php echo isset($userdetails['medicalreimbursement'])?$userdetails['medicalreimbursement']:''; ?>">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">PF Number</label>
				    	<input type="text" class="form-control" name="pfnumber" id="pfnumber" required="true"  placeholder="PF Number" value="<?php echo isset($userdetails['pfnumber'])?$userdetails['pfnumber']:''; ?>">
		  			</div>
					
		  			<div class="form-group col-md-6">
				    	<label for="telephone">PF Amount</label>
				    	<input type="text" class="form-control" name="pfamount" id="pfamount" required="true" placeholder="PF Amount" value="<?php echo isset($userdetails['pfamount'])?$userdetails['pfamount']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">PT</label>
				    	<input type="text" class="form-control" name="pt" id="pt" required="true" placeholder="PT" value="<?php echo isset($userdetails['pt'])?$userdetails['pt']:''; ?>">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">ESI</label>
				    	<input type="text" class="form-control" name="esi" id="esi" required="true" placeholder="ESI" value="<?php echo isset($userdetails['esi'])?$userdetails['esi']:''; ?>">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Others</label>
				    	<input type="text" class="form-control" name="others" id="others" required="true" placeholder="Others" value="<?php echo isset($userdetails['others'])?$userdetails['others']:''; ?>">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Advance</label>
				    	<input type="text" class="form-control" name="advance" id="advance" required="true" placeholder="Advance" value="<?php echo isset($userdetails['advance'])?$userdetails['advance']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Bank Name</label>
				    	<input type="text" class="form-control" name="bankname" id="bankname" required="true"   placeholder="Bank Name" value="<?php echo isset($userdetails['bankname'])?$userdetails['bankname']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Bank Account No</label>
				    	<input type="text" class="form-control" name="bankaccountnumber" required="true"  id="bankaccountnumber"  placeholder="Bank Account No" value="<?php echo isset($userdetails['bankaccountnumber'])?$userdetails['bankaccountnumber']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Salary</label>
				    	<input type="text" class="form-control" name="salary" id="salary" placeholder="Salary" value="<?php echo isset($userdetails['salary'])?$userdetails['salary']:''; ?>">
		  			</div>
					
					<div class="form-group col-md-6">
				    	<label for="telephone">Adhar Card Number</label>
				    	<input type="text" class="form-control" name="aadharnumber" id="aadharnumber" placeholder="Aadhar Card number" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Adhar card</label>
				    	<input type="file" class="form-control" id="aadharcard" name="aadharcard" placeholder="Aadhar Card"  value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Pan Card Number</label>
				    	<input type="text" class="form-control" name="pannumber" id="pannumber" placeholder="Pan Card number" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Pan card</label>
				    	<input type="file" class="form-control" id="pancard" name="pancard" placeholder="Pancard" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Other KYC documents</label>
				    	<input type="file" class="form-control" id="kyc" name="kyc" placeholder="Other KYC documents" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Profile Pic</label>
				    	<input type="file" class="form-control" id="profilepic" name="profilepic" placeholder="Other KYC documents" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Residential Address</label>
				    	<textarea class="form-control" rows="5" id="resaddress" name="resaddress"></textarea>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Permanent Address</label>
				    	<textarea class="form-control" rows="5" id="peraddress" name="peraddress"></textarea>
		  			</div>
		  		</div>
				<button type="submit" class="btn btn-dark">Add</button>
	  			
	  			
	  		</div>
	  		
		</form>
	</div>
	
	</div>
</div>
</div>
		<script>
	$(document).ready(function() {
  
    $('select').addClass('mdb-select');
    $('.mdb-select').material_select();
});
       
	</script>
	
