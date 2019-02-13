<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
	
        <div class="col-md-9   card mt-10">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('employee/editworkpost');?>" method="post" enctype="multipart/form-data">
                  	<input type="hidden" id="w_id" name="w_id" value="<?php echo isset($edit_work['w_id'])?$edit_work['w_id']:'' ?>">
				  <div class="col-md-12">

                        <div class="row">
                           

                            <div class="col-md-12">
                                <h3 class=" text-center"> Edit Work Assign</h3>
                                <hr>
                            </div>
                            
							
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Select Role</label>
								 <select class="mdb-select md-form" name="role_type" id="role_type" onchange="get_allocate_room_number_list(this.value)" required >
								  <option value="" >Select Role </option>
								 <?php if(isset($role_types) && count($role_types)>0){ ?>
											<?php foreach($role_types as $list){ ?>
											
													<?php if($edit_work['role_type']==$list['p_r_id']){ ?>
															<option selected value="<?php echo $list['p_r_id']; ?>"><?php echo $list['role']; ?></option>
													<?php }else{ ?>
															<option value="<?php echo $list['p_r_id']; ?>"><?php echo $list['role']; ?></option>
													<?php } ?>
											<?php } ?>
										<?php } ?>
								</select>
                            </div>
							
							
							<div class="form-group col-md-6">
							
								 <label for="exampleInputUsername">Select Employee</label>
								<div class="">
									<select multiple id="employee_name"  name="employee_name"  >
									<option value="">Select</option>
									</select>
								</div>

                        </div>	
							
							
							
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project</label>
								 <select class="mdb-select md-form" name="work_project_name" required>
								 <option value="">Select</option>
								<?php if(isset($project_data) && count($project_data)>0){ ?>
											<?php foreach($project_data as $list){ ?>
											
													<?php if($edit_work['work_project_name']==$list['p_id']){ ?>
															<option selected value="<?php echo $list['p_id']; ?>"><?php echo $list['project_name']; ?></option>
													<?php }else{ ?>
															<option value="<?php echo $list['p_id']; ?>"><?php echo $list['project_name']; ?></option>
													<?php } ?>
											<?php } ?>
										<?php } ?>
								</select>
                            </div>
							
							
							
							
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Started Date</label>
                                <input type="date" class="form-control" name='p_s_date' id="p_s_date" placeholder=" Enter Start Date"  value="<?php echo isset($edit_work['p_s_date'])?$edit_work['p_s_date']:'' ?>"  required>
                            </div>
							<div class="form-group col-md-6">
                                <label for="">Framework</label>
                                <input type="text" class="form-control" name='f_work' id="f_work" placeholder=" Enter frame work"  value="<?php echo isset($edit_work['f_work'])?$edit_work['f_work']:'' ?>"  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Estimated Days</label>
                                <input type="text" class="form-control" name="e_days" id="e_days" placeholder=" Enter Estimated Days"  value="<?php echo isset($edit_work['e_days'])?$edit_work['e_days']:'' ?>"  required>
                            </div>

                            
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Upload Project Document or Description</label>
                                <input type="file" class="form-control" name="document"  value="<?php echo isset($edit_work['document'])?$edit_work['document']:'' ?>">
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
function get_allocate_room_number_list(role_type){
	//alert('hyd');
	if(role_type !=''){
		    jQuery.ajax({
   			url: "<?php echo base_url('employee/get_allocate_room_number_list');?>",
   			data: {
				role_type: role_type,
			},
   			type: "POST",
   			format:"Json",
   					success:function(data){
						if(data.msg=1){
							var parsedData = JSON.parse(data);
							//alert(parsedData);
							$('#employee_name').empty();
							$('#employee_name').append("<option>select</option>");
							for(i=0; i < parsedData.list.length; i++) {
								$('#employee_name').append("<option value="+parsedData.list[i].employe_name+">"+	parsedData.list[i].employe_name+"</option>"); 
							}
						}
   					}
           });
	   }
}

  
</script>
<script>
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


