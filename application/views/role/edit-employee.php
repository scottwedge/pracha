<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
	
        <div class="col-md-9   card mt-10">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('employee/editemployeespost'); ?>" method="post" enctype="multipart/form-data">
                     <input type="hidden" id="r_w_id" name="r_w_id" value="<?php echo isset($edit_employee['r_w_id'])?$edit_employee['r_w_id']:'' ?>">
					<div class="col-md-12">

                        <div class="row">
                           

                            <div class="col-md-12">
                                <h3 class=" text-center"> Edit Role wise employee Details</h3>
                                <hr>
                            </div>
                            
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Role Name</label>
								 <select class="mdb-select md-form" name="role_name" required>
								 <option value="">Select</option>
								 <?php if(isset($role_list) && count($role_list)>0){ ?>
											<?php foreach($role_list as $list){ ?>
											
													<?php if($edit_employee['role_name']==$list['p_r_id']){ ?>
															<option selected value="<?php echo $list['p_r_id']; ?>"><?php echo $list['role']; ?></option>
													<?php }else{ ?>
															<option value="<?php echo $list['p_r_id']; ?>"><?php echo $list['role']; ?></option>
													<?php } ?>
											<?php } ?>
										<?php } ?>
								
								</select>
                            </div>
							
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Employees Name</label>
                                <input type="text" class="form-control" name="employe_name" id="employe_name" placeholder=" Enter Role"  value="<?php echo isset($edit_employee['employe_name'])?$edit_employee['employe_name']:'' ?>"  required>
                            </div>  

                        </div>
                        <button  type="submit" class="btn btn-primary btn-sm" class="btn btn-dark" name="signup" value="Sign up">Add</button>
						
						<!--<a href="<?php echo base_url('employee/project_type_list'); ?>" class="btn btn-primary btn-sm"  class="btn btn-dark">Add</a>-->


                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
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


