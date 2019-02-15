<div class="container-sty-adm ">
<div class=" row justify-content-md-end">
	<div class="col-md-9   card">
			<div class="row">
		<form action="<?php echo base_url('employee/allupdate');?>" method="post" enctype="multipart/form-data">
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
						<h3 class=" text-center"> Edit <?php echo isset($userdetails['emp_name'])?$userdetails['emp_name']:''; ?> Profile</h3>
						<hr>
				</div>
				<input type="hidden" class="form-control" name="emp_id" id="emp_id" value="<?php echo isset($userdetails['emp_id'])?$userdetails['emp_id']:''; ?>">
				<input type="hidden" class="form-control" name="role_type" id="role_type" value="<?php echo isset($role_type)?$role_type:''; ?>">
		  			
					<div class="form-group col-md-6">
		  				<label for="exampleInputUsername">Name</label>
				    	<input type="text" class="form-control" name="name" id="name" required="true" placeholder=" Enter Name" value="<?php echo isset($userdetails['emp_name'])?$userdetails['emp_name']:''; ?>" required>
			  		</div>
			  		<div class="form-group col-md-6">
				    	<label for="exampleInputEmail">Designation</label>
				    	<input type="text" class="form-control"  id="designation" name="designation" required="true" placeholder=" Enter Designation" value="<?php echo isset($userdetails['emp_role'])?$userdetails['emp_role']:''; ?>" required>
				  	</div>
					<?php if($roleid==1 || $roleid==2){ ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">Responsibilites</label>
				    	<input type="text" class="form-control"  name="responsibilites" id="responsibilites" required="true"  placeholder=" Enter Responsibilites" value="<?php echo isset($userdetails['emp_role'])?$userdetails['emp_role']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Basic Salary</label>
				    	<input type="text" class="form-control"  name="basicsalary" id="basicsalary" required="true"  placeholder="Basic Salary" value="<?php echo isset($userdetails['basicsalary'])?$userdetails['basicsalary']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">HRA</label>
				    	<input type="text" class="form-control"  name="hra" id="hra"  placeholder="HRA" required="true" value="<?php echo isset($userdetails['hra'])?$userdetails['hra']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Special Allowance</label>
				    	<input type="text" class="form-control"  name="specialallowance" id="specialallowance" required="true"  placeholder=" Special Allowance" value="<?php echo isset($userdetails['specialallowance'])?$userdetails['specialallowance']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Conveyance</label>
				    	<input type="text" class="form-control"  name="conveyance" id="conveyance" required="true"  placeholder=" Conveyance" value="<?php echo isset($userdetails['conveyance'])?$userdetails['conveyance']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Medical Reimbursement</label>
				    	<input type="text" class="form-control"  name="medicalreimbursement" id="medicalreimbursement" required="true"  placeholder=" Medical Reimbursement" value="<?php echo isset($userdetails['medicalreimbursement'])?$userdetails['medicalreimbursement']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">PF Number</label>
				    	<input type="text" class="form-control" name="pfnumber" id="pfnumber" required="true" placeholder="PF Number" value="<?php echo isset($userdetails['pfnumber'])?$userdetails['pfnumber']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">PF Amount</label>
				    	<input type="text" class="form-control" name="pfamount" id="pfamount" required="true" placeholder="PF Amount" value="<?php echo isset($userdetails['pfamount'])?$userdetails['pfamount']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">PT</label>
				    	<input type="text" class="form-control" name="pt" id="pt" required="true" placeholder="PT" value="<?php echo isset($userdetails['pt'])?$userdetails['pt']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">ESI</label>
				    	<input type="text" class="form-control" name="esi" id="esi" required="true" placeholder="ESI" value="<?php echo isset($userdetails['esi'])?$userdetails['esi']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Others</label>
				    	<input type="text" class="form-control" name="others" id="others" required="true" placeholder="Others" value="<?php echo isset($userdetails['others'])?$userdetails['others']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Advance</label>
				    	<input type="text" class="form-control" name="advance" id="advance" required="true" placeholder="Advance" value="<?php echo isset($userdetails['advance'])?$userdetails['advance']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Bank Name</label>
				    	<input type="text" class="form-control" name="bankname" id="bankname" required="true" placeholder="Bank Name" value="<?php echo isset($userdetails['bankname'])?$userdetails['bankname']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Bank Account No</label>
				    	<input type="text" class="form-control" name="bankaccountnumber" id="bankaccountnumber" required="true" placeholder="Bank Account No" value="<?php echo isset($userdetails['bankaccountnumber'])?$userdetails['bankaccountnumber']:''; ?>" required>
		  			</div>
					
					<?php }else{ ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">Basic Salary</label>
				    	<input type="text" class="form-control"  name="basicsalary" id="basicsalary" readonly="true"  placeholder="Basic Salary" value="<?php echo isset($userdetails['basicsalary'])?$userdetails['basicsalary']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">HRA</label>
				    	<input type="text" class="form-control"  name="hra" id="hra"  placeholder="HRA" readonly="true" value="<?php echo isset($userdetails['hra'])?$userdetails['hra']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Special Allowance</label>
				    	<input type="text" class="form-control"  name="specialallowance" id="specialallowance" readonly="true"  placeholder=" Special Allowance" value="<?php echo isset($userdetails['specialallowance'])?$userdetails['specialallowance']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Conveyance</label>
				    	<input type="text" class="form-control"  name="conveyance" id="conveyance" readonly="true"  placeholder=" Conveyance" value="<?php echo isset($userdetails['conveyance'])?$userdetails['conveyance']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Medical Reimbursement</label>
				    	<input type="text" class="form-control"  name="medicalreimbursement" id="medicalreimbursement" readonly="true"  placeholder=" Medical Reimbursement" value="<?php echo isset($userdetails['medicalreimbursement'])?$userdetails['medicalreimbursement']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">PF Number</label>
				    	<input type="text" class="form-control" name="pfnumber" id="pfnumber" readonly="true"  placeholder="PF Number" value="<?php echo isset($userdetails['pfnumber'])?$userdetails['pfnumber']:''; ?>" required>
		  			</div>
					
		  			<div class="form-group col-md-6">
				    	<label for="telephone">PF Amount</label>
				    	<input type="text" class="form-control" name="pfamount" id="pfamount" readonly="true" placeholder="PF Amount" value="<?php echo isset($userdetails['pfamount'])?$userdetails['pfamount']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">PT</label>
				    	<input type="text" class="form-control" name="pt" id="pt" readonly="true" placeholder="PT" value="<?php echo isset($userdetails['pt'])?$userdetails['pt']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">ESI</label>
				    	<input type="text" class="form-control" name="esi" id="esi" readonly="true" placeholder="ESI" value="<?php echo isset($userdetails['esi'])?$userdetails['esi']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Others</label>
				    	<input type="text" class="form-control" name="others" id="others" readonly="true" placeholder="Others" value="<?php echo isset($userdetails['others'])?$userdetails['others']:''; ?>" required>
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Advance</label>
				    	<input type="text" class="form-control" name="advance" id="advance" readonly="true" placeholder="Advance" value="<?php echo isset($userdetails['advance'])?$userdetails['advance']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Bank Name</label>
				    	<input type="text" class="form-control" name="bankname" id="bankname" readonly="true"  placeholder="Bank Name" value="<?php echo isset($userdetails['bankname'])?$userdetails['bankname']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Bank Account No</label>
				    	<input type="text" class="form-control" name="bankaccountnumber" readonly="true" id="bankaccountnumber"  placeholder="Bank Account No" value="<?php echo isset($userdetails['bankaccountnumber'])?$userdetails['bankaccountnumber']:''; ?>" required>
		  			</div>
					<?php } ?>
					
					<?php if($roleid==1 || $roleid==2){ ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">Salary</label>
				    	<input type="text" class="form-control" name="salary" id="salary" placeholder="Salary" required="true" value="<?php echo isset($userdetails['salary'])?$userdetails['salary']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Salary Increment Possibility</label>
				    	<input type="text" class="form-control" name="salary_increment" id="salary_increment" placeholder="Salary Increment Possibility"  value="<?php echo isset($userdetails['salary_increment'])?$userdetails['salary_increment']:''; ?>" required>
		  			</div>
					<?php }else{ ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">DOB</label>
				    	<input type="text" class="form-control" name="dob" id="dob" placeholder="Date of birth" value="<?php echo isset($userdetails['emp_dob'])?$userdetails['emp_dob']:''; ?>" required>
		  			</div>
					<?php } ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">Mobile No</label>
				    	<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No" value="<?php echo isset($userdetails['emp_mobile'])?$userdetails['emp_mobile']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Alternate Mobile No</label>
				    	<input type="text" class="form-control" name="altermobile" id="altermobile" value="<?php echo isset($userdetails['emp_altermobile'])?$userdetails['emp_altermobile']:''; ?>" placeholder="Alternate Mobile No" required>
		  			</div>
					
					<div class="form-group col-md-6">
				    	<label for="telephone">Adhar Card Number</label>
				    	<input type="text" class="form-control" name="aadharnumber" id="aadharnumber" placeholder="Aadhar Card number" value="<?php echo isset($userdetails['aadharcardno'])?$userdetails['aadharcardno']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Adhar card</label>
				    	<input type="file" class="form-control" id="aadharcard" name="aadharcard" placeholder="Aadhar Card"  value="<?php echo isset($userdetails['aadharcard'])?$userdetails['aadharcard']:''; ?>" >
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Pan Card Number</label>
				    	<input type="text" class="form-control" name="pannumber" id="pannumber" placeholder="Pan Card number" value="<?php echo isset($userdetails['pancardno'])?$userdetails['pancardno']:''; ?>" required>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Pan card</label>
				    	<input type="file" class="form-control" id="pancard" name="pancard" placeholder="Pancard" value="<?php echo isset($userdetails['pancard'])?$userdetails['pancard']:''; ?>" >
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Other KYC documents</label>
				    	<input type="file" class="form-control" id="kyc" name="kyc" placeholder="Other KYC documents" value="<?php echo isset($userdetails['otherkye'])?$userdetails['otherkye']:''; ?>" >
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Profile Pic</label>
				    	<input type="file" class="form-control" id="profilepic" name="profilepic" placeholder="Other KYC documents" value="<?php echo isset($userdetails['otherkye'])?$userdetails['otherkye']:''; ?>" >
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Residential Address</label>
				    	<textarea class="form-control" rows="5" id="resaddress" name="resaddress" required><?php echo isset($userdetails['emp_resaddress'])?$userdetails['emp_resaddress']:''; ?></textarea>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Permanent Address</label>
				    	<textarea class="form-control" rows="5" id="peraddress" name="peraddress" required><?php echo isset($userdetails['emp_peraddress'])?$userdetails['emp_peraddress']:''; ?></textarea>
		  			</div>
		  		</div>
				<button type="submit" class="btn btn-dark">update</button>
	  			
	  			
	  		</div>
	  		
		</form>
	</div>
	
	</div>
</div>
</div>
	
	
