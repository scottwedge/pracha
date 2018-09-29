<head>
	<link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
</head>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end ">
		<div class="col-md-9   mar_t20 ">
		<a  href="<?php echo base_url('employee/addemployee'); ?>" type="button" class="btn btn-info btn-rounded pull-right">Add</a>
		<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
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
			<thead>
				<tr>
					<th>Name</th>
					<th>Employee Id</th>
					<th>Designation</th>
					<th>Mobile No</th>
					<th>DOJ</th>
					<th>Salary</th>
					<th>Leaves</th>
					<th>Action</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Name</th>
					<th>Employee Id</th>
					<th>Designation</th>
					<th>Mobile No</th>
					<th>DOJ</th>
					<th>Salary</th>
					<th>Leaves</th>
					<th>Action</th>
				</tr>
			</tfoot>
			<tbody>
			<?php foreach($employee_list as $elist){ ?>
				<tr>
					<td><?php echo $elist['emp_name']; ?></td>
					<td><?php echo $elist['emp_office_id']; ?></td>
					<td><?php echo $elist['emp_role']; ?></td>
					<td><?php echo $elist['emp_mobile']; ?></td>
					<td><?php echo $elist['emp_doj']; ?></td>
					<td><?php echo $elist['salary']; ?></td>
					<td>
					<b> Sick Leaves : </b> <?php if($elist['sick_leaves']>0){ echo $elist['sick_leaves'];}else{ echo "0";}; ?>,
					<b>Casual Leaves : </b><?php if($elist['causal_leaves']>0){ echo $elist['causal_leaves'];}else{ echo "0";}; ?>,
					<b>Paid Leaves : </b><?php if($elist['paid_leaves']>0){ echo $elist['paid_leaves'];}else{ echo "0";}; ?>
					</td>
					<td><a href="<?php echo base_url('employee/employeeedit/'.base64_encode($elist['emp_id'])); ?>">Edit</a>
					|<a href="<?php echo base_url('employee/status/'.base64_encode($elist['emp_id']).'/'.base64_encode($elist['status'])); ?>"><?php if($elist['status']==1){ echo "Deactive"; }else{ echo "Active"; } ?></a>
					|<a href="<?php echo base_url('employee/taskexport/'.base64_encode($elist['emp_id'])); ?>">Work Export</a>
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
       
	</script>
	
