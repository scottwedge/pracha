
<?php //echo '<pre>';print_r($userdetails);exit; ?>
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
				<?php if($userdetails['emp_profilepic']!=''){ ?>
				        <img src="<?php echo base_url('assets/emp_pics/'.$userdetails['emp_profilepic']); ?>" class="rounded-circle img-responsive">
                <?php }else{ ?>
				        <img src="<?php echo base_url('assets/emp_pics/default.jpg'); ?>" class="rounded-circle img-responsive">
				<?php } ?>
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
				<td><?php echo isset($userdetails['responsibilities'])?$userdetails['responsibilities']:''; ?></td>
			  </tr> 
			  <!--
				<?php if($userdetails['role']==3){ ?>			  
			  <tr>
				<th><strong>Salary</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['salary'])?$userdetails['salary']:''; ?></td>
			  </tr> 
				<?php } ?>
			  <tr>
			  -->
				<th><strong>Mobile Number</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_mobile'])?$userdetails['emp_mobile']:''; ?></td>
			  </tr>
			  <tr>
				<th><strong>Alternate Mobile Number</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_altermobile'])?$userdetails['emp_altermobile']:''; ?></td>
			  </tr>
			  <tr>
				<th><strong>DOB</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_dob'])?$userdetails['emp_dob']:''; ?></td>
			  </tr>
			  <tr>
				<th><strong>DOJ</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_doj'])?$userdetails['emp_doj']:''; ?></td>
			  </tr>
			  <tr>
				<th><strong>Residential Adddress</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_resaddress'])?$userdetails['emp_resaddress']:''; ?></td>
			  </tr> 
			  <tr>
				<th><strong>Permanent Address</strong></th>
				<td>:</td>
				<td><?php echo isset($userdetails['emp_peraddress'])?$userdetails['emp_peraddress']:''; ?></td>
			  </tr>
			  <tr>
				<th><strong>Adhar card</strong></th>
				<td>:</td>
				<td class="adhar-img">
				<?php if($userdetails['aadharcard']!=''){ ?>
				<img src="<?php echo base_url('assets/documents/'.$userdetails['aadharcard']); ?>">
				<?php } ?>
				&nbsp; <?php echo isset($userdetails['aadharcardno'])?$userdetails['aadharcardno']:''; ?>
				</td>
				
			  </tr>
			  <tr>
				<th><strong>Pan card</strong></th>
				<td>:</td>
				<td class="adhar-img">
				<?php if($userdetails['pancard']!=''){ ?>
				<img src="<?php echo base_url('assets/documents/'.$userdetails['pancard']); ?>">
				<?php } ?>
				&nbsp; <?php echo isset($userdetails['pancardno'])?$userdetails['pancardno']:''; ?>
				</td>
				</tr>
			  <tr>
				<th><strong>Other KYC documents</strong></th>
				<td>:</td>
				<td class="adhar-img">
				<?php if($userdetails['otherkye']!=''){ ?>
				<img src="<?php echo base_url('assets/documents/'.$userdetails['otherkye']); ?>">
				<?php } ?>
				</td>		
				</tr>
			</tbody>
         </table>
		</div>
		</div>
	
	</div>
	</div>
	</div>
	
	
