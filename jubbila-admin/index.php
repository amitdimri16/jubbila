<!DOCTYPE html>
<html ng-app="myApp" ng-controller="myCtrl">
<head>
    <title>JUBBILA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--LInk to the CSS file-->
    <link type="text/css" rel="stylesheet" href="/jubbila/assets/css/ja-index.css">
    <!-- <link type="text/css" rel="stylesheet" href="/jubbila/assets/css/bootstrap-table-expandable.css"> -->
    <!-- <link rel="stylesheet" href="/jubbila/assets/plugins/dropify-master/dist/css/dropify.min.css"> -->
    <link rel="stylesheet" href="/jubbila/assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="/jubbila/font/foundation-icons/foundation-icons.css">    

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.3/angular-material.css">
    <!--Link to font awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <base href="/jubbila/jubbila-admin/">

</head>

<body>

    <nav>
        <ul class="side-nav">
                <li class="welcome-mssg">
                    <img src="/jubbila/assets/images/avatar.png"><br>
                    <p id="welcome">Welcome,<br><b><span id="name">Amit Dimri</span></b></p>
                </li>
                <li class="bold l-dashboard active">
                    <a href="#/" class="waves-effect waves-cyan"><i class="fa-left fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                </li>
                <li class="bold l-all-products">
                    <a href="#all-products" class="waves-effect waves-cyan"><i class="fa-left fa fa-cubes" aria-hidden="true"></i> All Products</a>
                </li>
                <li class="bold l-add-product">
                    <a href="#add-product" class="waves-effect waves-cyan"><i class="fa-left fa fa-plus-circle" aria-hidden="true"></i> Add Product</a>
                </li>
                <li class="bold l-add-services">
                    <a href="#add-services" class="waves-effect waves-cyan"><i class="fa-left fa fa-plus-circle" aria-hidden="true"></i> Add Services</a>
                </li>
            
            </ul>
        </nav>

        <main>            
            <header class="top-nav">
                <div class="nav-wrapper">
                    <div class="col s12">
                        <a class="full-screen" data-click-state="1"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        <a href="#/" class="store-name">Store Name</a>
                        <ul class="right user-notifications">
                            <li class="icon">
                                    <a href="javascript:void(0)">
                                        <div class="chip">5</div>
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="icon">
                                    <a href="javascript:void(0)">
                                        <div class="chip">5</div>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </a>
                                </li>
                          <!-- Dropdown Trigger -->
                            <li class="dropdown-trigger">
                                <a class="dropdown-button" href="javascript:void(0)" data-activates="user-dropdown">
                                    <img src="/jubbila/assets/images/avatar.png"> &nbsp;<i class="fa fa-angle-down right" aria-hidden="true"></i>
                                </a><!-- 
                                <a class="dropdown-button" href="" data-activates="user-dropdown">Dropdown<i class="fa fa-angle-down right"></i></a> -->
                            <ul id="user-dropdown" class="dropdown-content">
                                <li><a href="/jubbila/"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="#profile"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="#settings"><i class="fa fa-cog"></i> Settings</a></li>
                                <li class="divider" style="min-height: 0 !important;"></li>
                                <li><a href="#lock-user"><i class="fa fa-lock"></i> Lock</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            <div ng-view></div>
        </main>

    <!-- ================================================
    Scripts
    ================================================ -->

    <script src="/jubbila/assets/js/angular.js"></script>
    <script src="/jubbila/assets/js/angular-router.js"></script>
    <script src='/jubbila/assets/js/materialize.js'></script>
    <script src='/jubbila/assets/js/nprogress.js'></script>
    <script src="/jubbila/assets/js/navigationbar.js"></script>
    <script src="/jubbila/assets/plugins/dropify-master/dist/js/dropify.min.js"></script>
    <script type="text/javascript" src="/jubbila/assets/plugins/bootstrap-table-expandable.js"></script>

    <script>
        var app = angular.module("myApp", ["ngRoute"]);
        app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {

            // $locationProvider.html5Module(true);

            $routeProvider
                .when("/", {
                    templateUrl : "dashboard.html",
                    controller: "dashboardCtrl"
                })
                .when("/logo-management", {
                    templateUrl : "logo-management.php",
                    controller: "logoMangementCtrl"
                })
                .when("/add-product", {
                    templateUrl : "add-product.php",
                    controller: "addProductCtrl"
                })
                .when("/add-services", {
                    templateUrl : "add-services.php",
                    controller: "addServicesCtrl"
                })
                .when("/all-products", {
                    templateUrl : "all-products.php",
                    controller: "allProductsCtrl"
                })
                .when("/all-orders", {
                    templateUrl : "all-orders.php",
                    controller: "allOrdersCtrl"
                })
                .when("/revenue", {
                    templateUrl : "revenue.php",
                    controller: "revenueCtrl"
                })
                .when("/category-list", {
                    templateUrl : "category-list.php",
                    controller: "categoryListCtrl"
                })
                .when("/sub-category-list", {
                    templateUrl : "sub-category-list.php",
                    controller: "subCategoryListCtrl"
                })
                .when("/profile", {
                    templateUrl : "user-profile.php",
                    controller: "userProfileCtrl"
                })
                .when("/settings", {
                    templateUrl : "user-settings.php",
                    controller: "userSettingsCtrl"
                })
                .when("/mycustomers", {
                    templateUrl : "my-customers.php",
                    controller: "myCustomersCtrl"
                });
        }]);

        app.controller('myCtrl', function() {

        });
        app.controller('dashboardCtrl', function() {

        });
        app.controller('logoMangementCtrl', function() {

        });
        app.controller('addProductCtrl', function() {

        });
        app.controller('addServicesCtrl', function() {

        });
        app.controller('allProductsCtrl', function() {

        });
        app.controller('allOrdersCtrl', function() {

        });
        app.controller('revenueCtrl', function() {

        });
        app.controller('categoryListCtrl', function() {

        });
        app.controller('subCategoryListCtrl', function() {

        });
        app.controller('userProfileCtrl', function() {

        });
        app.controller('userSettingsCtrl', function() {

        });
        app.controller('myCustomersCtrl', function() {

        });

    </script>

    <script type="text/javascript">
        $("ul.side-nav li").click(function() {
            $('ul.side-nav li').removeClass('active');
            $(this).addClass('active');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('ul.side-nav li').removeClass('active');
            $('ul.side-nav li.l-dashboard').addClass('active');

            //maximize and minimize the windows
            // $('.maximize').on('click', function() {
            //     $('#latest-orders-table').css({
            //         'width': '100%',
            //         'height': '100vh'
            //     });
            // });
            // $('.minimize').on('click', function() {
            //     $('#latest-orders-table').css({
            //         'width': '49%',
            //         'height': '500px'
            //     });
            // });

            //SIDE NAV SLIDE
            $('.full-screen').click(function() {
                if($(this).attr('data-click-state') == 1) {
                    $(this).attr('data-click-state', 0)
                    $('nav').css({
                        'left': '-220px'
                    });
                    $('main').css({
                        'width': '100%'
                    });
                } else {
                    $(this).attr('data-click-state', 1)
                    $('nav').css({
                        'left': '0px'
                    });
                    $('main').css({
                        'width': 'calc(100% - 220px)'
                    });
                }
            });

            


        });
    </script>


    

    

    
    <script type="text/javascript" src="/jubbila/assets/js/preloader.js"></script>


    


</body>
</html>