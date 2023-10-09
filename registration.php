<!doctype html>
<html lang="en">

<?php include "head.php" ?>

<body>
    <?php
		include "header.php";
	?>
    <!-- main -->
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="index.html">HOMe</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>Sign in / Register</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title">Sign in / Register</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- CREATE-NEW-ACCOUNT START -->
                    <div class="create-new-account">
                        <form class="new-account-box primari-box" id="create-new-account" method="post" action="#">
                            <h3 class="box-subheading">Create an account</h3>
                            <div class="form-content">
                                <p>Please enter your email address to create an account.</p>
                                <div class="form-group primary-form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" value="" name="email" id="email" class="form-control input-feild"
                                        required>
                                </div>
                                <div class="submit-button">
                                    <a href="checkout-registration.html" id="SubmitCreate" class="btn main-btn">
                                        <span>
                                            <i class="fa fa-user submit-icon"></i>
                                            Create an account
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- CREATE-NEW-ACCOUNT END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- REGISTERED-ACCOUNT START -->
                    <div class="primari-box registered-account">
                        <form class="new-account-box" id="accountLogin" method="post" action="#">
                            <h3 class="box-subheading">Already registered?</h3>
                            <div class="form-content">
                                <div class="form-group primary-form-group">
                                    <label for="loginemail">Email address</label>
                                    <input type="text" value="" name="email" id="loginemail"
                                        class="form-control input-feild">
                                </div>
                                <div class="form-group primary-form-group">
                                    <label for="password">Password</label>
                                    <input type="password" value="" name="password" id="password"
                                        class="form-control input-feild">
                                </div>
                                <div class="forget-password">
                                    <p><a href="#">Forgot your password?</a></p>
                                </div>
                                <div class="submit-button">
                                    <a href="my-account.html" id="signinCreate" class="btn main-btn">
                                        <span>
                                            <i class="fa fa-lock submit-icon"></i>
                                            Sign in
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- REGISTERED-ACCOUNT END -->
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->


    <?php 
include "brand.php";
?>

    <?php include "company.php" ?>

    <?php 
include "footer.php";
?>

    <!-- JS 
		===============================================-->
    <!-- jquery js -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>

    <!-- fancybox js -->
    <script src="js/jquery.fancybox.js"></script>

    <!-- bxslider js -->
    <script src="js/jquery.bxslider.min.js"></script>

    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>

    <!-- jqueryui js -->
    <script src="js/jqueryui.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- wow js -->
    <script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(35.149868, -90.046678)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>