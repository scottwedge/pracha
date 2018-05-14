<head>
	<link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/datepicker.js"></script>
</head>
<style>
.accordion .card .card-header a:not(.collapsed) .rotate-icon {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
	margin-bottom:25px;
	
}
</style>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end ">
		<div class="col-md-9   mar_t20 ">
			<div class="row   ">
			<div class="col-md-12   ">
				<!--Accordion wrapper-->
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card" style="border:1px solid #ddd;">

        <!-- Card header -->
        <div class="card-header bg-dark white-text" >
			<div class="row">
			<div class="col">
				Leave Types
			</div>
			<div class="col">
				Carry Forward
			</div>
			<div class="col">
				Accrued till date
			</div>
			<div class="col">
				Other Credits
			</div>
			<div class="col">
				Total
			</div>
			<div class="col">
				leave Taken
			</div>
			<div class="col">
				Lapsed /Encashed Leave
			</div>
			<div class="col">
				Leave Balance
			</div>
			</div>
        </div> 
		<div class="card-header" role="tab" id="headingOne">
            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			<div class="row">
			<div class="col">
				<strong>Maternity Leave</strong>
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00 
			</div> <i class="fa fa-angle-down rotate-icon"></i>
			</div>
            
				  
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx" >
            <div class="card-body">
			
                <table class="table table-bordered">
				<thead>
				  <tr>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Applied</th>
					<th>No.of Days</th>
					<th>Status</th>
					<th>Lapsed / Encashed</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>25/02/2018</td>
					<td>28/02/2018</td>
					<td>22/02/2018</td>
					<td>3</td>
					<td>Acceptance</td>
					<td>0.00</td>
				  </tr>
				 
				</tbody>
			  </table>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card" style="border:1px solid #ddd;">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingTwo">
            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="row">
			<div class="col">
				<strong>Compensatory OFF</strong>
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00 
			</div> <i class="fa fa-angle-down rotate-icon"></i>
			</div>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx" >
            <div class="card-body">
               <table class="table table-bordered">
				<thead>
				  <tr>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Applied</th>
					<th>No.of Days</th>
					<th>Status</th>
					<th>Lapsed / Encashed</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>25/02/2018</td>
					<td>28/02/2018</td>
					<td>22/02/2018</td>
					<td>3</td>
					<td>Acceptance</td>
					<td>0.00</td>
				  </tr>
				 
				</tbody>
			  </table>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card" style="border:1px solid #ddd;">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingThree">
            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
               <div class="row">
			<div class="col">
				<strong>Geaneral Leave</strong>
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				0.00
			</div>
			<div class="col">
				180.00 
			</div> <i class="fa fa-angle-down rotate-icon"></i>
			</div>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
            <div class="card-body">
                <table class="table table-bordered">
				<thead>
				  <tr>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Applied</th>
					<th>No.of Days</th>
					<th>Status</th>
					<th>Lapsed / Encashed</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>25/02/2018</td>
					<td>28/02/2018</td>
					<td>22/02/2018</td>
					<td>3</td>
					<td>Acceptance</td>
					<td>0.00</td>
				  </tr>
				 
				</tbody>
			  </table>
            </div>
        </div>
    </div>
    <!-- Accordion card -->
