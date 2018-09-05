<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo isset($meta_title)?$meta_title:''; ?></title>
	<meta name="description" content="<?php echo isset($meta_description)?$meta_description:''; ?>" />
	<meta name="keywords" content="<?php echo isset($meta_keywords)?$meta_keywords:''; ?>" />
    
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
   <link href="<?php echo base_url(); ?>assets/vendor/css/animate.css" rel="stylesheet">
	
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
   <a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<ul class="nav navbar-nav  ml-auto">
				<li class="nav-item <?php if($currentURL==base_url() || $currentURL==base_url('')){ echo "active-menu"; } ?> " id="homepageative"><a href="<?php echo base_url(); ?>" class="nav-link"> <span class=" ">Home</span></a></li>  
				<li class="nav-item sm-hide <?php if($currentURL==base_url('start_up') ||$currentURL==base_url('web-designing-agency-in-hyderabad') || $currentURL==base_url('enterprise') || $currentURL==base_url('servicesrm') || $currentURL==base_url('web-development-company-in-hyderabad') || $currentURL==base_url('mobile-app-development-company-in-hyderabad') || $currentURL==base_url('digital-marketing-company-in-hyderabad') || $currentURL==base_url('ecommerce') || $currentURL==base_url('maintainence') || $currentURL==base_url('website_maintainence') || $currentURL==base_url('web-designing-services-in-hyderabad') || $currentURL==base_url('on_demand_services')){ echo "active-menu"; } ?>" > 
				<div class="dropdown">
					<a href="<?php echo base_url('web-designing-services-in-hyderabad'); ?>" class="nav-link dropdown-toggle"> <span class=" ">Our Services</span></a>
				  <div class="dropdown-content1">
				  <div class="row">
				  <div class="col-md-6 bor-left">
					<a href="<?php echo base_url('web-designing-agency-in-hyderabad'); ?>">Web Designing</a>
					<a href="<?php echo base_url('web-development-company-in-hyderabad'); ?>">Web Development</a>
					<a href="<?php echo base_url('mobile-app-development-company-in-hyderabad'); ?>">Mobile Applications</a>
					<a href="<?php echo base_url('digital-marketing-company-in-hyderabad'); ?>"> Digital Marketing</a>
					<!--<a href="<?php echo base_url('seo'); ?>">SEO</a>-->
				
					<a href="<?php echo base_url('website_maintainence'); ?>"> Software Maintenance</a>
					
				  </div>
				  <div class="col-md-6">
					<a href="<?php echo base_url('start_up'); ?>">Start-Up</a>
					<a href="<?php echo base_url('enterprise'); ?>">Enterprise</a>
						<a href="<?php echo base_url('ecommerce'); ?>">E-Commerce</a>
						<a href="<?php echo base_url('on_demand_services'); ?>">On Demand Services</a>
					
				  </div>
				  </div>
				  </div>
				</div>
            </li>
			<li class="nav-item md-hide <?php if($currentURL==base_url('start_up') || $currentURL==base_url('enterprise') || $currentURL==base_url('servicesrm') || $currentURL==base_url('develop_service') || $currentURL==base_url('mobile_application') || $currentURL==base_url('digitalmarketing') || $currentURL==base_url('ecommerce') || $currentURL==base_url('maintainence') || $currentURL==base_url('services')){ echo "active-menu"; } ?>" > 
				<div class="dropdown">
					<a  class="nav-link dropdown-toggle"> <span class=" ">Our Services</span></a>
				  <div class="dropdown-content1">
				  <div class="row">
				  <div class="col-md-6 bor-left">
					<a href="<?php echo base_url('web-designing-agency-in-hyderabad'); ?>">Web Designing</a>
					<a href="<?php echo base_url('web-development-company-in-hyderabad'); ?>">Web Development</a>
					<a href="<?php echo base_url('mobile-app-development-company-in-hyderabad'); ?>">Mobile Applications</a>
					<a href="<?php echo base_url('digital-marketing-company-in-hyderabad'); ?>"> Digital Marketing</a>
					
				
					<a href="<?php echo base_url('website_maintainence'); ?>"> Software Maintenance</a>
					
				  </div>
				  <div class="col-md-6">
					<a href="<?php echo base_url('start_up'); ?>">Start-Up</a>
					<a href="<?php echo base_url('enterprise'); ?>">Enterprise</a>
					<a href="<?php echo base_url('ecommerce'); ?>">E-Commerce</a>
					<a href="<?php echo base_url('on_demand_services'); ?>">On Demand Services</a>
					
				  </div>
				  </div>
				  </div>
				</div>
            </li>
				
				
			<li class="nav-item <?php if($currentURL==base_url('portfolio')){ echo "active-menu"; } ?>"> <a href="<?php echo base_url('portfolio');?>" class="nav-link"> <span class=" ">Portfolio</span></a></li>
			<li class="nav-item <?php if($currentURL==base_url('industries')){ echo "active-menu"; } ?>"> <a href="<?php echo base_url('industries');?>" class="nav-link"> <span class=" ">Industries</span></a></li>
			<li class="nav-item <?php if($currentURL==base_url('careers')){ echo "active-menu"; } ?>" ><a href="<?php echo base_url('careers');?>" class="nav-link"> <span class=" ">Careers</span></a></li>
				<li class="nav-item <?php if($currentURL==base_url('blog') || $currentURL==base_url('blog/how_to_create_manage_and_optimize_a_youtube_channel') || $currentURL==base_url('blog/social_media_marketing_and_its_benefits') || $currentURL==base_url('blog/what_is_onpage_and_offpage_optimization') || $currentURL==base_url('blog/what_is_ecommerce_and_its_types') || $currentURL==base_url('blog/Web_development_a_practical_guide_to_a_Web_developer') || $currentURL==base_url('blog/importance_of_mobile_apps_in_business') || $currentURL==base_url('blog/key_elements_to_design_a_best_website') || $currentURL==base_url('blog/how_to_start_and_earn_in_affiliate_marketing')){ echo "active-menu"; } ?>"><a href="<?php echo base_url('blog');?>" class="nav-link"> <span class=" ">Blog</span></a></li>
				<li class="nav-item <?php if($currentURL==base_url('contactus')){ echo "active-menu"; } ?>"><a href="<?php echo base_url('contactus');?>" class="nav-link"> <span class=" ">Contact us</span></a></li>
			</ul>
        </div>
   </nav>
</header>
<!--<a class="btn-floating btn-lg scrolltotop bg-dark">
<i class="fa fa-arrow-up"></i></span></a>-->
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


