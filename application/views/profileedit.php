<div class="container-sty-adm ">
<div class=" row justify-content-md-end">
	<div class="col-md-9   card">
			<div class="row">
		<form action="<?php echo base_url('employee/update');?>" method="post" enctype="multipart/form-data">
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
				    	<input type="text" class="form-control" name="name" id="name" placeholder=" Enter Name" value="<?php echo isset($userdetails['emp_name'])?$userdetails['emp_name']:''; ?>">
			  		</div>
			  		<div class="form-group col-md-6">
				    	<label for="exampleInputEmail">Designation</label>
				    	<input type="text" class="form-control" readonly="true" id="designation" name="designation" placeholder=" Enter Designation" value="<?php echo isset($userdetails['emp_role'])?$userdetails['emp_role']:''; ?>">
				  	</div>
					<?php if($roleid==1 || $roleid==2){ ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">Responsibilites</label>
				    	<input type="text" class="form-control"  name="responsibilites" id="responsibilites"  placeholder=" Enter Responsibilites" value="<?php echo isset($userdetails['responsibilities'])?$userdetails['responsibilities']:''; ?>">
		  			</div>
					<?php } ?>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Mobile No</label>
				    	<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No" value="<?php echo isset($userdetails['emp_mobile'])?$userdetails['emp_mobile']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Alternate Mobile No</label>
				    	<input type="text" class="form-control" name="altermobile" id="altermobile" value="<?php echo isset($userdetails['emp_altermobile'])?$userdetails['emp_altermobile']:''; ?>" placeholder="Alternate Mobile No">
		  			</div>
					<?php if($roleid==1 || $roleid==2){ ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">Salary</label>
				    	<input type="text" class="form-control" name="salary" id="salary" placeholder="Salary" value="<?php echo isset($userdetails['salary'])?$userdetails['salary']:''; ?>">
		  			</div>
					<?php }else{ ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">DOB</label>
				    	<input type="text" class="form-control" name="dob" id="dob" placeholder="Date of birth" value="<?php echo isset($userdetails['emp_dob'])?$userdetails['emp_dob']:''; ?>">
		  			</div>
					<?php } ?>
					<div class="form-group col-md-6">
				    	<label for="telephone">Adhar Card Number</label>
				    	<input type="text" class="form-control" name="aadharnumber" id="aadharnumber" placeholder="Aadhar Card number" value="<?php echo isset($userdetails['aadharcardno'])?$userdetails['aadharcardno']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Adhar card</label>
				    	<input type="file" class="form-control" id="aadharcard" name="aadharcard" placeholder="Aadhar Card"  value="<?php echo isset($userdetails['aadharcard'])?$userdetails['aadharcard']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Pan Card Number</label>
				    	<input type="text" class="form-control" name="pannumber" id="pannumber" placeholder="Pan Card number" value="<?php echo isset($userdetails['pancardno'])?$userdetails['pancardno']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Pan card</label>
				    	<input type="file" class="form-control" id="pancard" name="pancard" placeholder="Pancard" value="<?php echo isset($userdetails['pancard'])?$userdetails['pancard']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Other KYC documents</label>
				    	<input type="file" class="form-control" id="kyc" name="kyc" placeholder="Other KYC documents" value="<?php echo isset($userdetails['otherkye'])?$userdetails['otherkye']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Profile Pic</label>
				    	<input type="file" class="form-control" id="profilepic" name="profilepic" placeholder="Other KYC documents" value="<?php echo isset($userdetails['otherkye'])?$userdetails['otherkye']:''; ?>">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Residential Address</label>
				    	<textarea class="form-control" rows="5" id="resaddress" name="resaddress"><?php echo isset($userdetails['emp_resaddress'])?$userdetails['emp_resaddress']:''; ?></textarea>
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Permanent Address</label>
				    	<textarea class="form-control" rows="5" id="peraddress" name="peraddress"><?php echo isset($userdetails['emp_peraddress'])?$userdetails['emp_peraddress']:''; ?></textarea>
		  			</div>
		  		</div>
				<button type="submit" class="btn btn-dark">update</button>
	  			
	  			
	  		</div>
	  		
		</form>
	</div>
	
	</div>
</div>
</div>
	
	
