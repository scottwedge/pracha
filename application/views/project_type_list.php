<head>
    <link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/datepicker.js"></script>
</head>
<style>
.step {
  list-style: none;
  margin: .2rem 0;
  width: 100%;
}

.step .step-item {
  -ms-flex: 1 1 0;
  flex: 1 1 0;
  margin-top: 0;
  min-height: 1rem;
  position: relative; 
  text-align: center;
}

.step .step-item:not(:first-child)::before {
  background: #0069d9;
  content: "";
  height: 2px;
  left: -50%;
  position: absolute;
  top: 9px;
  width: 100%;
}

.step .step-item a {
  color: #acb3c2;
  display: inline-block;
  padding: 20px 10px 0;
  text-decoration: none;
}

.step .step-item a::before {
  background: #0069d9;
  border: .1rem solid #fff;
  border-radius: 50%;
  content: "";
  display: block;
  height: .9rem;
  left: 50%;
  position: absolute;
  top: .2rem;
  transform: translateX(-50%);
  width: .9rem;
  z-index: 1;
}

.step .step-item.active a::before {
  background: #fff;
  border: .1rem solid #0069d9;
}

.step .step-item.active ~ .step-item::before {
  background: #e7e9ed;
}

.step .step-item.active ~ .step-item a::before {
  background: #e7e9ed;
}
</style>

<div class="container-sty-adm ">
    <div class="col-md-12 ">
        <h3 class=" text-center" >  Project Type List</h3>
        <hr>
    </div>
    <div class=" row justify-content-md-end ">
	
        <div class="col-md-9   mar_t20 mx-0  table-responsive">

            
            
            

            <table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">

                <thead>
					<tr>
						<th>Project Name</th>
						<th>Project Type</th>
						<th>Created Date</th>
						<th>Estimated Date</th>
						<th>Client Name</th>
						<th>Client Phone Number</th>
						<th>Client Mail</th>
						<th>Document</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
                </thead>
				  <tbody>
				  <?php if(isset($project_list) && count($project_list)>0){ ?>
				  <?php foreach($project_list as $list){?>
					<tr>
						<td><?php echo isset($list['project_name'])?$list['project_name']:''?></td>
						<td><?php echo isset($list['project_type'])?$list['project_type']:''?></td>
						<td><?php echo isset($list['p_strat_date'])?$list['p_strat_date']:''?></td>
						<td><?php echo isset($list['estimated_days'])?$list['estimated_days']:''?></td>
						<td><?php echo isset($list['client_name'])?$list['client_name']:''?></td>
						<td><?php echo isset($list['client_number'])?$list['client_number']:''?></td>
						<td><?php echo isset($list['client_email'])?$list['client_email']:''?></td>
						
						<td>
							 <?php if($list['project_document']!=''){ ?>
							<a  href="<?php echo base_url('assets/projectdocument/'.$list['project_document']); ?> " class="btn btn-success btn-sm my-0 waves-effect waves-light ">Download Document</a>
							<?php } ?>
							
							</td>
						
						
						<td><a href="" class="btn btn-warning btn-sm my-0 waves-effect waves-light my-2" data-toggle="modal" data-target="#basicExampleModal">View </a> </td>
						<td>
						 <a  class="btn btn-warning btn-sm my-0 waves-effect waves-light my-2" href="<?php echo base_url('employee/projectedit/'.base64_encode($list['p_id'])); ?>"  data-toggle="tooltip" title="Edit" >Edit</a>
							
							<a href="<?php echo base_url('employee/projectdelete/'.base64_encode($list['p_id'])); ?>" class="btn btn-danger btn-sm my-0 waves-effect waves-light">Delete</a>
						</td>
					</tr>
                </tbody>
				  <?php }?>
              <?php }?>
            </table>

            <div class="clearfix">&nbsp;</div>
        </div>
		
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Project Progress</h5> 
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="container">
			<ul class="step d-flex flex-nowrap">
			  <li class="step-item">
				<a href="#!" class="">Research & Documentation</a>
			  </li>
			  <li class="step-item">
				<a href="#!" class="">Designing</a>
			  </li>
			  <li class="step-item active">
				<a href="#!" class="">Development</a>
			  </li>
			  <li class="step-item">
				<a href="#!" class="">Testing</a>
			  </li>
			</ul> 
			<hr>
			<div class="py-4 row">
				<div class="col-md-6">
					<strong>Starting Date :</strong> 12-02-2019
				</div>
				<div class="col-md-6">
					<strong>Estimated Date :</strong> 02-04-2019
				</div>
				
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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

