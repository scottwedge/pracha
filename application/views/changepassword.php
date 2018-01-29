
<section id="team-scroll" class="our_service padding-10 ptb-xs-60 bod-st  form-elegant">
  

    <!--Form without header-->
    <div class="  row justify-content-md-center">

		<div class="card-body mx-4 card col-4 " id="logindiv">
		<?php if($this->session->flashdata('updatpassword')): ?>
		<div class="alert alert-success">
		<strong><?php echo $this->session->flashdata('updatpassword'); ?></strong> 
		</div>

		<?php endif; ?>
		<?php if($this->session->flashdata('passworderror')): ?>
		<div class="alert alert-warning">
		<strong><?php echo $this->session->flashdata('passworderror'); ?></strong> 
		</div>

		<?php endif; ?>
            <!--Header-->
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>Change Password</strong></h3>
            </div>

            <!--Body-->
			<form action="<?php echo base_url('employee/changepasswordpost'); ?>" method="post" >
            <div class="md-form">
                <input type="hidden" id="emp_id" name="emp_id" value="<?php echo $userdetails['emp_id'];?>" >
                <input type="password" id="old_email" name="old_email"  class="form-control" >
                <label for="Form-email1">Old Password</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="new_password" name="new_password" class="form-control">
                <label for="Form-pass1">New password</label>
            </div>
			<div class="md-form pb-3">
                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                <label for="Form-pass1">Confirm password</label>
            </div>

            <div class="text-center mb-3">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Change Password</button>
            </div>
			</form>

        </div>
		<div class="clearfix"> &nbsp;</div>
		

     
    </div>
    <!--/Form without header-->

</section>
<script>
function forgotpassword(){
	$('#logindiv').hide();
	$('#forgotpass').show();
}
</script>
            
