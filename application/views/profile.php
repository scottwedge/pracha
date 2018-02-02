
<?php echo '<pre>';print_r($userdetails);exit; ?>
<div class="container-sty-adm ">
<div class=" row justify-content-md-end">
	<div class="col-md-9   card">
		
             <div class="row">
    
        <!--Grid column-->
        <div class="col-lg-12 col-md-12 mb-r">
    
            <!--Card-->
            <div class="card testimonial-card">
    
                <!--Background color-->
                <div class="card-up warning-color"></div>
    
                <!--Avatar-->
                <div class="avatar">
                    <img src="https://lh3.googleusercontent.com/-5ZIgyZg9UwQ/AAAAAAAAAAI/AAAAAAAACe4/Lo7IJZ56_EY/s60-p-rw-no/photo.jpg" class="rounded-circle img-responsive">
                </div>
    
                <div class="card-body">
                    <!--Name-->
                    <h4 class="mt-1">
                        <strong><?php echo isset($userdetails['emp_name'])?$userdetails['emp_name']:''; ?></strong>
                    </h4>
                    <hr>
                    <!--Quotation-->
                    <p class="dark-grey-text"><?php echo isset($userdetails['emp_role'])?$userdetails['emp_role']:''; ?></p>
                </div>
    
            </div>
            <!--Card-->
    
        </div>
    </div>
			

        <div class="row justify-content-md-center">
		
	
        <div class="col-12">
		<div class="col text-center">
				<h3><?php echo isset($userdetails['emp_name'])?$userdetails['emp_name']:''; ?> Profile</h3>
			</div>
			<div class="col">
				<a href="<?php echo base_url('employee/edit'); ?>" class="btn btn-warning pull-right">Edit <i class="fa fa-pencil ml-1"></i></a >
			</div>
			
		</div>
        <div class="col-8">
		 <table class="table table-user-information">

			<tbody>
			  <tr>
				<th><strong>Name</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_name'])?$userdetails['emp_name']:''; ?></td>
			  </tr>
			  <tr>
				<th><strong>Designation</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_role'])?$userdetails['emp_role']:''; ?></td>
			  </tr> 
			  <tr>
				<th><strong>Responsibilities</strong></th>
				<td>:</td>
				<td>Programming</td>
			  </tr> 
			  <tr>
				<th><strong>Mobile Number</strong></th>
				<td>:</td>
				<td>Programming</td>
			  </tr>
			  <tr>
				<th><strong>Alternate Mobile Number</strong></th>
				<td>:</td>
				<td>Programming</td>
			  </tr>
			  <tr>
				<th><strong>Residential Adddress</strong></th>
				<td>:</td>
				<td>Programming</td>
			  </tr> 
			  <tr>
				<th><strong>Permanent Address</strong></th>
				<td>:</td>
				<td>Programming</td>
			  </tr>
			  <tr>
				<th><strong>Adhar card</strong></th>
				<td>:</td>
				<td class="adhar-img"><img src="http://aadharcard.net/wp-content/uploads/2017/05/aadhar-card-photo.jpg"> &nbsp; 615234669</td>
			  </tr>
			  <tr>
				<th><strong>Pan card</strong></th>
				<td>:</td>
				<td class="adhar-img"><img src="http://pancardoffice.com/wp-content/uploads/2014/11/pan-card-big-size-300x190.jpg"> &nbsp; 615234669</td>
			  </tr>
			  <tr>
				<th><strong>Other KYC documents</strong></th>
				<td>:</td>
				<td class="adhar-img"><img src="https://www.fincash.com/b/wp-content/uploads/2017/04/kyc-form-docs-1-1.png"> &nbsp; </td>
			  </tr>
			</tbody>
         </table>
		</div>
		</div>
	
	</div>
	</div>
	
	
