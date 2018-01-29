
<section id="team-scroll" class="our_service padding-10 ptb-xs-60 bod-st  form-elegant">
  

    <!--Form without header-->
    <div class="  row justify-content-md-center">

        <div class="card-body mx-4 card col-4 ">

            <!--Header-->
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>Sign in</strong></h3>
            </div>

            <!--Body-->
			<form action="<?php echo base_url('employee/loginpost'); ?>" method="post" >
            <div class="md-form">
                <input type="text" id="emp_email" name="emp_email"  class="form-control">
                <label for="Form-email1">Your email</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="emp_password" name="emp_password" class="form-control">
                <label for="Form-pass1">Your password</label>
                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
            </div>

            <div class="text-center mb-3">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
            </div>
			</form>

        </div>
		<div class="clearfix"> &nbsp;</div>
		
		
			<!--forget password-->
		<div class="card-body mx-4 card col-4 ">
			<form>
				<p class="h5 text-center mb-4">Forgot Password</p>

				<div class="md-form">
					<i class="fa fa-user prefix grey-text"></i>
					<input type="text" id="orangeForm-name" class="form-control">
					<label for="orangeForm-name">Your name</label>
				</div>
				<div class="md-form">
					<i class="fa fa-envelope prefix grey-text"></i>
					<input type="text" id="orangeForm-email" class="form-control">
					<label for="orangeForm-email">Your email</label>
				</div>

				<div class="md-form">
					<i class="fa fa-lock prefix grey-text"></i>
					<input type="password" id="orangeForm-pass" class="form-control">
					<label for="orangeForm-pass"> Password</label>
				</div>
				<div class="md-form">
					<i class="fa fa-lock prefix grey-text"></i>
					<input type="password" id="orangeForm-pass" class="form-control">
					<label for="orangeForm-pass">Confirm Password</label>
				</div>

				<div class="text-center mb-3">
					<button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Reset Password</button>
				</div>

			</form>
			
			
			
			

        </div>

     
    </div>
    <!--/Form without header-->

</section>
            
