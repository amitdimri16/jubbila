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

			echo "venues";

		} elseif($serviceType == 'decorators') {
			// echo "decorators";
?>
    			<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/vendors.css">
    			<h2 class="service-type-title">Decorators <hr noshade="noshade"></h2>

				<div class="decorators-wrapper">


<?php		
		} elseif($serviceType == 'photographers') {
			echo "photographers";			
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