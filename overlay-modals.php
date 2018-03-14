<div class="bg-tinch"></div>
<div class="overlay-modal">
	
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

	<!-- START REGISTRATION FORM -->
	<div class="overlay-modal__register-content-wrapper">
		<div class="overlay-modal__register-content">
			<div class="overlay-modal__register-content-l-pannel">
				<p class="overlay-modal__register-content-l-pannel__register-title">Register</p>
				<p class="overlay-modal__register-content-l-pannel__register-desc">Lorem Ipsum Lorem Ipsum lorem ipsum</p>
			</div>		

			<div class="overlay-modal__register-form-wrapper">

				<form role="form" action="scripts/register.php" method="post" class="register-form material" id="register-form-validate">

                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" class="name form-control" id="name" data-error=".errorTxt3">
                        <div class="errorTxt3 errorTxt"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="email form-control" id="email" data-error=".errorTxt4">
                        <div class="errorTxt4 errorTxt"></div>
                    </div>
                    <div class="form-group mobile-group">
                        <span class="country-code">+91</span>
                        <input type="text" name="mobile" placeholder="Mobile" class="mobile form-control" id="mobile" data-error=".errorTxt5">
                        <div class="errorTxt5 errorTxt"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="password form-control" id="r-password" data-error=".errorTxt6">
                        <div class="errorTxt6 errorTxt"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpassword" placeholder="Confirm Password" class="cpassword form-control" id="cpassword" data-error=".errorTxt7">
                        <div class="errorTxt7 errorTxt"></div>
                    </div>
                    <input type="hidden" name="date" value="<?php echo time(); ?>">
                    <div class="form-group">
                        <div class="input-field col s12">
                            <p class="responseError" style="font-size: .9em;text-align: center;color: red;"></p>
                            <button type="submit" class="btn btn-signin">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>Already Registered? <a class="to-login" href="javascript:void(0)" style="color: #04C0CC;">Login</a></p>
                    </div>

                </form>
			</div>
		</div>
		<div class="overlay-modal__register-content-close-wrapper">
			<i class="overlay-modal__register-content-close material-icons">close</i>				
		</div>
	</div>
	<!-- END REGISTRATION FORM -->

    <!-- START FORGOT PASSWORD FORM -->
    <div class="overlay-modal__f-pass-content-wrapper">
        
        <div class="overlay-modal__f-pass-content">
            <div class="overlay-modal__f-pass-content-l-pannel">
                <p class="overlay-modal__f-pass-content-l-pannel__f-pass-title">Forgot Password?</p>
                <p class="overlay-modal__f-pass-content-l-pannel__f-pass-desc">Lorem Ipsum Lorem Ipsum lorem ipsum</p>
            </div>

            <div class="overlay-modal__f-pass-form-wrapper">

                <form role="form" action="" method="post" class="f-pass-form material" id="f-pass-form-validate">

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="email form-control" id="email" data-error=".errorTxt8">
                        <div class="errorTxt8 errorTxt"></div>
                    </div>
                    <div class="form-group">
                        <div class="input-field col s12">
                            <p class="responseError" style="font-size: .9em;text-align: center;color: red;"></p>
                            <button type="submit" class="btn btn-signin">Send</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <p><a class="to-login" href="javascript:void(0)" style="color: #04C0CC;">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
        <div class="overlay-modal__f-pass-content-close-wrapper">
            <i class="overlay-modal__f-pass-content-close material-icons">close</i>              
        </div>
    </div>
    <!-- END FORGOT PASSWORD FORM -->

		
</div>