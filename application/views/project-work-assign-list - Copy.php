<head>
    <link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" /> 
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
						<th>Assign Role</th>
						<th>Employes</th>
						<th>Frame Work</th>
						<th>Created Date</th>
						<th>Estimated Date</th>
						<th>Document</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
                </thead>
				  <tbody>
				   <?php if(isset($work_assign_list) && count($work_assign_list)>0){ ?>
				  <?php foreach($work_assign_list as $list){?>
					<tr>
						<td><?php echo isset($list['project_name'])?$list['project_name']:''?></td>
						<td><?php echo isset($list['role'])?$list['role']:''?></td>
						<td>
						<?php foreach($list['employee_list'] as $lis) { ?>
										<?php echo $lis['emp_name']. '<br>'; ?>
										<?php } ?>
						
						</td>
						<td><?php echo isset($list['f_work'])?$list['f_work']:''?></td>
						<td><?php echo isset($list['p_s_date'])?$list['p_s_date']:''?></td>
						<td><?php echo isset($list['e_days'])?$list['e_days']:''?></td>
						<td>
						<?php if($list['document']!=''){ ?>
							<a  href="<?php echo base_url('assets/workdocement/'.$list['document']); ?> " class="btn btn-success btn-sm my-0 waves-effect waves-light ">Download Document</a>
							<?php } ?>
							
							
						</td>
						<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
						<td><a href="" class="btn btn-warning btn-sm my-0 waves-effect waves-light my-2" data-toggle="modal" data-target="#basicExampleModal">View </a> </td>
						<td>
							<a href="<?php echo base_url('employee/workedit/'.base64_encode($list['w_id'])); ?>" class="btn btn-warning btn-sm my-0 waves-effect waves-light my-2">Edit</a> 
							<a href="<?php echo base_url('employee/workstatus/'.base64_encode($list['w_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" ><i class="fa fa-info-circle btn btn-warning"></i></a>

							<a href="<?php echo base_url('employee/workdelete/'.base64_encode($list['w_id'])); ?>" class="btn btn-danger btn-sm my-0 waves-effect waves-light">Delete</a>
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







<?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
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

