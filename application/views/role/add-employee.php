<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
	
        <div class="col-md-9   card mt-10">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('employee/addemployeespost'); ?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="row">
                           

                            <div class="col-md-12">
                                <h3 class=" text-center"> Add Role Details</h3>
                                <hr>
                            </div>
                            
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Role Name</label>
								 <select class="mdb-select md-form" name="role_name">
								 <option value="">Select</option>
								<?php foreach ($role_list as $list){ ?>
								<option value="<?php echo $list['p_r_id']; ?>"><?php echo $list['role']; ?></option>
								<?php }?>
								</select>
                            </div>
							
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Employees Name</label>
                                <input type="text" class="form-control" name="employe_name" id="employe_name" placeholder=" Enter Role"  value=""  required>
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


