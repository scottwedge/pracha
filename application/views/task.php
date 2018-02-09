<head>
	<link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/datepicker.js"></script>
</head>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end ">
		<div class="col-md-9   mar_t20 ">
		
			<div id="datpic" style="display:none;">
			<div class="row justify-content-md-center ">
				<h3 >Monthly task List</h3>
				
			</div>
			<hr>
			<div class="clearfix">&nbsp;</div>
			<form action="<?php echo base_url('employee/taskpost');?>" method="post">
			<div class="row justify-content-md-center">
			
				<div class="col-4">
				<div class="md-form">
					<input placeholder="Selected date" name="fromdate" type="text" id="date-picker-example" class="form-control datepicker" required>
					<label for="date-picker-example">Start Date</label>
				</div>
				</div>
				<div class="col-4">
				<div class="md-form">
					<input placeholder="Selected date"  name="todate" type="text" id="date-picker-example" class="form-control datepicker" required>
					<label for="date-picker-example">Ending Date</label>
				</div>
				</div>
				<div class="col-4">
				<div class="md-form">
					<select class="mdb-select" id="task" name="task" required>
						<option value="" disabled selected>Choose Employee</option>
						<?php foreach($emp_details as $lis){ ?>
						<option value="<?php echo $lis['emp_id']; ?>"><?php echo $lis['emp_name']; ?></option>
						<?php } ?>
					</select>
				</div>
				</div>
				
				<div class="col-12 ">
				<!--Panel-->
				<div class="card">
					<div class="card-header bg-warning lighten-1 white-text">
						Comment:
					</div>
					<div class="card-body">
						<div class="form-group">
				
					  <textarea style="height:70px;" class="form-control" rows="2" id="comment" name="comment" required></textarea>
					</div>
					</div>
				</div>
				</div>
			
				
					<button type="submit" class="btn btn-info btn-rounded mar-t30">Add</button>
				
				
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
		<?php if($userdetails['role']!=3){ ?>
		<button id="datpicbtn" type="button" class="btn btn-info btn-rounded pull-right">Add</button>
		<?php } ?>
		<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
		
			<thead>
				<tr>
					<th>Assign To</th>
					<th>Assign By</th>
					<th>From Date</th>
					<th>To Date</th>
					<th>Region</th>
					<th>Status</th>
					<th>Action</th>
				
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Assign To</th>
					<th>Assign By</th>
					<th>From Date</th>
					<th>To Date</th>
					<th>Region</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</tfoot>
			<tbody>
			<?php foreach ($task_list as $list){ ?>
				<tr>
					<td><?php echo $list['emp_name']; ?></td>
					<td><?php echo $list['assignname']; ?></td>
					<td><?php echo $list['from_date']; ?></td>
					<td><?php echo $list['to_date']; ?></td>
					<td><?php echo $list['comment']; ?></td>
					<td>
					<?php if($list['status']==1){ echo "pending";}else if($list['status']==2){ echo "In progress"; }else if($list['status']==3){ echo "Done";} ?>
					</td>
					<td>
					<a class="text-warning" href="<?php echo base_url('employee/taskstatus/'.base64_encode($list['emp_id']).'/'.base64_encode(2).'/'.base64_encode($list['id'])); ?>">In progress</a>
					|
					<a class="text-warning" href="<?php echo base_url('employee/taskstatus/'.base64_encode($list['emp_id']).'/'.base64_encode(3).'/'.base64_encode($list['id'])); ?>">Done</a>
					<?php if($userdetails['role']!=3){ ?>
					|
					<a class="text-warning" href="<?php echo base_url('employee/taskstatus/'.base64_encode($list['emp_id']).'/'.base64_encode(4).'/'.base64_encode($list['id'])); ?>">Delete</a>
					
					<?php } ?>
					</td>
					
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
	