</div>
</div>
<!--/.Accordion wrapper-->
                
			</div>
			<div id="datpic" style="display:none;">
			<div class="row justify-content-md-center ">
				<h3 >Select your leave Day</h3>
				
			</div>
			<hr>
			<div class="clearfix">&nbsp;</div>
			<form action="<?php echo base_url('employee/leavepost');?>" method="post">
			<div class="row justify-content-md-center">
				<?php if($userdetails['role']!=3){ ?>
				<input type="hidden" name="type" value="1">
				<div class="col-4">
				<div class="md-form">
					<input placeholder="Selected date" name="fromdate" type="text" id="date-picker-example" class="form-control datepicker">
					<label for="date-picker-example">Leave start</label>
				</div>
				</div>
				<div class="col-4">
				<div class="md-form">
					<input placeholder="Selected date"  name="todate" type="text" id="date-picker-example" class="form-control datepicker">
					<label for="date-picker-example">Ending start</label>
				</div>
				</div>
				<div class="col-4">
				<div class="md-form">
					<select class="mdb-select" id="emp_id" name="emp_id" required>
						<option value="" disabled selected>Choose Employee</option>
						<?php foreach($emp_list as $lis){ ?>
						<option value="<?php echo $lis['emp_id']; ?>"><?php echo $lis['emp_name']; ?></option>
						<?php } ?>
					</select>
				</div>
				</div>
				<?php }else{ ?>
				<div class="col-6">
				<div class="md-form">
					<input placeholder="Selected date" name="fromdate" type="text" id="date-picker-example" class="form-control datepicker">
					<label for="date-picker-example">Leave start</label>
				</div>
				</div>
				<div class="col-6">
				<div class="md-form">
					<input placeholder="Selected date"  name="todate" type="text" id="date-picker-example" class="form-control datepicker">
					<label for="date-picker-example">Ending start</label>
				</div>
				</div>
				<?php } ?>
				<div class="col-6 ">
				<!--Panel-->
				<div class="card">
					<div class="card-header bg-warning lighten-1 white-text">
						Leave Type
					</div>
					<div class="card-body">
							<div class="form-group">
						<input name="leavetype" type="radio" id="radio1" value="1">
						<label for="radio1">Sick Leave</label>
					</div>

					<div class="form-group">
						<input name="leavetype" type="radio" id="radio2" value="2">
						<label for="radio2">Special Leave</label>
					</div>

					<div class="form-group">
						<input name="leavetype" type="radio" id="radio3" value="3">
						<label for="radio3">Paid Leave</label>
					</div>
					</div>
				</div>
				</div>
				<div class="col-6 ">
				<!--Panel-->
				<div class="card">
					<div class="card-header bg-warning lighten-1 white-text">
						Comment:
					</div>
					<div class="card-body">
						<div class="form-group">
				
					  <textarea style="height:150px;" class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>
					</div>
				</div>
				</div>
			
				
					<button type="submit" class="btn btn-info btn-rounded mar-t30">Apply</button>
				
				
			</div>
			</form>
			</div>
			<div class="clearfix">&nbsp;</div>
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
		<button id="datpicbtn" type="button" class="btn btn-info btn-rounded pull-right">Add</button>
		
		<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
		
			<thead><tr>
					<th>Name</th>
					<th>From Date</th>
					<th>To Date</th>
					<th>Leave Type</th>
					<th>Region</th>
					<th>Status</th>
					<th>Created By</th>
					<?php if($userdetails['role']!=3){ ?>
					<th>Action</th>
					<?php } ?>
				
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Name</th>
					<th>From Date</th>
					<th>To Date</th>
					<th>Leave Type</th>
					<th>Region</th>
					<th>Status</th>
					<th>Created By</th>
					<?php if($userdetails['role']!=3){ ?>
					<th>Action</th>
					<?php } ?>
					
				</tr>
			</tfoot>
			<tbody>
			<?php foreach ($leaves_list as $list){ ?>
				<tr>
					<td><?php echo $list['emp_name']; ?></td>
					<td><?php echo $list['form_date']; ?></td>
					<td><?php echo $list['to_date']; ?></td>
					<td>
					  <?php if($list['leavetype']==1){
						echo "Sick leave";
						}else if($list['leavetype']==2){
							echo "Special leave";
						}else if($list['leavetype']==3){
							echo "Paid leave";
						}	
						?>
					</td>
					<td><?php echo $list['region']; ?></td>
					<?php if($userdetails['role']==3){ ?>
					<td>
					<?php if($list['status']==1){ echo "Pending";}else if($list['status']==2){ echo "Approved"; }else if($list['status']==3){ echo "Rejected";} ?></td>
					<?php }else{ ?>
						<td><?php if($list['status']==1){ echo "Request";}else if($list['status']==2){ echo "Approved"; }else if($list['status']==3){ echo "Rejected";} ?></td>
					<?php } ?>
					<td><?php echo $list['create_name']; ?></td>
					<?php if($userdetails['role']!=3){ ?>
					<th><a class="text-warning" href="<?php echo base_url('employee/leavestatus/'.base64_encode($list['emp_id']).'/'.base64_encode(2).'/'.base64_encode($list['leave_id'])); ?>">Approve</a> | <a class="text-warning" href="<?php echo base_url('employee/leavestatus/'.base64_encode($list['emp_id']).'/'.base64_encode(3).'/'.base64_encode($list['leave_id'])); ?>">Reject</a></th>
					<?php } ?>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
						
					 <div class="clearfix">&nbsp;</div>
				</div>
			</div>
</div>
	<script>
	$(document).ready(function() {
    $('#example').DataTable({
        "order": [[ 1, "asc" ]]
    });
    $('.dataTables_wrapper').find('label').each(function() {
      $(this).parent().append($(this).children());
    });
    $('select').addClass('mdb-select');
    $('.mdb-select').material_select();
});
      
	
      $('.datepicker').pickadate({
		   min: new Date('Y-m-d'),
		   formate:'Y-m-d'
	  });
	 
	 $("#datpicbtn").click(function(){
    $("#datpic").toggle();
	
});
 $(document).ready(function(){
	var cnt=2;
    $("#datpicbtn").click(function(){
        $("#datpicbtns").slideToggle();
		if((cnt % 2) === 0){
		$("#datpicbtn").text("Remove");
		}else{
			$("#datpicbtn").text("Add");
		}
		cnt++;
    });
}); 
	</script>
	
