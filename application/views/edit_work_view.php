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
        <h3 class=" text-center" >  Project Progress
</h3>
        <hr>
    </div>
    <div class=" row justify-content-md-end ">
	
        <div class="col-md-9   mar_t20 mx-0  table-responsive">

            
            
            

           
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

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Project Progress</h5> 
		
         
                        <a  href="<?php echo base_url('employee/project_work_assign_list'); ?>" class="btn btn-primary">Back</a>
                
                
      </div>
      <div class="modal-body">
		<div class="container">
			<ul class="step d-flex flex-nowrap">
			
			  <li class="step-item <?php  if($edit_work['role_type']==4){ echo "active";} ?>">
				<a href="#!" class="">Research</a>
			  </li>
			
			  <li class="step-item <?php  if($edit_work['role_type']==5){ echo "active";} ?>">
				<a href="#!" class="">Designing</a>
			  </li>
			
			  <li class="step-item <?php  if($edit_work['role_type']==6){ echo "active";} ?>">
				<a href="#!" class="">Development</a>
			  </li>
			  <li class="step-item <?php  if($edit_work['role_type']==8){ echo "active";} ?>">
				<a href="#!" class="">Testing</a>
			  </li>
			
			</ul> 
			<hr>
			<div class="py-4 row">
			<?php  if($edit_work['role_type']==4){?>
				<div class="col-md-6">
					<strong>Starting Date :</strong><?php echo isset($edit_work['p_s_date'])?$edit_work['p_s_date']:''?>
				</div>
				<div class="col-md-6">
					<strong>Estimated Days :</strong> <?php echo isset($edit_work['e_days'])?$edit_work['e_days']:''?>
				</div>
			<?php }else if($edit_work['role_type']==5){?>
			<div class="col-md-6">
					<strong>Starting Date :</strong><?php echo isset($edit_work['p_s_date'])?$edit_work['p_s_date']:''?>
				</div>
				<div class="col-md-6">
					<strong>Estimated Days :</strong> <?php echo isset($edit_work['e_days'])?$edit_work['e_days']:''?>
				</div>
			<?php }else if($edit_work['role_type']==6){?>
			<div class="col-md-6">
					<strong>Starting Date :</strong><?php echo isset($edit_work['p_s_date'])?$edit_work['p_s_date']:''?>
				</div>
				<div class="col-md-6">
					<strong>Estimated Days :</strong> <?php echo isset($edit_work['e_days'])?$edit_work['e_days']:''?>
				</div>
			<?php }else if($edit_work['role_type']==8){?>
			<div class="col-md-6">
					<strong>Starting Date :</strong><?php echo isset($edit_work['p_s_date'])?$edit_work['p_s_date']:''?>
				</div>
				<div class="col-md-6">
					<strong>Estimated Days :</strong> <?php echo isset($edit_work['e_days'])?$edit_work['e_days']:''?>
				</div>
			<?php }?>
				
			</div>
		</div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
