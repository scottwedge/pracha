<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
        <div class="col-md-9   card">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('project/save_project');?>" method="post" enctype="multipart/form-data">
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
                                <h3 class=" text-center"> Add Project Details</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder=" Enter Project Name"  value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Started Date</label>
                                <input type="date" class="form-control" name='sdate' id="name" placeholder=" Enter Start Date"  value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Estimated Days</label>
                                <input type="text" class="form-control" name="est" id="name" placeholder=" Enter Estimated Days"  value=""  required>
                            </div>
<!--                            <div class="form-group col-md-6 checkbox">-->
<!---->
<!--                                --><?php //foreach($ptypes as $type){?>
<!--                                    <label>--><?php //echo $type->project_type;?><!--</label>-->
<!---->
<!--                                <input type="checkbox" class="form-control" name="ptype[]"-->
<!--                                         value="--><?php //echo $type->type_id;?><!--"  >-->
<!---->
<!--                                --><?php //}?>
<!--                            </div>-->
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Name</label>
                                <input type="text" class="form-control" name="clt_name" id="name" placeholder=" Enter Client Name"  value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Number</label>
                                <input type="text" class="form-control" name="clt_num" id="name" placeholder=" Enter Client Number"  value=""  required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Email</label>
                                <input type="text" class="form-control" name="clt_email" id="name" placeholder=" Enter Client Email"  value=""  required>
                            </div>
<!--                            <div class="form-group col-md-6">-->
<!--                                <label for="exampleInputUsername">Involved Peoples</label>-->
<!--                                --><?php //foreach ($roles as $role){ ?>
<!--                                <label for="exampleInputUsername">--><?php //echo $role->role_type;?><!--</label>-->
<!--                                <input type="text" class="form-control" name="roles[]" id="name"-->
<!--                                       placeholder=" "  value="--><?php //echo $role->role_id; ?><!--"  required>-->
<!--                                --><?php //} ?>
<!--                            </div>-->





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


