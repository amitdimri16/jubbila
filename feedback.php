<?php include_once("includes/dbconnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<?php include_once("includes/common-css.html"); ?>   
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>assets/css/index.css"> -->
    <style type="text/css">
    	

	h2.feedback-title {
	    font-family: 'Lobster', cursive;
	    text-align: center;
	    font-size: 3em;
	    padding: 30px 0;
	    color: #F25667;
	    position: relative;
	    font-weight: 100;
	}

	h2.feedback-title hr {
	    width: 50px;
	    margin: 10px auto;
	    border: none;
	    height: 2px;
	    background: #F25667;
	}


		/*section#contact {
  background-color: #222222;
  background-image: url("../img/map-image.png");
  background-repeat: no-repeat;
  background-position: center; }*/
  section#contact .section-heading {
    color: #009DA9; }
  section#contact .form-group {
    margin-bottom: 25px; }
    section#contact .form-group input,
    section#contact .form-group textarea {
      padding: 20px; }
    section#contact .form-group input.form-control {
      height: auto;
      width: 100%;
      border-radius: 3px;
      border: 1px solid #009DA9; }
    section#contact .form-group textarea.form-control {
      height: 154px;
      width: 100%;
      border-radius: 3px;
      border: 1px solid #009DA9; }
  /*section#contact .form-control:focus {
    border-color: #009DA9;
    box-shadow: none; }*/
  section#contact ::-webkit-input-placeholder {
    font-weight: 700;
    color: #ccc;
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-transform: uppercase; }
  section#contact :-moz-placeholder {
    font-weight: 700;
    color: #ccc;
    /* Firefox 18- */
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-transform: uppercase; }
  section#contact ::-moz-placeholder {
    font-weight: 700;
    color: #ccc;
    /* Firefox 19+ */
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-transform: uppercase; }
  section#contact :-ms-input-placeholder {
    font-weight: 700;
    color: #ccc;
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-transform: uppercase; }
  section#contact .text-danger {
    color: #e74c3c; }

    

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem .75rem;
    font-size: 1rem;
    line-height: 1.25;
    border-radius: .25rem;
    transition: all .15s ease-in-out;
}

.btn-xl {
    font-size: 18px;
    font-weight: 700;
    padding: 20px 40px;
    border-radius: 3px;
    color: white;
    border-color: #009DA9;
    background-color: #009DA9;
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    margin-bottom: 50px;
}






    </style>
</head>
<body>

	<div class="whole-wrapper">
		<?php include_once("navigation.html") ?>

		<main>

			<!-- Contact -->
		    <section id="contact">
		      <div class="container">
		        <div class="row">
		          <div class="col-lg-12 text-center">
		            <h2 class="feedback-title">Feedback <hr noshade="noshade"></h2>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-lg-12">
		            <form id="contactForm" name="sentMessage" novalidate>
		              <div class="row">
		                <div class="col-md-6">
		                  <div class="form-group">
		                    <input class="form-control" id="name" type="text" placeholder="Name *" required data-validation-required-message="Please enter your name.">
		                    <p class="help-block text-danger"></p>
		                  </div>
		                  <div class="form-group">
		                    <input class="form-control" id="email" type="email" placeholder="Email *" required data-validation-required-message="Please enter your email address.">
		                    <p class="help-block text-danger"></p>
		                  </div>
		                 <!--  <div class="form-group">
		                    <input class="form-control" id="phone" type="tel" placeholder="Phone *" required data-validation-required-message="Please enter your phone number.">
		                    <p class="help-block text-danger"></p>
		                  </div> -->
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group">
		                    <textarea class="form-control" id="message" placeholder="Feedback *" required data-validation-required-message="Please enter a message."></textarea>
		                    <p class="help-block text-danger"></p>
		                  </div>
		                </div>
		                <div class="clearfix"></div>
		                <div class="col-lg-12 text-center">
		                  <div id="success"></div>
		                  <button id="sendMessageButton" class="btn btn-xl" type="submit">Send Message</button>
		                </div>
		              </div>
		            </form>
		          </div>
		        </div>
		      </div>
		    </section>
		</main>
	</div>

	<?php include_once("overlay-modals.php") ?>
	
	<?php include_once("footer.html") ?>
	<?php include_once("includes/common-js.html"); ?>

    <script type="text/javascript" src="assets/js/index.js"></script>
    <!-- feedback form JavaScript -->
    <script src="/jubbila/assets/js/jqBootstrapValidation.js"></script>
    <script src="/jubbila/assets/js/feedback.js"></script>

</body>
</html>