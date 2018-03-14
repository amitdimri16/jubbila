<?php
	include_once("includes/dbconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- WEB STYLESHEETS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Lobster" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/jquery.fullPage.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/clean.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/index1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/overlay-modals.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/plan.css">

</head>
<body>

	<div class="whole-wrapper">

		<?php include_once("navigation.html") ?>

		<main id="fullpage">
			
			<div id="myCarousel" class="carousel slide section">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		            <li data-target="#myCarousel" data-slide-to="1"></li>
		            <li data-target="#myCarousel" data-slide-to="2"></li>
		            <li data-target="#myCarousel" data-slide-to="3"></li>
		            <li data-target="#myCarousel" data-slide-to="4"></li>
		            <li data-target="#myCarousel" data-slide-to="5"></li>
		        </ol>

		        <!-- Wrapper for slides -->
		        <div class="carousel-inner">
		            <div class="item active">
		                <div class="fill" style="background-image:url('assets/images/h0.jpg');"></div>
		                <div class="carousel-caption">
		                    <h1>A Full-Width Image Slider Template</h1>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" style="background-image:url('assets/images/h1.jpg');"></div>
		                <div class="carousel-caption">
		                    <h1>Caption 2</h1>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" style="background-image:url('assets/images/h2.jpg');"></div>
		                <div class="carousel-caption">
		                    <h1>Caption 3</h1>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" style="background-image:url('assets/images/h3.jpg');"></div>
		                <div class="carousel-caption">
		                    <h1>Caption 3</h1>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" style="background-image:url('assets/images/h4.jpg');"></div>
		                <div class="carousel-caption">
		                    <h1>Caption 3</h1>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" style="background-image:url('assets/images/h5.jpg');"></div>
		                <div class="carousel-caption">
		                    <h1>Caption 3</h1>
		                </div>
		            </div>
		        </div>

		        <!-- Controls -->
		        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		            <span class="icon-prev"></span>
		        </a>
		        <a class="right carousel-control" href="#myCarousel" data-slide="next">
		            <span class="icon-next"></span>
		        </a>
		    </div>

		    <div class="category-wrapper section">
	            <div class="all-categories">
	                <div class="category category_1">
	                    <a class="category-select" href="">
	                        <img class="category-icon" src="assets/images/logo.png"></i>
	                        <label class="category-label">Automotive</label>
	                    </a>
	                </div>
	                <div class="category category_2">
	                    <a class="category-select" href="">
	                        <i class="category-icon material-icons">cake</i>
	                        <label class="category-label">Electronic Appliances</label>
	                    </a>
	                </div>
	                <div class="category category_3">
	                    <a class="category-select" href="">
	                        <i class="category-icon fa fa-cogs" aria-hidden="true"></i>
	                        <label class="category-label">Tools and Hardware</label>
	                    </a>
	                </div>
	                <div class="category category_4">
	                    <a class="category-select" href="">
	                        <i class="category-icon fa fa-cutlery" aria-hidden="true"></i>
	                        <label class="category-label">Kitchenware</label>
	                    </a>
	                </div>
	                <div class="category category_5">
	                    <a class="category-select" href="">
	                        <i class="category-icon fa fa-cogs" aria-hidden="true"></i>
	                        <label class="category-label">Apparel and Footware</label>
	                    </a>
	                </div>
	                <div class="category category_6">
	                    <a class="category-select" href="">
	                        <i class="category-icon fa fa-pencil" aria-hidden="true"></i>
	                        <label class="category-label">Stationary</label>
	                    </a>
	                </div>
	                <div class="category category_7">
	                    <a class="category-select" href="">
	                        <i class="category-icon fa fa-gamepad" aria-hidden="true"></i>
	                        <label class="category-label">Toys and Games</label>
	                    </a>
	                </div>

	            </div>
	        </div>

	        <div class="work-process section">
	        	<h1 class="work-process__heading">How we Do It?</h1>
	        	<div class="work-process__steps-container">
	        		<div class="work-process__each-step">
	        			<div class="work-process__each-step__img-wrappper">
							<img class="work-process__each-step__img" src="<?php  echo $rootpath; ?>assets/images/monkey-face.png">
						</div>
						<div class="work-process__each-step__desc-wrappper">
							Lorem ipsum dolor sit amet.		
						</div>
	        		</div>
	        		<div class="work-process__each-step">
	        			<div class="work-process__each-step__img-wrappper">
							<img class="work-process__each-step__img" src="<?php  echo $rootpath; ?>assets/images/monkey-face.png">
						</div>
						<div class="work-process__each-step__desc-wrappper">
							Lorem ipsum dolor sit amet.		
						</div>
	        		</div>
	        		<div class="work-process__each-step">
	        			<div class="work-process__each-step__img-wrappper">
							<img class="work-process__each-step__img" src="<?php  echo $rootpath; ?>assets/images/monkey-face.png">
						</div>
						<div class="work-process__each-step__desc-wrappper">
							Lorem ipsum dolor sit amet.		
						</div>
	        		</div>
	        	</div>
	        </div>

		</main>

	</div>

	<?php include_once("overlay-modals.php") ?>


	<!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo $rootpath; ?>assets/js/navigation.js"></script>
	<script type="text/javascript" src="<?php echo $rootpath; ?>assets/js/jquery.fullPage.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
	    

	    $(document).ready(function() {
			$('#fullpage').fullpage();

			$('.carousel').carousel({
		        interval: 5000
		    });
		});
    </script>


</body>
</html>
