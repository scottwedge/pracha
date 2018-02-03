<head>
	<link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
</head>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end ">
		<div class="col-md-9   mar_t20 ">
		<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
		<thead>
				<tr>
					<th>Name</th>
					<th>Employee Name</th>
					<th>Date</th>
					<th>Work</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Name</th>
					<th>Employee Name</th>
					<th>Date</th>
					<th>Work</th>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<th>vasudevareddy</th>
					<th>PT0002</th>
					<th>03-02-2018</th>
					<th><p>test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test test test test test test test test test test test test test test test test test test</p>
					<p>test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test test test test test test test test test test test test test test test test test test</p> </th>
				</tr>
				
				
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
	
