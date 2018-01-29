
<div class="selectstate">


 <section id="contact-scroll" class="our_service padding-10 ptb-xs-60 bod-st">
    <div class="container-sty card ptb-15">
		<div class="row">
	<div class="col-sm-12 mb-20 pt-30">
					<h2 class="text-center">
					
                    <span class="tit">
						 Contact us
						</div>
					</h2>
	</div>

	<hr>
	<div class="row">

	<div class="col-md-6">
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
	<form action="<?php echo base_url('pracha/contactpost');?>" method="post" enctype="multipart/form-data" >

   

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="name" name="name" class="form-control" required>
        <label for="form3">Your name</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="email" id="email" name="email" class="form-control" required>
        <label for="form2">Your email</label>
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix grey-text"></i>
        <input type="text" id="subject" name="subject" class="form-control" required>
        <label for="form34">Subject</label>
    </div>

    <div class="md-form">
        <i class="fa fa-pencil prefix grey-text"></i>
        <textarea type="text" id="message" name="message" class="md-textarea" style="height: 100px" required></textarea>
        <label for="form8">Your message</label>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-warning">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
    </div>

</form>
<!-- Form contact -->
            
			  </div>
			  <div class="col-md-6">
				<div>
					<h5><strong>Prachatech software solutions</strong></h5>
					<p>Phone Number:040-48541273</p>
					<p>
					H.No: 16-2-227/177,<br>
					1st Floor,<br>
					Sardar Patel Nagar, Bhagat Singh Nagar, Kukatpally Housing Board Colony, Kukatpally
Hyderabad, Telangana 500085.</p>
				</div>
				<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d951.3161068305509!2d78.38797423869858!3d17.49488629216747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91f4f553e453%3A0x912891756062ff71!2sSri+Vani+Nilayam%2C+Sardar+Patel+Nagar%2C+Bhagat+Singh+Nagar%2C+Kukatpally+Housing+Board+Colony%2C+Kukatpally%2C+Hyderabad%2C+Telangana+500085!5e0!3m2!1sen!2sin!4v1515073781683" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
			  </div>
			  </div>
			  
		</div>
	</div>
</section>


<div class="clearfix">&nbsp;</div>
