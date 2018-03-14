<?php include_once("includes/dbconnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	
    <?php include_once("includes/common-css.html"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/gallery.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/simplelightbox.min.css">

</head>
<body>

	<div class="whole-wrapper">

		<?php include_once("navigation.html") ?>

		<main>
		
			<div class="content"> 
		 
				<h2 class="gallery-title">Gallery <hr noshade="noshade"></h2>

			  	<!-- gallery STRUCTURE -->
			  	<div class="gallery">
			        <!-- HERE IS PLACE FOR PHOTOS -->
			        <ul class="entries-columns">
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/1.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/1.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/2.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/2.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/3.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/3.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/4.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/4.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/5.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/5.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/6.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/6.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/7.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/7.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/8.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/8.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/9.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/9.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/10.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/10.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/11.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/11.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/12.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/12.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	<li class="image-wrapper">
			        		<a href="/jubbila/assets/images/gallery/13.jpg">
			        			<img class="image" src="/jubbila/assets/images/gallery/13.jpg" alt="Hops hops">
			        			<!-- <div class="lnr lnr-eye"></div> -->
			        		</a>
			        	</li>
			        	
			        </ul>
			  </div>
			  <!-- end gallery STRUCTURE --> 

			</div>

		</main>
	</div>

	<?php include_once("overlay-modals.php") ?>
	<?php include_once("footer.html") ?>


	<?php include_once("includes/common-js.html"); ?>
    <script type="text/javascript" src="<?php echo $rootpath; ?>assets/js/simple-lightbox.min.js"></script>
    <script type="text/javascript">
    	$(function() {
    		var gallery = $('.gallery a').simpleLightbox();
    		$('.gallery a').on('open.simplelightbox', function () {
			  // do something…
			  $(".whole-wrapper").css({"filter": "blur(4px)"});
			});

    	});
    </script>
	<script type="text/javascript">
		$(function() {
			$(".image-wrapper").hover(function() {
				$(this).children().children().css({"filter": "sepia(100%)", "opacity": "0.9", "transition": ".2s"});
			}, function() {
				$(this).children().children().css({"filter": "sepia(0)", "opacity": "1", "transition": ".2s"});
			});
		});
	</script>


</body>

