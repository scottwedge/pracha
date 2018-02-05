<head>
	<link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
</head>
<?php //echo '<pre>';print_r($reportlist);exit;?>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end ">
		<div class="col-md-9   mar_t20 ">
		<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
		<thead>
				<tr>
					<th style="display:none;"></th>
					<th>Date</th>
					<th>Employee Name</th>
					<th>Working Hours</th>
					<th>Work Sheet</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
				<th style="display:none;"></th>
					<th>Date</th>
					<th>Employee Name</th>
					<th>Working Hours</th>
					<th>Work Sheet</th>
				</tr>
			</tfoot>
			<tbody>
			<?php foreach ($reportlist as $list){ ?>
				<tr>
					<th style="display:none;"><?php echo $list['login_time']; ?></th>
					<th><?php echo $list['currentday']; ?></th>
					<th><?php echo $list['name']; ?></th>
					<th><?php echo $list['workinghours']; ?></th>
					<th>
						<?php if(count($list['dailywork'])>0){
							foreach($list['dailywork'] as $li){ ?>
								<p><?php echo $li['comment']; ?></p>
								<?php if($li['reportfile']!=''){ ?>
								<p><a href="<?php echo base_url('assets/dailyreports/'.$li['reportfile']); ?>">Download Work sheet File</a></p>
							<?php } ?>
						<?php }} ?>
					</th>
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
        "order": [[ 0, "desc" ]]
    });
    $('.dataTables_wrapper').find('label').each(function() {
      $(this).parent().append($(this).children());
    });
    $('select').addClass('mdb-select');
    $('.mdb-select').material_select();
});
       
	</script>
	
