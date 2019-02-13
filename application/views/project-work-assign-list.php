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
						<th>Action</th>
					</tr>
                </thead>
				  <tbody>
				   <?php if(isset($work_assign_list) && count($work_assign_list)>0){ ?>
				  <?php foreach($work_assign_list as $list){?>
					<tr>
						<td><?php echo isset($list['project_name'])?$list['project_name']:''?></td>
						<td><?php echo isset($list['role'])?$list['role']:''?></td>
						<td>XX</td>
						<td><?php echo isset($list['f_work'])?$list['f_work']:''?></td>
						<td><?php echo isset($list['p_s_date'])?$list['p_s_date']:''?></td>
						<td><?php echo isset($list['e_days'])?$list['e_days']:''?></td>
						<td>
						<?php if($list['document']!=''){ ?>
							<a  href="<?php echo base_url('assets/workdocement/'.$list['document']); ?> " class="btn btn-success btn-sm my-0 waves-effect waves-light ">Download Document</a>
							<?php } ?>
							
							
						</td>
						<td>Processing</td>
						<td>
							<a href="<?php echo base_url('employee/workedit/'.base64_encode($list['w_id'])); ?>" class="btn btn-warning btn-sm my-0 waves-effect waves-light my-2">Edit</a> 
							
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

