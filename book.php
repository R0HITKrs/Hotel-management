<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Hotel Myriad | Book</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Hotel Myriad Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
	  
	  <script>
	function u()
	{
		
		alert("BOOKED SUCCESSFULLY");
	}
	</script>
	
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
     <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
      <!-- //font-awesome icons -->
	  <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
      <!--stylesheets-->
	  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
   </head>
   <body>
   <!-- Navigation -->
<header>
	<div class="top-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-uppercase" href="index.php">Hotel Myriad</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Testimonial</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="index.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="font-weight:bold; color:red;" href="manager.php">MANAGER</a>
						</li>
						<li class="nav-item">
							<a href="admin.php"  style="font-weight:bold; color:red;" class="nav-link" >ADMIN</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!-- //Navigation -->
<!--Slider-->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides callbacks callbacks1" id="slider4">
			<li>
				<div class="slider-img1">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h1 class="text-uppercase mb-3">Enjoy the greatest pleasure in our hotel </h1>
								<p>Exotic pool bar serving barman special cocktails & mocktails, with wide range of single 
								malt, national and international wine varities.</p>

								<a href="single.html" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-img2">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h4 class="text-uppercase mb-3">Enjoy the food and rooms in our hotel</h4>
								<p>Outlet with signature seafood dishes like Lobster Thermidor, Royal seafood platter, local
								delicious-Crab Xec Xec, Grills, Sizzlers and steaks.</p>

								<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-img3">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h4 class="text-uppercase mb-3">Enjoy the best services in our hotel</h4>
								<p>Air conditioned multicuisine restaurant with partially open deck area overviewing sea.</p>

								<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-img4">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
									<h4 class="text-uppercase mb-3">Enjoy the food and rooms in our hotel</h4>
								<p>Outlet with signature seafood dishes like Lobster Thermidor, Royal seafood platter, local
								delicious-Crab Xec Xec, Grills, Sizzlers and steaks.</p>

								<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<div class="clearfix"></div>
		</ul>
</div>

<!--//Slider-->
      <!-- //banner -->
	  
	<!-- Appointment -->
<section class="appointment py-5" id="appointment">
	<div class="test_agile_info">
		<div class="container py-md-3">
		 <div class="w3-head-all mb-3 w3-head-col">
		         <?php
				 echo"<h1 style=color:white;>hi, ".$_SESSION['uname']." !</h1>";
				 ?>
				 <h3>Book a Room</h3>
		       </div>
			   
			<div class="contact_grid_right">
				<form action="bookaction.php" method="post">
					<div class="contact_left_grid">
						<div class="form-group">
							<input class="form-control" type="text" name="name" placeholder="Your Name" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="phn" placeholder="Phone Number" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" name="email" placeholder="Your Email" required="">
						</div>
						<div class="form-group">
						<select name="type">
									<option>Select Type</option>
									<option>Deluxe Room</option>
									<option>Luxury Room</option>
									<option>Guest House</option> 
									<option>Single Room</option> 
								</select>
						</div>
						<div class="form-group">
							<input id="datepicker" name="date" type="text" placeholder="Date Of Check In" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
						<input class="form-control" type="submit" value="Book Now">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- //Appointment -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"> Hotel Myriad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nestled in the heart of Orlim, HOTEL MYRIAD, a collection of Luxury Service hotel Apartments is situated in close proximity
		to all the beautiful beaches. Set in a lavish residental development, these Mediterranean style service hotel apartments are
		designed with meticulous care and attention to guest comfort and convenience. Luxuriously finished, spacious and beautifully
		appointed, these two  bedroom hotel apartments provide a welcome haven for a truely enjoyable stay.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	  
	        <script src='js/jquery-2.2.3.min.js'></script>
      <!-- //js  working-->
     
	<!-- Banner Responsive slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->

      <!--// banner-->
	  <!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>

	<!-- //flexSlider -->
<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!-- odometer-script -->
	<script src="js/odometer.js"></script>
	<script>
		window.odometerOptions = {
			format: '(ddd).dd'
		};
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats1').html(25);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats2').html(330);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats3').html(542);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats4').html(222);
		}, 1500);
	</script>
	<!-- //odometer-script -->

      <!-- start-smoth-scrolling -->
      <script  src="js/move-top.js"></script>
      <script  src="js/easing.js"></script>
      <script >
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         	/*
         		var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear' 
         		};
         	*/
         
         	$().UItoTop({ easingType: 'easeOutQuart' });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.js"></script>
      <!-- //bootstrap working-->
	     </body>
</html>