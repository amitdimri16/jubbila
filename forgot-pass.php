<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include_once("includes/common-css.html"); ?> 
</head>
<body>

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

</body>
</html>
