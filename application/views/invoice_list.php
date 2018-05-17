<head>
	<link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/datepicker.js"></script>
</head>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end ">
		<div class="col-md-9   mar_t20 ">
		
			
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
		
		<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
		
			<thead>
				<tr>
					<th>Name</th>
					<th>Project Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Amount</th>
					<th>Paid Amount</th>
					<th>Due Amount</th>
					<th>Payment Mode</th>
					<th>Date</th>
					<th>Action</th>
				
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Name</th>
					<th>Project Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Amount</th>
					<th>Paid Amount</th>
					<th>Due Amount</th>
					<th>Payment Mode</th>
					<th>Date</th>
					<th>Action</th>
					
				</tr>
			</tfoot>
			<tbody>
			<?php foreach ($bill_list as $list){ ?>
				<tr>
					<td><?php echo $list['name']; ?></td>
					<td><?php echo $list['project']; ?></td>
					<td><?php echo $list['email_id']; ?></td>
					<td><?php echo $list['mobile_no']; ?></td>
					<td><?php echo $list['amount']; ?></td>
					<td><?php echo $list['pay']; ?></td>
					<td><?php echo $list['due']; ?></td>
					<td><?php if($list['payment_type']==1){ echo "Online bank"; }else if($list['payment_type']==2){ echo "Cash";}else if($list['payment_type']==3){ echo "Other"; } ?></td>
					<td><?php echo $list['create_at']; ?></td>
					<td><a target="_blank" href="<?php echo base_url('/assets/invoices/'.$list['invoice_name']); ?>">download</a></td>
					
					
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
	
