<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
        <div class="col-md-9   card">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('project/save_assign_project');?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="row">
                            <?php if($this->session->flashdata('success')): ?>
                                <div class="alert alert-success">
                                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                                </div>

                            <?php endif; ?>
                            <?php if($this->session->flashdata('error')): ?>
                                <div class="alert alert-warning">
                                    <strong><?php echo $this->session->flashdata('error'); ?></strong>
                                </div>
                            <?php endif; ?>

                            <div class="col-md-12">
                                <h3 class=" text-center"> Assign Project Details</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Choose Project</label>
                                <select class="mdb-select" id="" name="project" required>

                                    <option value="" disabled selected>select</option>

                                    <?php foreach ($projects as $project){ ?>
                                        <option value="<?php echo base64_encode($project->project_id); ?>"><?php echo $project->project_name; ?></option>
                                    <?php }?>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Choose Work Type</label>
                                <select class="mdb-select" id="" name="work_type" required>
                                    <option value="" disabled selected>select</option>
                                    <option value="1" >New</option>
                                    <option value="2" >Errors</option>
                                    <option value="3" >Bugs</option>
                                    <option value="4" >Upgrades</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">

                                <label for="exampleInputUsername">Choose Department</label>
                                <select class="mdb-select" id="" name="dept" required>


                                <label>Choose Role</label>
                                <select class="mdb-select" id="" name="work_type" required>

                                    <option value="" disabled selected>select</option>
                                    <?php foreach ($roles as $role){ ?>
                                        <option value="<?php echo $role->role_id; ?>"><?php echo $role->role_name; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Choose Employee</label>
                                <select class="mdb-select" id="" name="emp" required>
                                    <option value="" disabled selected>select</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Work Title</label>
                                <input type="text" class="form-control" name="wtitle" id="wtitle" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Work Description</label>
                                <input type="text" class="form-control" name="wdesc" id=""   value="" >
                            </div>
                            <div class="form-group col-md-6">
                                <label> Required Files </label>
                                <input type="file" class="form-control" name='rfiles[]' id=''   value=""  multiple>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Start Date</label>
                                <input type="date" class="form-control" name="sdate" id=""   value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>End Date</label>
                                <input type="date" class="form-control" name="edate" id=""   value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Number of Days</label>
                                <input type="text" class="form-control" name="w_days" id="" placeholder=""  value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Proirty</label>
                                <select class="mdb-select" id="" name="priority" required>
                                    <option value="" disabled selected>select</option>
                                    <option value="1" >High</option>
                                    <option value="2" >Medium</option>
                                    <option value="3" >Low</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Comments</label>
                                <textarea  name="comment" id=""  value="" ></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-md waves-effect waves-light">Submit</button>
                        </div>
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

<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/bootstrapValidator.min.js"></script>

<!--<script type="text/javascript">
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





</script>-->
<script type="text/javascript">
$(document).ready(function() {
	
    $('#add_type').bootstrapValidator({

        fields: {
            wtitle: {
               validators: {
					notEmpty: {
						message: 'Email is required'
					}
				}
            }
        }
    });
});
</script>

