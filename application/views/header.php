<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
	<link rel="icon" href="<?php echo base_url(); ?>assets/vendor/img/fav.png" >
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/mdb.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/css/compiled.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
	<link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/jquery-3.2.1.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114861070-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114861070-1');
</script>
</head>

<body>
<!--Main Navigation-->
<header>
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark scrolling-navbar" id="home" >
   <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<ul class="nav navbar-nav  ml-auto">
				<li class="nav-item <?php if($currentURL==base_url()){ echo "active-menu"; } ?> " id="homepageative"><a href="<?php echo base_url(); ?>" class="nav-link"> <span class=" ">Home</span></a></li>  
				<li class="nav-item sm-hide <?php if($currentURL==base_url('start_up.xml') || $currentURL==base_url('enterprise.xml') || $currentURL==base_url('servicesrm.xml') || $currentURL==base_url('develop_service.xml') || $currentURL==base_url('mobile_application.xml') || $currentURL==base_url('digitalmarketing.xml') || $currentURL==base_url('ecommerce.xml') || $currentURL==base_url('maintainence.xml') || $currentURL==base_url('services.xml')){ echo "active-menu"; } ?>" > 
				<div class="dropdown">
					<a href="<?php echo base_url('services'); ?>" class="nav-link dropdown-toggle"> <span class=" ">Our Services</span></a>
				  <div class="dropdown-content1">
				  <div class="row">
				  <div class="col-md-6 bor-left">
					<a href="<?php echo base_url('ui_and_ux_design'); ?>">UI & UX Designing</a>
					<a href="<?php echo base_url('web_development'); ?>">Web Development</a>
					<a href="<?php echo base_url('mobile_applications'); ?>">Mobile Applications</a>
					<a href="<?php echo base_url('digital_marketing'); ?>"> Digital Marketing</a>
					<!--<a href="<?php echo base_url('seo'); ?>">SEO</a>-->
					<a href="<?php echo base_url('ecommerce'); ?>">E-Commerce</a>
					<a href="<?php echo base_url('website_maintainence'); ?>"> Software Maintenance</a>
					
				  </div>
				  <div class="col-md-6">
					<a href="<?php echo base_url('start_up'); ?>">Start-Up</a>
					<a href="<?php echo base_url('enterprise'); ?>">Enterprise</a>
					
				  </div>
				  </div>
				  </div>
				</div>
            </li>
			<li class="nav-item md-hide <?php if($currentURL==base_url('start_up.xml') || $currentURL==base_url('enterprise.xml') || $currentURL==base_url('servicesrm.xml') || $currentURL==base_url('develop_service.xml') || $currentURL==base_url('mobile_application.xml') || $currentURL==base_url('digitalmarketing.xml') || $currentURL==base_url('ecommerce.xml') || $currentURL==base_url('maintainence.xml') || $currentURL==base_url('services.xml')){ echo "active-menu"; } ?>" > 
				<div class="dropdown">
					<a  class="nav-link dropdown-toggle"> <span class=" ">Our Services</span></a>
				  <div class="dropdown-content1">
				  <div class="row">
				  <div class="col-md-6 bor-left">
					<a href="<?php echo base_url('ui_and_ux_design'); ?>">UI & UX Designing</a>
					<a href="<?php echo base_url('web_development'); ?>">Web Development</a>
					<a href="<?php echo base_url('mobile_applications'); ?>">Mobile Applications</a>
					<a href="<?php echo base_url('digital_marketing'); ?>"> Digital Marketing</a>
					<!--<a href="<?php echo base_url('seo'); ?>">SEO</a>-->
					<a href="<?php echo base_url('ecommerce'); ?>">E-Commerce</a>
					<a href="<?php echo base_url('website_maintainence'); ?>"> Software Maintenance</a>
					
				  </div>
				  <div class="col-md-6">
					<a href="<?php echo base_url('start_up'); ?>">Start-Up</a>
					<a href="<?php echo base_url('enterprise'); ?>">Enterprise</a>
					
				  </div>
				  </div>
				  </div>
				</div>
            </li>
				
				<!--<li class="nav-item"><a href="<?php echo base_url('pracha/howwework');?>" class="nav-link"> <span class=" ">How We work?</span></a></li>-->
			
				<!--<li class="nav-item">
				<div class="dropdown">
					<a class="nav-link dropdown-toggle"> <span class=" ">Pricing</span></a>
				  <div class="dropdown-content1">
					<a href="<?php echo base_url('price/design'); ?>">UI/UX Designing</a>
					<a href="<?php echo base_url('develop_service/price'); ?>">Web Development</a>
					<a href="<?php echo base_url('mobile_application/price'); ?>">Mobile Applications</a>
					<a href="<?php echo base_url('digitalmarketing/price'); ?>"> Digital Marketing</a>
					
					<a href="<?php echo base_url('ecommerce/price'); ?>">E-Commerce</a>
					<a href="<?php echo base_url('maintainence'); ?>"> Maintenance</a>
					
				  </div>
				</div>
            </li>-->
			<li class="nav-item <?php if($currentURL==base_url('industries.xml')){ echo "active-menu"; } ?>"> <a href="<?php echo base_url('industries');?>" class="nav-link"> <span class=" ">Industries</span></a></li>
			<li class="nav-item <?php if($currentURL==base_url('carriers.xml')){ echo "active-menu"; } ?>" ><a href="<?php echo base_url('carriers');?>" class="nav-link"> <span class=" ">Careers</span></a></li>
				<li class="nav-item <?php if($currentURL==base_url('blog.xml') || $currentURL==base_url('blog/how_to_create_manage_and_optimize_a_youtube_channel.xml') || $currentURL==base_url('blog/social_media_marketing_and_its_benefits.xml') || $currentURL==base_url('blog/what_is_onpage_and_offpage_optimization.xml')){ echo "active-menu"; } ?>"><a href="<?php echo base_url('blog');?>" class="nav-link"> <span class=" ">Blog</span></a></li>
				<li class="nav-item <?php if($currentURL==base_url('contactus.xml')){ echo "active-menu"; } ?>"><a href="<?php echo base_url('contactus');?>" class="nav-link"> <span class=" ">Contact us</span></a></li>
			</ul>
        </div>
   </nav>
</header>
<a class="btn-floating btn-lg scrolltotop bg-dark">
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


