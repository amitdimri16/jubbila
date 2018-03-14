<?php include_once('includes/dbconnection.php'); ?>
<html lang="en" ng-app="ui.bootstrap.demo">
<head>

	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <link href="<?php echo $rootpath; ?>assets/css/bootstrap.css" rel="stylesheet">

	<?php include_once("includes/common-css.html"); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/add-my-service.css">


</head>

<body ng-controller="appCtrl">

	<div class="whole-wrapper">

		<?php include_once("navigation.html") ?>

		<main>

			<div class="main-content-wrapper">

				<uib-tabset active="active">
					<uib-tab index="0" heading="Venue">

						<div class="uitab-form-wrap venue-form-wrap">
							<h1 class="form-title">Add Venue</h1>
							<form role="form" action="" method="" class="add-venue-form material" id="add-venue-validate">								

			                    <div class="form-group relative">
			                    	<label class="feild-name">Requester's Name</label>
			                        <input type="text" name="req-name" class="req-name form-control" id="req-name" data-error=".errorTxt1">
			                        <div class="errorTxt1 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Requester's Email</label>
			                        <input type="text" name="req-email" class="req-email form-control" id="req-email" data-error=".errorTxt2">
			                        <div class="errorTxt2 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Requester's Mobile</label>
			                        <input type="text" name="req-mobile" class="req-mobile form-control" id="req-mobile" data-error=".errorTxt3">	
			                        <div class="errorTxt3 errorTxt"></div>
			                    </div>

			                    <div class="material-group" id="material-group-check">
							      	<div class="material-group-item">
										<input type="checkbox" name="check[]" value="1" placeholder="Owner is same as Requestor" id="owner-s-req">
										<label for="owner-s-req">Owner is same as Requestor</label>
										<div class="material-checkbox"></div>
									</div>
							    </div>

			                    <div class="form-group relative">
			                    	<label class="feild-name">Hall Name</label>
			                        <input type="text" name="hall-name" class="hall-name form-control" id="hall-name" data-error=".errorTxt4">
			                        <div class="errorTxt4 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Owner's Name</label>
			                        <input type="text" name="owner-name" class="owner-name form-control" id="owner-name" data-error=".errorTxt5">
			                        <div class="errorTxt5 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Owner's Email</label>
			                        <input type="text" name="owner-email" class="owner-email form-control" id="owner-email" data-error=".errorTxt6">
			                        <div class="errorTxt6 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Owner's Mobile</label>
			                        <input type="text" name="owner-mobile" class="owner-mobile form-control" id="owner-mobile" data-error=".errorTxt7">
			                        <div class="errorTxt7 errorTxt"></div>
			                    </div>
			                   <!--  <select name="locality" placeholder="Select Hall Locality">
									<option value="1">Option</option>
									<option value="2">Super option</option>
									<option value="3" selected>Awesome option</option>
									<option value="4">WORST option ever</option>
								</select> -->
								<div class="form-group relative">
			                    	<label class="feild-name">Locality</label>
			                        <input type="text" name="locality" class="locality form-control" id="locality" data-error=".errorTxt8">
			                        <div class="errorTxt8 errorTxt"></div>
			                    </div>
								<div class="form-group relative">
			                    	<label class="feild-name">Address</label>
									<textarea name="address" data-error=".errorTxt9"></textarea>
									<div class="errorTxt9 errorTxt"></div>
								</div>
								<div class="form-group relative">
			                    	<label class="feild-name">City</label>
			                        <input type="text" name="city" class="city form-control" id="city" data-error=".errorTxt10">
			                        <div class="errorTxt10 errorTxt"></div>
			                    </div>
								<div class="form-group relative">
			                    	<label class="feild-name">Pincode</label>
			                        <input type="text" name="pincode" class="pincode form-control" id="pincode" data-error=".errorTxt11">
			                        <div class="errorTxt11 errorTxt"></div>
			                    </div>
								<div class="form-group relative">
			                    	<label class="feild-name">State</label>
			                        <input type="text" name="state" class="state form-control" id="state" data-error=".errorTxt12">
			                        <div class="errorTxt12 errorTxt"></div>
			                    </div>

			                    <div class="material-group" id="material-group-test">
			                    	<div class="material-group-item">
			                    		<input type="radio" name="manager-s-detail" value="manager-s-req" placeholder="Manager is same as Requester" id="manager-s-req">
			                    		<label for="manager-s-req">Manager is same as Requester</label>
			                    		<div class="material-radio"></div>
			                    	</div>
			                    	<div class="material-group-item">
			                    		<input type="radio" name="manager-s-detail" value="manager-s-owner" placeholder="Manager is same as Owner" id="manager-s-owner">
			                    		<label for="manager-s-owner">Manager is same as Owner</label>
			                    		<div class="material-radio"></div>
			                    	</div>
			                    </div>

			                    <div class="form-group relative">
			                    	<label class="feild-name">Manager Name</label>
			                        <input type="text" name="manager-name" class="manager-name form-control" id="manager-name" data-error=".errorTxt13">
			                        <div class="errorTxt13 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Manager Email</label>
			                        <input type="text" name="manager-email" class="manager-email form-control" id="manager-email" data-error=".errorTxt14">
			                        <div class="errorTxt14 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Manager Mobile</label>
			                        <input type="text" name="manager-mobile" class="manager-mobile form-control" id="manager-mobile" data-error=".errorTxt15">
			                        <div class="errorTxt15 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Website(Optional)</label>
			                        <input type="text" name="website" class="website form-control" id="website" data-error=".errorTxt16">
			                        <div class="errorTxt16 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Hall Type</label>
			                        <div class="material-group" id="material-group-test">
				                    	<div class="material-group-item">
				                    		<input type="radio" name="hall-type" value="banquet" placeholder="Banquet Hall" id="banquet">
				                    		<label for="banquet">Banquet Hall</label>
				                    		<div class="material-radio"></div>
				                    	</div>
				                    </div>
				                    <div class="material-group" id="material-group-test">
				                    	<div class="material-group-item">
				                    		<input type="radio" name="hall-type" value="auditorium" placeholder="Auditorium Hall" id="auditorium">
				                    		<label for="auditorium">Auditorium Hall</label>
				                    		<div class="material-radio"></div>
				                    	</div>
				                    </div>
				                    <div class="material-group" id="material-group-test">
				                    	<div class="material-group-item">
				                    		<input type="radio" name="hall-type" value="marriage" placeholder="Marriage Hall" id="marriage">
				                    		<label for="marriage">Marriage Hall</label>
				                    		<div class="material-radio"></div>
				                    	</div>
				                    </div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Dining Hall Capacity</label>
			                        <input type="number" name="dining-capacity" class="dining-capacity form-control" id="dining-capacity" data-error=".errorTxt18">
			                        <div class="errorTxt18 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Min Sitting Capacity</label>
			                        <input type="number" name="min-sitting-capacity" class="min-sitting-capacity form-control" id="min-sitting-capacity" data-error=".errorTxt19">
			                        <div class="errorTxt19 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Max Sitting Capacity</label>
			                        <input type="number" name="max-sitting-capacity" class="max-sitting-capacity form-control" id="max-sitting-capacity" data-error=".errorTxt20">
			                        <div class="errorTxt20 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Floating Capacity</label>
			                        <input type="number" name="floating-capacity" class="floating-capacity form-control" id="floating-capacity" data-error=".errorTxt21">
			                        <div class="errorTxt21 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Parking Capacity</label>
			                        <input type="number" name="parking-capacity" class="parking-capacity form-control" id="parking-capacity" data-error=".errorTxt22">
			                        <div class="errorTxt22 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Stage Count</label>
			                        <input type="number" name="stage-count" class="stage-count form-control" id="stage-count" data-error=".errorTxt23">
			                        <div class="errorTxt23 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Stage Dimension</label>
			                        <input type="number" name="stage-dimension" class="stage-dimension form-control" id="stage-dimension" data-error=".errorTxt23">
			                        <div class="errorTxt23 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Dance Floor Dimension</label>
			                        <input type="number" name="dance-floor-dimension" class="dance-floor-dimension form-control" id="dance-floor-dimension" data-error=".errorTxt24">
			                        <div class="errorTxt24 errorTxt"></div>
			                    </div>
			                    <div class="form-group relative">
			                    	<label class="feild-name">Dance Floor Capacity</label>
			                        <input type="number" name="dance-floor-capacity" class="dance-floor-capacity form-control" id="dance-floor-capacity" data-error=".errorTxt25">
			                        <div class="errorTxt25 errorTxt"></div>
			                    </div>

			                    <!-- <div class="material-group" id="material-group-check">
							      	<div class="material-group-item">
										<input type="checkbox" name="check[]" value="1" placeholder="Owner is same as Requestor" id="owner-s-req">
										<label for="owner-s-req">Owner is same as Requestor</label>
										<div class="material-checkbox"></div>
									</div>
							    </div> -->

			                    <div class="form-group relative">
			                    	<label class="feild-name">Food &amp; Drinks</label>
			                        <div class="material-group" id="material-group-check">
								      	<div class="material-group-item">
											<input type="checkbox" name="check[]" value="veg" placeholder="Vegetarian" id="veg">
											<label for="veg">Vegetarian</label>
											<div class="material-checkbox"></div>
										</div>
									</div>
									<div class="material-group" id="material-group-check">
								      	<div class="material-group-item">
											<input type="checkbox" name="check[]" value="non-veg" placeholder="Non Vegetarian" id="non-veg">
											<label for="non-veg">Non Vegetarian</label>
											<div class="material-checkbox"></div>
										</div>
								    </div>
									<div class="material-group" id="material-group-check">
								      	<div class="material-group-item">
											<input type="checkbox" name="check[]" value="imfl" placeholder="IMFL" id="imfl">
											<label for="imfl">IMFL</label>
											<div class="material-checkbox"></div>
										</div>
								    </div>
			                    </div>

			                    <div class="form-group relative">
			                    	<p></p>
			                    </div>

			                    <div class="form-group relative">
			                    	<label class="feild-name">Air Conditioned</label>
			                        <div class="material-group" id="material-group-test">
				                    	<div class="material-group-item">
				                    		<input type="radio" name="air-conditioned" value="yes" placeholder="YES" id="yes">
				                    		<label for="yes">YES</label>
				                    		<div class="material-radio"></div>
				                    	</div>
				                    </div>
				                    <div class="material-group" id="material-group-test">
				                    	<div class="material-group-item">
				                    		<input type="radio" name="air-conditioned" value="no" placeholder="NO" id="no">
				                    		<label for="no">NO</label>
				                    		<div class="material-radio"></div>
				                    	</div>
				                    </div>
			                    </div>

								<div class="form-group relative">
			                    	<p></p>
			                    </div>

			                    <div class="form-group relative">
			                    	<label class="feild-name">Power Backup</label>
			                        <div class="material-group" id="material-group-test">
				                    	<div class="material-group-item">
				                    		<input type="radio" name="power-backup" value="yes" placeholder="YES" id="yes">
				                    		<label for="yes">YES</label>
				                    		<div class="material-radio"></div>
				                    	</div>
				                    </div>
				                    <div class="material-group" id="material-group-test">
				                    	<div class="material-group-item">
				                    		<input type="radio" name="power-backup" value="no" placeholder="NO" id="no">
				                    		<label for="no">NO</label>
				                    		<div class="material-radio"></div>
				                    	</div>
				                    </div>
			                    </div>

			                    <div class="form-group relative">
			                        <div class="input-field">
			                            <p class="responseError" style="font-size: .9em;text-align: center;color: red;"></p>
			                            <button type="submit" class="btn btn-signin">Submit</button>
			                        </div>
			                    </div>
			                </form>
						</div>

					</uib-tab>
					<uib-tab index="1" heading="Decorator">decorator form</uib-tab>
					<uib-tab index="2" heading="Photographer">photographer form</uib-tab>
					<uib-tab index="3" heading="Caterer">caterer form</uib-tab>
					<!-- <uib-tab index="4" heading="Anchor">Anchor form</uib-tab> -->
					<uib-tab index="5" heading="Tent">Tent form</uib-tab>
					<uib-tab index="6" heading="DJ/Music">DJ/Music Form</uib-tab>
				</uib-tabset>

			</div>
		
		</main>
	</div>

	<?php include_once("overlay-modals.php") ?>
	<?php include_once("footer.html") ?>
	<?php include_once("includes/common-js.html"); ?>
    
    <script>
    	angular.module('ui.bootstrap.demo', ['ngAnimate', 'ngSanitize', 'ui.bootstrap']);
		angular.module('ui.bootstrap.demo').controller('appCtrl', function ($scope, $window) {
		});
    </script>

</body>
</html>