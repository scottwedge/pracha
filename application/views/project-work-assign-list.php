<head>
    <link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/datepicker.js"></script>
</head>


<div class="container-sty-adm ">
    <div class="col-md-12 ">
        <h3 class=" text-center" >Work assgin list</h3>
        <hr>
    </div>
    <div class=" row justify-content-md-end ">
        <div class="col-md-9   mar_t20 mx-0  table-responsive">


            
            

            <table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">

                <thead>
					<tr>
						<th>Project Name</th>
						<th>Project Type</th>
						<th>Frame Work</th>
						<th> Created Date</th>
						<th>Estimated Date</th>
						<th>Assign Role</th>
						<th>Employess</th>
						<th>Document</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
                </thead>
				  <tbody>
					<tr>
						<td>Pracha</td>
						<td>Dynamic</td>
						<td>Php</td>
						<td>12-02-2019</td>
						<td>02-04-2019</td>
						<td>Designing</td>					
						<td>Bayapu,Sathwik</td>					
						<td>
							<button class="btn btn-success btn-sm my-0 waves-effect waves-light ">Download Document</button>
						</td>
						<td>Processing</td>
						<td>
							<a href="" class="btn btn-warning btn-sm my-0 waves-effect waves-light my-2">Edit</a> 
							
							<a href="" class="btn btn-danger btn-sm my-0 waves-effect waves-light">Delete</a>
						</td>
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

