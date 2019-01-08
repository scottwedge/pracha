<head>
    <link href="<?php echo base_url(); ?>assets/vendor/css/dataTables.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/datepicker.js"></script>
</head>


<div class="container-sty-adm ">
    <div class="col-md-12 ">
        <h3 class=" text-center" >  Project  List</h3>
        <hr>
    </div>
    <div class=" row justify-content-md-end ">
        <div class="col-md-9   mar_t20 ">


            <div class="clearfix">&nbsp;</div>
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

            <table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">

                <thead>
                <tr>
                    <th style="display:none"></th>
                    <th>Project Name</th>
                    <th>Client Name</th>
                    <th> Client Email</th>
                    <th> Client Contact Number</th>

                    <th>Status</th>
                    <th>Action</th>


                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th style="display:none"></th>
                    <th>Project Name</th>
                    <th>Client Name</th>
                    <th> Client Email</th>
                    <th> Client Contact Number</th>
                    <th> Project Start Date</th>
                    <th> Estimated Days</th>


                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($project_list as $lis){ $count=1; ?>
                    <tr>
                        <td style="display:none"><?php echo $count; ?></td>
                        <td><?php echo $lis->project_name;
                             ?>
                        </td>
                        <td><?php echo $lis->client_name; ?></td>
                        <td><?php echo $lis->client_email; ?></td>
                        <td><?php echo $lis->client_number; ?></td>
                        <td><?php if($lis->start_date !=''){
                            $myDateTime = DateTime::createFromFormat('Y-m-d', $lis->start_date);
                            $newDateString = $myDateTime->format('d-m-Y');echo $newDateString ;} ?></td>


                        <th>
                            <a class="text-warning" href="<?php echo base_url('project/project_edit/'.base64_encode($lis->project_id)); ?>">
                                Edit</a> |

                       | <a class="text-warning"
                            href="<?php echo base_url('project/delete_project/'.base64_encode($lis->project_id).'/'); ?>">Delete</a></th>




                    </tr>
                    <?php $count++;} ?>
                </tbody>
            </table>

            <div class="clearfix">&nbsp;</div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [[ 0, "asc" ]]
        });
        $('.dataTables_wrapper').find('label').each(function() {
            $(this).parent().append($(this).children());
        });
        $('select').addClass('mdb-select');
        $('.mdb-select').material_select();
    });


    $('.datepicker').pickadate({
        min: new Date('Y-m-d'),
        formate:'Y-m-d'
    });

    $("#datpicbtn").click(function(){
        $("#datpic").toggle();

    });
    $(document).ready(function(){
        var cnt=2;
        $("#datpicbtn").click(function(){
            $("#datpicbtns").slideToggle();
            if((cnt % 2) === 0){
                $("#datpicbtn").text("Remove");
            }else{
                $("#datpicbtn").text("Add");
            }
            cnt++;
        });
    });
</script>

