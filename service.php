<?php
	include_once("includes/dbconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	
	<?php include_once("includes/common-css.html"); ?>

</head>
<body>

	<div class="whole-wrapper">

		<?php include_once("navigation.html") ?>

		<main>
			<div class="main-content-wrapper">

<?php

		$serviceType = $_GET['type'];

		if($serviceType == 'venues') {
			// echo "venues";
?>

			<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/service-venues.css">
			<h2 class="service-type-title">Venues <hr noshade="noshade"></h2>

			<div class="venue-wrapper">

				<div class="venue">
					<div class="venue__detail-wrap">
						<img class="venue__detail-wrap__img" src="assets/images/venue.jpg">
						
						<p class="venue__detail__title">Standard Balloon Décor</p>
						<div class="venue__price-wrap">
							<p class="venue__price__title">Starting from</p>
	                        <p class="venue__price venue__price--not-our">₹ 150.00</p>
	                        <p class="venue__price venue__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="venue">
					<div class="venue__detail-wrap">
						<img class="venue__detail-wrap__img" src="assets/images/venue.jpg">
						
						<p class="venue__detail__title">Standard Balloon Décor</p>
						<div class="venue__price-wrap">
							<p class="venue__price__title">Starting from</p>
	                        <p class="venue__price venue__price--not-our">₹ 150.00</p>
	                        <p class="venue__price venue__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="venue">
					<div class="venue__detail-wrap">
						<img class="venue__detail-wrap__img" src="assets/images/venue.jpg">
						
						<p class="venue__detail__title">Standard Balloon Décor</p>
						<div class="venue__price-wrap">
							<p class="venue__price__title">Starting from</p>
	                        <p class="venue__price venue__price--not-our">₹ 150.00</p>
	                        <p class="venue__price venue__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="venue">
					<div class="venue__detail-wrap">
						<img class="venue__detail-wrap__img" src="assets/images/venue.jpg">
						
						<p class="venue__detail__title">Standard Balloon Décor</p>
						<div class="venue__price-wrap">
							<p class="venue__price__title">Starting from</p>
	                        <p class="venue__price venue__price--not-our">₹ 150.00</p>
	                        <p class="venue__price venue__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="venue">
					<div class="venue__detail-wrap">
						<img class="venue__detail-wrap__img" src="assets/images/venue.jpg">
						
						<p class="venue__detail__title">Standard Balloon Décor</p>
						<div class="venue__price-wrap">
							<p class="venue__price__title">Starting from</p>
	                        <p class="venue__price venue__price--not-our">₹ 150.00</p>
	                        <p class="venue__price venue__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>
			</div>


<?php
		} elseif($serviceType == 'decorators') {
			// echo "decorators";
?>
				
    			<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/service-decorators.css">
				<h2 class="service-type-title">Decorators <hr noshade="noshade"></h2>

				<div class="decorators-wrapper">

					<div class="decorator">
						<div class="decorator--t-cell decorator__img-wrap">
							<img class="decorator__img" src="<?php echo $rootpath; ?>assets/images/gallery/11.jpg" />
						</div>
						<div class="decorator--t-cell decorator__detail-wrap">
							<p class="decorator__detail__title">Standard Balloon Décor</p>
							<ul class="decorator__detail-content">
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Duration of Decor</span>
									<span class="decorator__detail-content--t-cell">3-4 hours</span>
								</li>
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Experience of Decorator</span>
									<span class="decorator__detail-content--t-cell">1-2 years</span>
								</li>
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Total Ballons</span>
									<span class="decorator__detail-content--t-cell">400</span>
								</li>
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Ballon Types</span>
									<span class="decorator__detail-content--t-cell">Regular</span>
								</li>
							</ul>
						</div>
						<div class="decorator--t-cell decorator__price-wrap">
							<p class="decorator__price__title">Starting from</p>
	                        <p class="decorator__price decorator__price--not-our">₹ 150.00</p>
	                        <p class="decorator__price decorator__price--our">₹ 120.00</p>
	                        <p class="off-percent">20% OFF</p>
						</div>
					</div>

					<div class="decorator">
						<div class="decorator--t-cell decorator__img-wrap">
							<img class="decorator__img" src="<?php echo $rootpath; ?>assets/images/gallery/11.jpg" />
						</div>
						<div class="decorator--t-cell decorator__detail-wrap">
							<p class="decorator__detail__title">Standard Balloon Décor</p>
							<ul class="decorator__detail-content">
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Duration of Decor</span>
									<span class="decorator__detail-content--t-cell">3-4 hours</span>
								</li>
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Experience of Decorator</span>
									<span class="decorator__detail-content--t-cell">1-2 years</span>
								</li>
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Total Ballons</span>
									<span class="decorator__detail-content--t-cell">400</span>
								</li>
								<li class="decorator__detail-content--table">
									<span class="text-bold decorator__detail-content--t-cell">Ballon Types</span>
									<span class="decorator__detail-content--t-cell">Regular</span>
								</li>
							</ul>
						</div>
						<div class="decorator--t-cell decorator__price-wrap">
							<p class="decorator__price__title">Starting from</p>
	                        <p class="decorator__price decorator__price--not-our">₹ 150.00</p>
	                        <p class="decorator__price decorator__price--our">₹ 120.00</p>
	                        <p class="off-percent">20% OFF</p>
						</div>
					</div>
				</div>
			</div>





<?php		
		} elseif($serviceType == 'photographers') {
			// echo "photographers";
?>
			<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/service-photographers.css">
			<h2 class="service-type-title">Photographers <hr noshade="noshade"></h2>

			<div class="photographers-wrapper">

				<div class="photographer">
					<div class="photographer__detail-wrap">
						<img class="photographer__detail-wrap__img" src="assets/images/gallery/11.jpg">
						
						<p class="photographer__detail__title">Standard Balloon Décor</p>
						<ul class="photographer__detail-content">
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Session</span>
								<span class="photographer__detail-content--t-cell">1 Day</span>
							</li>
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Experience</span>
								<span class="photographer__detail-content--t-cell">1-2 years</span>
							</li>
						</ul>
						<div class="photographer__price-wrap">
							<p class="photographer__price__title">Starting from</p>
	                        <p class="photographer__price photographer__price--not-our">₹ 150.00</p>
	                        <p class="photographer__price photographer__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="photographer">
					<div class="photographer__detail-wrap">
						<img class="photographer__detail-wrap__img" src="assets/images/gallery/11.jpg">
						
						<p class="photographer__detail__title">Standard Balloon Décor</p>
						<ul class="photographer__detail-content">
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Session</span>
								<span class="photographer__detail-content--t-cell">1 Day</span>
							</li>
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Experience</span>
								<span class="photographer__detail-content--t-cell">1-2 years</span>
							</li>
						</ul>
						<div class="photographer__price-wrap">
							<p class="photographer__price__title">Starting from</p>
	                        <p class="photographer__price photographer__price--not-our">₹ 150.00</p>
	                        <p class="photographer__price photographer__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="photographer">
					<div class="photographer__detail-wrap">
						<img class="photographer__detail-wrap__img" src="assets/images/gallery/11.jpg">
						
						<p class="photographer__detail__title">Standard Balloon Décor</p>
						<ul class="photographer__detail-content">
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Session</span>
								<span class="photographer__detail-content--t-cell">1 Day</span>
							</li>
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Experience</span>
								<span class="photographer__detail-content--t-cell">1-2 years</span>
							</li>
						</ul>
						<div class="photographer__price-wrap">
							<p class="photographer__price__title">Starting from</p>
	                        <p class="photographer__price photographer__price--not-our">₹ 150.00</p>
	                        <p class="photographer__price photographer__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="photographer">
					<div class="photographer__detail-wrap">
						<img class="photographer__detail-wrap__img" src="assets/images/gallery/11.jpg">
						
						<p class="photographer__detail__title">Standard Balloon Décor</p>
						<ul class="photographer__detail-content">
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Session</span>
								<span class="photographer__detail-content--t-cell">1 Day</span>
							</li>
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Experience</span>
								<span class="photographer__detail-content--t-cell">1-2 years</span>
							</li>
						</ul>
						<div class="photographer__price-wrap">
							<p class="photographer__price__title">Starting from</p>
	                        <p class="photographer__price photographer__price--not-our">₹ 150.00</p>
	                        <p class="photographer__price photographer__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>

				<div class="photographer">
					<div class="photographer__detail-wrap">
						<img class="photographer__detail-wrap__img" src="assets/images/gallery/11.jpg">
						
						<p class="photographer__detail__title">Standard Balloon Décor</p>
						<ul class="photographer__detail-content">
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Session</span>
								<span class="photographer__detail-content--t-cell">1 Day</span>
							</li>
							<li class="photographer__detail-content--table">
								<span class="text-bold photographer__detail-content--t-cell">Experience</span>
								<span class="photographer__detail-content--t-cell">1-2 years</span>
							</li>
						</ul>
						<div class="photographer__price-wrap">
							<p class="photographer__price__title">Starting from</p>
	                        <p class="photographer__price photographer__price--not-our">₹ 150.00</p>
	                        <p class="photographer__price photographer__price--our">₹ 120.00</p>
	                        <!-- <p class="off-percent">20% OFF</p> -->
						</div>
						<div class="clear" style="clear: both;"></div>
					</div>
				</div>
			</div>







<?php
		} elseif($serviceType == 'caterers') {
			echo "caterers";
		} elseif($serviceType == 'anchors') {
			echo "anchors";
		} elseif($serviceType == 'tent') {
			echo "tent";
		}

?>

		</main>
	</div>

	<?php include_once("overlay-modals.php") ?>
	<?php include_once("footer.html") ?>
	<?php include_once("includes/common-js.html"); ?>
	

</body>
</html>