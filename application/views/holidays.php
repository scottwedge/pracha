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
				<h3 >Add Holiday Date</h3>
				
			</div>
			<hr>
			<div class="clearfix">&nbsp;</div>
			<form action="<?php echo base_url('employee/holiydayadd');?>" method="post">
			<div class="row justify-content-md-center">
			
				<div class="col-6">
				<div class="md-form">
					<input placeholder="Enter date" name="date" type="text" id="date" class="form-control " required>
					<label for="date-picker-example">Holiday Date</label>
				</div>
				</div>
				<div class="col-6">
				<div class="md-form">
					<input placeholder="Festival Name" name="festivalname" type="text" id="festivalname" class="form-control " required>
					<label for="date-picker-example">Leave start</label>
				</div>
				</div>
				<div class="col-12">
				<div class="md-form">
					<input placeholder="Day Name" name="day" type="text" id="day" class="form-control " required>
					<label for="date-picker-example">Day Name</label>
				</div>
				</div>
					<button type="submit" class="btn btn-info btn-rounded mar-t30">ADD</button>
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
					<th style="display:none"></th>
					<th>Date</th>
					<th>Festival</th>
					<th>Day Name</th>
					<?php if($userdetails['role']!=3){ ?>
					<th>Status</th>
					<th>Action</th>
					<?php } ?>
				
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th style="display:none"></th>
					<th>Date</th>
					<th>Festival</th>
					<th>Day Name</th>
					<?php if($userdetails['role']!=3){ ?>
					<th>Status</th>
					<th>Action</th>
					<?php } ?>
					
				</tr>
			</tfoot>
			<tbody>
			<?php foreach ($holidays_list as $list){ ?>
				<tr>
					<td style="display:none"><?php echo $list['id']; ?></td>
					<td><?php echo $list['date']; ?></td>
					<td><?php echo $list['festival']; ?></td>
					<td><?php echo $list['day']; ?></td>
					<?php if($userdetails['role']!=3){ ?>
					<td><?php if($list['status']==1){ echo "Active" ;}else{ echo "Deactive"; } ?></td>
					<th><a class="text-warning" href="<?php echo base_url('employee/holidaystatus/'.base64_encode($list['id']).'/'.base64_encode($list['status'])); ?>"><?php if($list['status']==0){ echo "Active" ;}else{ echo "Deactive"; } ?></a> | <a class="text-warning" href="<?php echo base_url('employee/holidaystatus/'.base64_encode($list['id']).'/'.base64_encode(2)); ?>">Delete</a></th>
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
        "order": [[ 0, "asc" ]]
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
	
