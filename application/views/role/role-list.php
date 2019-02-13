<head>
    <link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" /> 
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
        <h3 class=" text-center" >  Role List</h3>
        <hr>
    </div>
    <div class=" row justify-content-md-end ">
	
        <div class="col-md-9   mar_t20 mx-0  table-responsive">

            
            
            

            <table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">

                <thead>
					<tr>
						<th>Role Name</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
                </thead>
				  <tbody>
				  <?php if(isset($role_list) && count($role_list)>0){ ?>
				  <?php foreach($role_list as $list){?>
					<tr>
						<td><?php echo isset($list['role'])?$list['role']:''?></td>
						
						 <td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
						
						
						
						
						<td>
						
						 <a  class="btn btn-warning btn-sm my-0 waves-effect waves-light my-2" href="<?php echo base_url('employee/editrole/'.base64_encode($list['p_r_id'])); ?>"  data-toggle="tooltip" title="Edit" >Edit</a>
							
						<a href="<?php echo base_url('employee/roledelete/'.base64_encode($list['p_r_id'])); ?>" class="btn btn-danger btn-sm my-0 waves-effect waves-light">Delete</a>
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

