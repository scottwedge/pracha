<head>
	<link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/datepicker.js"></script>
</head>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end ">
		<div class="col-md-9   mar_t20 ">
		
			
			
		<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
		
			<thead>
                                        <tr>
                                            <th class="th-sm">Name
                                               
                                            </th>
                                            <th class="th-sm">Mobile Number
                                                
                                            </th>
                                            <th class="th-sm">Email Id
                                                
                                            </th>
                                            <th class="th-sm">Business Name
                                               
                                            </th>
                                            <th class="th-sm">Nature of Business
                                                
                                            </th>
                                            <th class="th-sm">Desired Business
                                               
                                            </th>
                                            <th class="th-sm">Amount
                                               
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  foreach($reports_list as $list){?>
                                        <tr>
                                            <td><?php echo $list['f_name'];?></td>
                                            <td><?php echo $list['f_number'];?></td>
                                            <td><?php echo $list['f_email'];?></td>
                                            <td><?php echo $list['f_bname'];?></td>
                                            <td><?php echo $list['f_bnature'];?></td>
                                            <td><?php echo $list['f_dbusiness'];?></td>
                                            <td>xxx</td>
                                        </tr>
									   <?php }?>
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
	
