<?php include_once("includes/dbconnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include_once("includes/common-css.html"); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/index.css">
</head>
<body>

	<div class="whole-wrapper">
		<?php include_once("navigation.html") ?>

		<main>
			<div class="main-top">

				<div id="myCarousel" class="carousel slide">
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

			    <div class="category-wrapper">
		            <div class="all-categories">
		                <div class="category category_1" data-c-name="Birthday">
		                    <a class="category-select" href="javascript:void(0)">
		                        <!-- <img class="category-icon" src="assets/images/icon.png"></i> -->
		                        <label class="category-label">Birthday</label>
		                    </a>
		                </div>
		                <div class="category category_2" data-c-name="Wedding">
		                    <a class="category-select" href="javascript:void(0)">
		                    	<!-- <img class="category-icon" src="assets/images/icon.png"></i> -->
		                        <label class="category-label">Wedding</label>
		                    </a>
		                </div>
		                <div class="category category_3" data-c-name="Cocktail Party">
		                    <a class="category-select" href="javascript:void(0)">
		                        <!-- <img class="category-icon" src="assets/images/icon.png"></i> -->
		                        <label class="category-label">Cocktail Party</label>
		                    </a>
		                </div>
		                <div class="category category_4" data-c-name="Team Outing Party">
		                    <a class="category-select" href="javascript:void(0)">
		                        <!-- <img class="category-icon" src="assets/images/icon.png"></i> -->
		                        <label class="category-label">Team Outing Party</label>
		                    </a>
		                </div>
		                <div class="category category_5" data-c-name="Engagement">
		                    <a class="category-select" href="javascript:void(0)">
		                        <!-- <img class="category-icon" src="assets/images/icon.png"></i> -->
		                        <label class="category-label">Engagement</label>
		                    </a>
		                </div>
		                <div class="category category_6" data-c-name="Other Occasion">
		                    <a class="category-select" href="javascript:void(0)">
		                        <!-- <img class="category-icon" src="assets/images/icon.png"></i> -->
		                        <label class="category-label">Other Occasion</label>
		                    </a>
		                </div>
		            </div>
		        </div>
		        <div class="plan">
		        	<div class="plan-top-bar">
		        		<div class="plan-selected-opt-wrapper">
			        		<div class="plan-category-name plan-selected-opt">
			        			<div class="plan-selected-opt plan-selected_1">
				                    <a class="plan-selected" href="javascript:void(0)">
				                        <!-- <img class="plan-selected-icon" src="assets/images/icon.png"></i> -->
				                        <label class="plan-selected-label">Birthday</label>
				                    </a>
				                </div>
			        		</div>
			        		<div id="plan-close">X</div>
		            	</div>
		            </div>
		        </div>
	        </div>

	        <div class="work-process section">
	        	<h1 class="work-process__heading">How we Do It?</h1>
	        	<div class="work-process__steps-container">
	        		<div class="work-process__each-step">
	        			<!-- <div class="work-process__each-step__img-wrappper">
							<img class="work-process__each-step__img" src="<?php  echo $rootpath; ?>assets/images/logo.png">
						</div> -->
						<div class="work-process__each-step__desc-wrappper">
							Lorem ipsum dolor sit amet.
						</div>
	        		</div>
	        		<div class="work-process__each-step">
	        			<!-- <div class="work-process__each-step__img-wrappper">
							<img class="work-process__each-step__img" src="<?php  echo $rootpath; ?>assets/images/logo.png">
						</div> -->
						<div class="work-process__each-step__desc-wrappper">
							Lorem ipsum dolor sit amet.
						</div>
	        		</div>
	        		<div class="work-process__each-step">
	        			<!-- <div class="work-process__each-step__img-wrappper">
							<img class="work-process__each-step__img" src="<?php  echo $rootpath; ?>assets/images/logo.png">
						</div> -->
						<div class="work-process__each-step__desc-wrappper">
							Lorem ipsum dolor sit amet.
						</div>
	        		</div>
	        	</div>
	        </div>

		</main>

	</div>

	<?php include_once("overlay-modals.php") ?>

	<?php include_once("footer.html") ?>
	<?php include_once("includes/common-js.html"); ?>

    <!-- Script to Activate the Carousel -->
    <script>
	    $(function(){
		    $('.carousel').carousel({
		        interval: 5000
		    });
		});
    </script>
    <script type="text/javascript" src="assets/js/index.js"></script>



</body>
</html>
