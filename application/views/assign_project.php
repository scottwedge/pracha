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
                                <label for="exampleInputUsername">Choose Project</label>
                                <select class="mdb-select" id="" name="project" required>

                                    <option value="" disabled selected>select</option>

                                    <?php foreach ($projects as $project){ ?>
                                        <option value="<?php echo $project->project_id; ?>"><?php echo $project->project_name; ?></option>
                                    <?php }?>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Choose Work Type</label>
                                <select class="mdb-select" id="" name="work_type" required>

                                    <option value="" disabled selected>select</option>

                                    <option value="1" >New</option>
                                    <option value="2" >Errors</option>
                                    <option value="3" >Bugs</option>
                                    <option value="4" >Upgrades</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Choose Role</label>
                                <select class="mdb-select" id="" name="work_type" required>

                                    <option value="" disabled selected>select</option>
                                    <?php foreach ($roles as $role){ ?>
                                        <option value="<?php echo $role->role_id; ?>"><?php echo $role->role_name; ?></option>
                                    <?php }?>


                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Choose Employee</label>
                                <select class="mdb-select" id="" name="emp" required>

                                    <option value="" disabled selected>select</option>


                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Work Title</label>
                                <input type="text" class="form-control" name="wtitle" id=""   value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Work Description</label>
                                <input type="text" class="form-control" name="wdesc" id=""   value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername"> Required Files </label>
                                <input type="file" class="form-control" name='rfiles[]' id=''   value=""  multiple>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Start Date</label>
                                <input type="date" class="form-control" name="sdate" id=""   value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">End Date</label>
                                <input type="date" class="form-control" name="edate" id=""   value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Number of Days</label>
                                <input type="text" class="form-control" name="w_days" id="" placeholder=""  value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Proirty</label>
                                <select class="mdb-select" id="" name="priority" required>

                                    <option value="" disabled selected>select</option>

                                    <option value="1" >High</option>
                                    <option value="2" >Medium</option>
                                    <option value="3" >Low</option>

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Comments</label>
                                <textarea  name="comment" id=""  value="" ></textarea>
                            </div>





                        </div>
                        <button type="submit" class="btn btn-dark">Add</button>


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

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script>

</script>


