<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
	
        <div class="col-md-9   card mt-10">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('employee/addwork');?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="row">
                           

                            <div class="col-md-12">
                                <h3 class=" text-center"> Work Assign</h3>
                                <hr>
                            </div>
                            
							
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Select Role</label>
								 <select class="mdb-select md-form" name="role_type" id="role_type" onchange="get_role_list(this.value);" class="form-control" required >
								  <option value="" >Select Role </option>
								  <?php foreach ($role_types as $list){ ?>
								<option value="<?php echo $list['role_id']; ?>"><?php echo $list['rolename']; ?></option>
								<?php }?>
								</select>
                            </div>
							
							
							<div class="form-group col-md-6">
							
								 <label for="exampleInputUsername">Select Employee</label>
								<div class="">
									<select  class='mdb-select' multiple id="employee_name"  name="employee_name[]"  >
									<option value="">Select</option>
									</select>
								</div>

                        </div>	
							
							
							
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project</label>
								 <select class="mdb-select md-form" name="work_project_name" required>
								 <option value="">Select</option>
								<?php foreach ($project_data as $list){ ?>
								<option value="<?php echo $list['p_id']; ?>"><?php echo $list['project_name']; ?></option>
								<?php }?>
								</select>
                            </div>
							
							
							
							
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Started Date</label>
                                <input type="date" class="form-control" name='p_s_date' id="p_s_date" placeholder=" Enter Start Date"  value=""  required>
                            </div>
							<div class="form-group col-md-6">
                                <label for="">Framework</label>
                                <input type="text" class="form-control" name='f_work' id="f_work" placeholder=" Enter frame work"  value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Estimated Days</label>
                                <input type="text" class="form-control" name="e_days" id="e_days" placeholder=" Enter Estimated Days"  value=""  required>
                            </div>

                            
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Upload Project Document or Description</label>
                                <input type="file" class="form-control" name="document"  value=""  required>
                            </div>
                         





                        </div>
						<button  type="submit" class="btn btn-primary btn-sm"  class="btn btn-dark" name="signup" value="Sign up">Add</button>


                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<script>
function get_role_list(role_type){
	//alert('ssss');
	if(role_type !=''){
		    jQuery.ajax({
   			url: "<?php echo base_url('Employee/get_role_wise_list');?>",
   			data: {
				role_type: role_type,
			},
   			type: "POST",
   			format:"Json",
   					success:function(data){
						
						if(data.msg=1){
							var parsedData = JSON.parse(data);
						//alert('dd');
						$('.mdb-select').material_select('destroy');
							$('#employee_name').empty();
							$('#employee_name').append("<option disabled>select</option>");
							
							
							for(i=0; i < parsedData.list.length; i++) {
								
								
								console.log(parsedData.list);
							$('#employee_name').append("<option value="+parsedData.list[i].emp_id+">"+parsedData.list[i].emp_name+"</option>");                      
                    
								
							 
							}
							$('.mdb-select').material_select();
						}
						
   					}
           });
	   }
}


    $(document).ready(function() {

        $('select').addClass('mdb-select');
        $('.mdb-select').material_select();
    });

</script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#add_type').bootstrapValidator({

            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message:'Question wont allow <> [] = % '
                        },
                        remote: {
                            message: 'Type already exists',
                            url: '<?php echo base_url('project/check_project_type'); ?>',
                            data: {
                                type: 'name'
                            }
                        }
                    }
                },



            }
        })

    });

</script>


