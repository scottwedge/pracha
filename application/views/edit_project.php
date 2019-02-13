<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
	
        <div class="col-md-9   card mt-10">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('employee/editprojectpost'); ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" id="p_id" name="p_id" value="<?php echo isset($edit_project['p_id'])?$edit_project['p_id']:'' ?>">
                    <div class="col-md-12">

                        <div class="row">
                           

                            <div class="col-md-12">
                                <h3 class=" text-center"> Edit Project Details</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Name</label>
                                <input type="text" class="form-control" name="project_name" id="project_name" placeholder=" Enter Project Name"  value="<?php echo isset($edit_project['project_name'])?$edit_project['project_name']:'' ?>"  required>
                            </div>  
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Type</label>
                             <select class="mdb-select md-form" name="project_type" id="project_type" >
							  <option value="" disabled selected>Choose your Project Type</option>
							  <option value="Dynamic" <?php if($edit_project['project_type']=='Dynamic'){ echo "selected"; } ?>>Dynamic</option>
							  <option value="Static" <?php if($edit_project['project_type']=='Static'){ echo "selected"; } ?>>Static</option>
							  
							</select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Started Date</label>
                                <input type="date" class="form-control" name='p_strat_date' id="p_strat_date" placeholder=" Enter Start Date"  value="<?php echo isset($edit_project['p_strat_date'])?$edit_project['p_strat_date']:'' ?>"  required>
                            </div>
							<div class="form-group col-md-6">
                                <label for="">Framework</label>
                                <input type="text" class="form-control" name='frame_work' id="frame_work" placeholder=" Enter frame work"  value="<?php echo isset($edit_project['frame_work'])?$edit_project['frame_work']:'' ?>"  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Estimated Days</label>
                                <input type="text" class="form-control" name="estimated_days" id="estimated_days" placeholder=" Enter Estimated Days"  value="<?php echo isset($edit_project['estimated_days'])?$edit_project['estimated_days']:'' ?>"  required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Name</label>
                                <input type="text" class="form-control" name="client_name" id="client_name" placeholder=" Enter Client Name"  value="<?php echo isset($edit_project['client_name'])?$edit_project['client_name']:'' ?>"  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Number</label>
                                <input type="text" class="form-control" name="client_number" id="client_number" placeholder=" Enter Client Number"  value="<?php echo isset($edit_project['client_number'])?$edit_project['client_number']:'' ?>"  required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Email</label>
                                <input type="email" class="form-control" name="client_email" id="client_email" placeholder=" Enter Client Email"  value="<?php echo isset($edit_project['client_email'])?$edit_project['client_email']:'' ?>"  required>
                            </div> 
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Upload Project Document or Description</label>
                                <input type="file" class="form-control" name="project_document"  value="<?php echo isset($edit_project['project_document'])?$edit_project['project_document']:'' ?>" >
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


