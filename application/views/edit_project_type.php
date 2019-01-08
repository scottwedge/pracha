<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
        <div class="col-md-9   card">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('project/save_edit_project_type');?>" method="post" enctype="multipart/form-data">
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

                            <div class="col-md-12 ">
                                <h3 class=" text-center" > Edit Project Type</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 mt-10">
                                <label for="exampleInputUsername">Choose Website Type</label>
                                <select class="mdb-select" id="p_type" name="p_type" required>
                                    <option value="" disabled selected>select</option>
                                    <option value="1"  <?php if($list->application_type==1){ echo 'selected';}?>>Website</option>
                                    <option value="2" <?php if($list->application_type==2){ echo 'selected';}?> >Mobile App</option>
                                    <option value="3" <?php if($list->application_type==3){ echo 'selected';}?> >Web App</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Name</label>
                                <input type="hidden" value="<?php echo $list->type_id; ?>" name="type_id">
                                <input type="text" class="form-control" name="name" id="name" placeholder=" Enter Project Type"
                                       value="<?php echo $list->project_type;?>"  required>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-dark">Edit</button>


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


