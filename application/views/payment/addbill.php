<div class="container-sty-adm ">
<div class=" row justify-content-md-end">
	<div class="col-md-9   card">
			<div class="row">
		<form action="<?php echo base_url('payment/addpayment');?>" method="post" enctype="multipart/form-data">
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
						<h3 class=" text-center"> Add Bill</h3>
						<hr>
				</div>
		  			
					<div class="form-group col-md-6">
		  				<label for="exampleInputUsername">Name</label>
				    	<input type="text" class="form-control" name="name" id="name" placeholder=" Enter Name" required="true" value="" >
			  		</div>
			  		<div class="form-group col-md-6">
				    	<label for="telephone">Email Address</label>
				    	<input type="email" class="form-control" required="true" name="email" required="true" id="email" placeholder="Email Address" value="">
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
				    	<label for="telephone">Project</label>
				    	<input type="text" class="form-control" name="project" id="project" required="true" placeholder="Project" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Amount</label>
				    	<input type="text" class="form-control" name="amount" id="amount" required="true" placeholder="Amount" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Pay</label>
				    	<input type="text" class="form-control" name="amount_pay" id="amount_pay" required="true" placeholder="Amount Pay" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Due</label>
				    	<input type="text" class="form-control" name="amount_due" id="amount_due" required="true" placeholder="Amount Due" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Others</label>
				    	<input type="text" class="form-control" name="others" id="others" required="true" placeholder="Others" value="">
		  			</div>
					<div class="form-group col-md-6">
				    	<label for="telephone">Payment Mode</label>
						<select class="mdb-select" id="payment_type" name="payment_type" required>
							<option value="" disabled selected>Choose type</option>
							<option value="1">Online bank</option>
							<option value="2" >Cash</option>
							<option value="3" >Other</option>
						</select>
					</div>
					<div class="form-group col-md-12">
				    	<label for="telephone">Address</label>
				    	<input type="text" class="form-control" name="adress" id="adress" required="true" placeholder="Address" value="">
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
	
