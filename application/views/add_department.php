<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
        <div class="col-md-9   card">
            <div class="row">
                <form  id="add_type" action="<?php echo base_url('department/save_department');?>" method="post" enctype="multipart/form-data">
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
                                <h3 class=" text-center"> Add Department</h3>
                                <hr>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername"> Department Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder=" Enter Project Type"  value=""  required>
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
                        }

                    }
                },



            }
        })

    });

</script>


