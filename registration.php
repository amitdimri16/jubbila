<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include_once("includes/common-css.html"); ?> 
</head>
<body>

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

</body>
</html>
