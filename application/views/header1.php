<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pracha tech</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/mdb.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/css/compiled.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/jquery-3.2.1.min.js"></script>
	  
</head>

<body>
<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark scrolling-navbar" id="home" >
		<?php if($this->session->userdata('userdetails')){  ?>
		<a href="<?php echo base_url('employee/profile'); ?>"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo"></strong></a>
		<?php }else{ ?>
				<a href="<?php echo base_url('employee'); ?>"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo"></strong></a>

		<?php } ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
		<?php if($this->session->userdata('userdetails'))
		{ 
		$userdetails=$this->session->userdata('userdetails');
		?>
              <ul class="nav navbar-nav  ml-auto">
            <!--<li class="nav-item ">
                <a href="<?php echo base_url(); ?>" class="nav-link dropdown-toggle"> <span class=" ">account</span></a>
            </li> --> 
				
				
				<li class="nav-item">
				<div class="dropdown">
					<a href="<?php echo base_url('employee/profile'); ?>" class="nav-link dropdown-toggle"> <span class=" "><?php echo $userdetails['emp_name'];?></span></a>
				  <div class="dropdown-content1">
					<a href="<?php echo base_url('employee/logout'); ?>">logout</a>
					<a href="<?php echo base_url('employee/changepassword'); ?>">Change Password</a>
					
				  </div>
				</div>
            </li>
			<li class="nav-item"> &nbsp;</li>
			<li class="nav-item"> &nbsp;</li>
			<li class="nav-item"> &nbsp;</li>
			
            
        
        </ul>
		<?php } ?>
          
        </div>
    </nav>
	

</header><a class="btn-floating btn-lg scrolltotop bg-dark">
<i class="fa fa-arrow-up"></i></span></a>
<script>
$('.scrolltotop').on('click', function() {
          $('html, body').animate({ scrollTop: 0 }, 800);
          return false;
      });

      $(document).scroll(function() {
          var y = $(this).scrollTop();
          if (y > 300) {
              $('.scrolltotop').fadeIn();
          } else {
              $('.scrolltotop').fadeOut();
          }
      });
</script>
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 120});   

  // Add smooth scrolling on all links inside the navbar
  $("#navbarSupportedContent a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top 
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
	 
	
    }  // End if
	  
  });
});
</script>

