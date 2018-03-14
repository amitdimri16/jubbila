<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include_once("includes/common-css.html"); ?> 
</head>
<body>

    <!-- START LOGIN FORM -->
    	<div class="overlay-modal__login-content-wrapper">
    		
    		<div class="overlay-modal__login-content">
    			<div class="overlay-modal__login-content-l-pannel">
    				<p class="overlay-modal__login-content-l-pannel__login-title">Login</p>
    				<p class="overlay-modal__login-content-l-pannel__login-desc">Lorem Ipsum Lorem Ipsum lorem ipsum</p>
    			</div>

    			<div class="overlay-modal__login-form-wrapper">

    				<form role="form" action="scripts/login.php" method="post" class="login-form material" id="login-form-validate">

                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" class="email form-control" id="email" data-error=".errorTxt1">
                            <div class="errorTxt1 errorTxt"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="password form-control" id="password" data-error=".errorTxt2">
                            <div class="errorTxt2 errorTxt"></div>
                        </div>
                        <div class="form-group">          
                            <div class="input-field col s6 m6 l6 login-text" style="float: left;">
                                <input type="checkbox" id="remember-me" />
                                <label for="remember-me">Remember me</label>
                            </div>
                            <div class="input-field col s6 m6 l6 forgot-password" style="float: right;">
                                <p class="margin right-align medium-small"><a class="to-f-pass" href="javascript:void(0)" style="color: #04C0CC;">Forgot password ?</a></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-field col s12">
                                <p class="responseError" style="font-size: .9em;text-align: center;color: red;"></p>
                                <button type="submit" class="btn btn-signin">Sign In</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <p>New to Lorem Ipsum? <a class="to-signup" href="javascript:void(0)" style="color: #04C0CC;">Sign Up</a></p>
                        </div>

                    </form>
    			</div>
    		</div>
    		<div class="overlay-modal__login-content-close-wrapper">
    			<i class="overlay-modal__login-content-close material-icons">close</i>				
    		</div>
    	</div>
    	<!-- END LOGIN FORM -->

</body>
</html>
