<?php include_once("includes/dbconnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- WEB STYLESHEETS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Lobster|Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/css/bootstrap-slider.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/clean.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/plan.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/ion.rangeSlider.skinHTML5.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/jquery-ui.multidatespicker.css">
</head>
<body>

	<div class="plan-whole-wrapper">
		<div class="plan__top-bar">
			<i class="material-icons plan__top-bar--close">close</i>
		</div>
		<div class="plan__main-content-wrapper">
			<div class="plan__main-content--table">
				<div class="plan__main-content--table-cell">
					<div class="plan__main-content">
						<div class="plan__main-content__section plan__main-content__loc section--active" style="display: block;">
							<div class="section--table">
								<div class="section--t-cell">

									<p class="plan__main-content__section-heading">Location</p>

									<form class="plan__main-content__loc-form" action="" method="get">
					                    <input class="loc-form__input" type="search" placeholder="Type Location">
					                	<button type="button" class="loc-form__button material-icons">search</button>
						            </form>

						            <ul class="plan__main-content__loc__search-results">
						            	<li class="loc__search-results__item">sadsad</li>
						            	<li class="loc__search-results__item">sadsad</li>
						            	<li class="loc__search-results__item">sadsad</li>
						            	<li class="loc__search-results__item">sadsad</li>
						            	<li class="loc__search-results__item">sadsad</li>
						            	<li class="loc__search-results__item">sadsad</li>
						            </ul>

						            <ul class="plan__main-content__loc__popular">
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            	<li class="loc_popular__item">
						            		<p class="loc_popular__item__name">Rajpur Road</p>
						            	</li>
						            </ul>

								</div>
							</div>
						</div>


						<div class="plan__main-content__section plan__main-content__date">
							<div class="section--table">
								<div class="section--t-cell">
									<p class="plan__main-content__section-heading">Date</p>
									<div class="date-pick"></div>
								</div>
							</div>
						</div>
						
						<div class="plan__main-content__section plan__main-content__time">
							<div class="section--table">
								<div class="section--t-cell">
									<p class="plan__main-content__section-heading">Time</p>
									<ul class="plan__main-content__time-pick">
						            	<li class="time-pick__item">
						            		<img class="time-pick__item__icon" src="assets/images/logo.png">
						            		<div class="time-pick__item__box">
						            			<p class="time-pick__time-name">Morning</p>
						            			<p class="time-pick__time-range">7 am to 10 am</p>
						            		</div>
						            	</li>
						            	<li class="time-pick__item">
						            		<img class="time-pick__item__icon" src="assets/images/logo.png">
						            		<div class="time-pick__item__box">
						            			<p class="time-pick__time-name">Afternoon</p>
						            			<p class="time-pick__time-range">11 am to 4 pm</p>
						            		</div>
						            	</li>
						            	<li class="time-pick__item">
						            		<img class="time-pick__item__icon" src="assets/images/logo.png">
						            		<div class="time-pick__item__box">
						            			<p class="time-pick__time-name">Evening</p>
						            			<p class="time-pick__time-range">4 pm to 7 pm</p>
						            		</div>
						            	</li>
						            	<li class="time-pick__item">
						            		<img class="time-pick__item__icon" src="assets/images/logo.png">
						            		<div class="time-pick__item__box">
						            			<p class="time-pick__time-name">Night</p>
						            			<p class="time-pick__time-range">8 pm to 11:30 pm</p>
						            		</div>
						            	</li>
						            	<li class="time-pick__item">
						            		<img class="time-pick__item__icon" src="assets/images/logo.png">
						            		<div class="time-pick__item__box">
						            			<p class="time-pick__time-name">Full Day</p>
						            			<p class="time-pick__time-range">9 am to 7 pm</p>
						            		</div>
						            	</li>
						            </ul>
						        </div>
						    </div>
						</div>

						<div class="plan__main-content__section plan__main-content__guests">
							<div class="section--table">
								<div class="section--t-cell">
									<p class="plan__main-content__section-heading">Number of Guests</p>
						            <input type="text" id="guest-num" name="example_name" value="" />
						        	<p class="guests-value"></p>
						        </div>
						    </div>
						</div>

						<div class="plan__main-content__section plan__main-content__budget">
							<div class="section--table">
								<div class="section--t-cell">
									<p class="plan__main-content__section-heading">Per Guest Budget</p>
						            <input type="text" id="budget" name="example_name" value="" />
						            <p class="budget-value"></p>	           
						        </div>
						    </div>
						</div>


					</div>
				</div>
			</div>
		</div>
		<div class="plan__bottom-bar">
			<button class="material-icons plan__bottom-bar__left" data-sec-no="1">keyboard_arrow_left</button>
			<button class="material-icons plan__bottom-bar__right" data-sec-no="1">keyboard_arrow_right</button>
		</div>
	</div>






	<!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.multidatespicker.js"></script>
    <script type="text/javascript" src="assets/js/plan.js"></script>

	

</body>
</html>