<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
	
        <div class="col-md-9   card mt-10">
            <div class="row">
                <form  id="add_type" action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="row">
                           

                            <div class="col-md-12">
                                <h3 class=" text-center"> Work Assign</h3>
                                <hr>
                            </div>
                            
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project</label>
								 <select class="mdb-select md-form" name="work_project_name">
								 <option value="">Select</option>
								<?php foreach ($project_data as $list){ ?>
								<option value="<?php echo $list['p_id']; ?>"><?php echo $list['project_name']; ?></option>
								<?php }?>
								</select>
                            </div>
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Select Role</label>
								 <select class="mdb-select md-form" name="role_type">
								  <option value="" disabled selected>Select Role </option>
								  <option value="1">Research & Documentation</option>
								  <option value="2">Designing</option>
								  <option value="3">Development</option>
								  <option value="4">Testing</option>
								</select>
                            </div>
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Select Employee</label>
								 <select class="mdb-select md-form" multiple  name="employee_name">
								  <option value="" disabled selected>Select Employees </option>
								  <option value="1">Bayapu Reddy</option>
								  <option value="2">Sathwik</option>
								  <option value="3">jhanavi</option>
								 
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
                                <input type="file" class="form-control" name="document"  value="document"  required>
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


