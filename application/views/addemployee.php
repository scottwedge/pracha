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
		  				<label for="exampleInputUsername">Name</label>
				    	<input type="text" class="form-control" name="name" id="name" placeholder=" Enter Name" required="true" value="" >
			  		</div>
			  		<div class="form-group col-md-6">
				    	<label for="exampleInputEmail">Designation</label>
				    	<input type="text" class="form-control" readonly="true" id="designation" required="true" name="designation" placeholder=" Enter Designation" value="">
				  	</div>	
				  	<div class="form-group col-md-6">
				    	<label for="telephone">Responsibilites</label>
				    	<input type="text" class="form-control" readonly="true" required="true" name="responsibilites" id="responsibilites"  placeholder=" Enter Responsibilites" value="">
		  			</div>
		  			<div class="form-group col-md-6">
				    	<label for="telephone">Mobile No</label>
				    	<input type="text" class="form-control" name="mobile" required="true" id="mobile" placeholder="Mobile No" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Alternate Mobile No</label>
				    	<input type="text" class="form-control" name="altermobile" id="altermobile" value="" placeholder="Alternate Mobile No">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">DOB</label>
				    	<input type="text" class="form-control" name="dob" id="dob" placeholder="Date of birth" value="">
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
	
	
