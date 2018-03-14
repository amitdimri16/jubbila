<?php
    include_once("includes/dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
    <title>jubbila</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LInk to the CSS file-->
    <?php include_once("includes/common-css.html"); ?>
    <link type="text/css" rel="stylesheet" href="/jubbila/assets/css/venue-detail.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<!--Link to font awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div id="black-tinch"></div>
    <?php include_once("navigation.html") ?>

    <main>
            
        <div class="main-content-wrapper">

            <div class="venue-wrapper">
                <div class="venue-img-wrapper">
                    <div class="venue-img">
                        <img src="/jubbila/assets/images/venue.jpg">
                    </div>
                </div>

                <div class="venue-detail-wrapper">

                    <div class="venue-detail venue-contact">
                        <p class="venue-name venue-detail__item">Lorem Ipsum</p>
                        <div class="venue-address venue-detail__item">
                            <div class="icon icon-start"><i class="material-icons">location_on</i></div>
                            <div class="venue-address-display detail-display">263/1 Lower Camp, Near Lal Gate, Garhi Cantt, Dehradun, Uttarakhand 248003</div>
                            <div class="show-venue-map icon icon-display"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                        <div class="venue-phone venue-detail__item">
                            <div class="icon icon-start"><i class="material-icons">phone</i></div>
                            <div class="venue-phone-display detail-display">9876543210</div>
                        </div>
                        <div class="venue-web venue-detail__item">
                            <div class="icon icon-start"><i class="fa fa-globe icon" aria-hidden="true"></i></div>
                            <div class="venue-web-display detail-display">https://www.qwertyuiopasdfgh.com</div>
                        </div>
                    </div>

                    <div class="venue-detail venue-pricing">
                        <div class="venue-veg-pricing venue-detail__item">
                            <div class="icon icon-start"><i class="material-icons" style="color: green;">check_circle</i></div>
                            <div class="venue-detail__item-title" style="color: green;">Standard Veg Menu</div>
                            <div class="venue-pricing-display detail-display">₹ 1220.00</div>
                        </div>
                        <div class="venue-nonveg-pricing venue-detail__item">
                            <div class="icon icon-start"><i class="material-icons" style="color: red;">check_circle</i></div>
                            <div class="venue-detail__item-title" style="color: red;">Standard Non-Veg Menu</div>
                            <div class="venue-pricing-display detail-display">₹ 1220.00</div>
                        </div>
                        <p class="venue-nonveg-pricing venue-detail__item" style="font-size: .8em">Taxes</p>
                    </div>

                    <div class="venue-detail venue-amenities">
                        <div class="venue-veg-amenities venue-detail__item">
                            <p class="heading">Amenities</p>
                        </div>
                    </div>

                   


                       
                </div>
            </div>

        </div>

    </main>

    <?php include_once("overlay-modals.php") ?>
    <?php include_once("footer.html") ?>
    <?php include_once("includes/common-js.html"); ?>

</body>
</html>