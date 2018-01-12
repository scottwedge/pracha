<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Company website</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/compiled.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	  
</head>

<body>
<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark scrolling-navbar" id="home" >
   <img src="img/logo.png" alt="logo"></strong>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >

              <ul class="nav navbar-nav  ml-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link"> <span class=" ">Home</span></a>
            </li>  
			<li class="nav-item">
				<div class="dropdown">
					<a href="#seric-sc" class="nav-link dropdown-toggle"> <span class=" ">Our Products</span></a>
				  <div class="dropdown-content1">
					<a href="services.php">Our services!</a>
					<a href="solutions.php">Our solutions!</a>
					<a href="#">Our unique benefits</a>
				  </div>
				</div>
            </li>
			
            
			<li class="nav-item">
                <a href="#proc-scroll" class="nav-link"> <span class=" ">How We work?</span></a>
            </li>
			
			<li class="nav-item">
                <a href="#team-scroll" class="nav-link"> <span class=" ">Team</span></a>
            </li>
			<li class="nav-item">
				<div class="dropdown">
					<a href="#pricings" class="nav-link dropdown-toggle"> <span class=" ">Pricing</span></a>
				  <div class="dropdown-content1">
					<a href="#">Pricing</a>
					<a href="#">Estimate your project?</a>
					
				  </div>
				</div>
            </li>
			
				
			
			<li class="nav-item">
                <a href="Carriers.php" class="nav-link"> <span class=" ">Carriers</span></a>
            </li>
			<li class="nav-item">
                <a href="#contact-scroll" class="nav-link"> <span class=" ">Contact us</span></a>
            </li>
            
        
        </ul>
          
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
  $('body').scrollspy({target: ".navbar", offset: 50});   

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

