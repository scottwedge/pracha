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
<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fluid" role="document" style="padding:20px;">
        <div class="modal-content">
          <div class="modal-header bg-indigo text-white" style="border-radius:0px;">
            <h5 class="modal-title" id="exampleModalLongTitle">Payment Policy</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <h3 class="text-warning">Privacy</h3>
            <p>We Value Your Privacy</p>
            <p>PRACHA ONLINE PRIVACY POLICY STATEMENT HIGHLIGHTS</p>
            <br>
            <p>Privacy Policy</p>
            <p>PROTECTING PERSONAL INFORMATION IS A RESPONSIBILITY THAT WE TAKE VERY SERIOUSLY</p>
              <br>
            <p>And we also expect the same from you. Pracha Technologies is committed to transparency and choice regarding protecting the privacy of our client’ s personal information as well as that of all visitors to our website.</p>
            <p>This privacy policy outlines what data Pracha Technologies Pvt. Ltd. (herein referred to as "PRACHA", "PRACHATECH", "We", "Our", or "Us") collects, stores, and process about you. It also explains your rights to your data and how you can contact us if you have any questions. We reserve the right to alter this privacy statement at our discretion and encourage you to check this section from time to time to be aware of any changes.</p>
              <br>
            <p>To whom this policy applies</p>
            <p>This privacy statement applies to individuals ("users" or "you") who interact with our website, subscribe to any of our products, request information, or use the chat support (herein collectively referred to as "services").</p>
              <br>
            <p>How we collect data</p>
            <p>Depending on services you use, we collect data from one or more of these three sources:  </p>
            <p>1. Data we request:<br>
                When you request any of our services, we may ask, store, and process any / any / all these data categories:
                <br>
                Your Name
                <br>
                Your Country
                <br>
                Your Email Id
                <br>
                Your Skype Id
                <br>
                Your Phone Number
                <br>
                Other information that you choose to share
                </p>
            <p>2. Cookies:<br>
Cookies are small files placed on your computer when you first visit our website that helps analyze web traffic and tracks you across the web. The collection of this data is based on “implied consent”, i.e. we assume you agree to our terms of usage unless you explicitly opt out. You can opt out by changing your browser settings to not accept cookies, browsing in anonymous mode, or by not using our website.
</p>
            <p>We also have on our website links to many third-party services and use third-party tools, the privacy policy of which may be different from us and we assume no responsibility for their compliance. The third-party tools we use cookies to collect data are:</p>
            <p>Google Analytics - It collects data related to the device/browser, IP address and on-site activities to measure and report statistics about your interactions on the web. It is used to enhance user experience and we do not access your personally identifiable information. To understand how Google Analytics handles your data, read their privacy policy.</p>
            <p>3. External tools:<br>
We also use some tools to collect data about your usage and behavior beyond our website that include:
</p>
            <p>Social plugins - We have on our website links to many social media platforms for more engagement and visibility. Once you click on any of those links to visit any of those platforms, they collect, use, and share your data as per their own privacy policies, of which we assume no responsibility. We encourage you to check out the privacy policies of the social platform we use: Facebook, Twitter, Google Plus, LinkedIn, YouTube, Behance, Dribble.</p>
            <p>Why we collect these data<br>
The data we collect from these cookies can be personally identifiable or anonymous. We collect this data to:
</p>
            <p>Offer personalized service
<br>
Create a secure platform
<br>
Improve performance
<br>
Statistical analysis
</p>
            <p>How we secure your data<br>
The security of your personal data is of utmost importance to us and we take all appropriate measures to protect it. There are requisite technical, administrative, and physical barriers in place to ensure your data is accessible only to authorized persons or systems. In case we discover a data breach, we immediately (within 72 hours) inform the local authorities and affected users.
</p>
            <p>How we use your personal data<br>
We store and process the data we collect for our legitimate interests and service delivery fully under the ambit of law. We use your data:
</p>
            <p>To provide and maintain our services.
<br>
To improve our services and website experience.
<br>
To communicate with you via email, notification, or any other contact information that you have provided.
<br>
To provide any third-party requisite data that helps enable our services.
<br>
For internal research and management.
<br>
For fraud detection.
<br>
To enforce our terms and conditions.
</p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
          </div>
        </div>
      </div>
  </div>
  <!-- Central Modal Small -->
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


