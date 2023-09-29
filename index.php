<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- FONTS
		============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- FANCYBOX CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- BXSLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <!-- MEANMENU CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- JQUERY-UI-SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery-ui-slider.css">
    <!-- NIVO SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- OWL CAROUSEL CSS 	
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- OWL CAROUSEL THEME CSS 	
		============================================ -->
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- BOOTSTRAP CSS 
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONT AWESOME CSS 
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- NORMALIZE CSS 
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- MAIN CSS 
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- STYLE CSS 
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- RESPONSIVE CSS 
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- IE CSS 
		============================================ -->
    <link rel="stylesheet" href="css/ie.css">
    <!-- MODERNIZR JS 
		============================================ -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
    <?php
		include "header.php";
	?>
    <!-- main -->
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <!-- MAIN-SLIDER-AREA START -->
            <?php include "slider.php"; ?>
            <!-- MAIN-SLIDER-AREA END -->

            <!-- TOW-COLUMN-PRODUCT START -->
            <div class="row tow-column-product">
                <?php include "new_products.php" ?>

                <?php include "sale_products.php" ?>
            </div>

            <!-- TOW-COLUMN-PRODUCT END -->
            <div class="row">
                <!-- ADD-TWO-BY-ONE-COLUMN START -->
                <div class="add-two-by-one-column">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="tow-column-add zoom-img">
                            <a href="#"><img src="assets/img/slides/slide7.png" alt="shope-add" /></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="one-column-add zoom-img">
                            <a href="#"><img src="assets/img/slides/ban1.png" alt="shope-add" /></a>
                        </div>
												
                    </div>
                </div>
                <!-- ADD-TWO-BY-ONE-COLUMN END -->
            </div>

						<!-- sản phẩm nổi bật -->
						<?php include "featured_products.php" ?>

						<!-- Products theo loại -->
						<?php include "cate_products.php" ?>


					<?php include "selling_products.php" ?>

					<!-- Images shop now -->
            <div class="row">
                <!-- IMAGE-ADD-AREA START -->
                <div class="image-add-area">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- ONEHALF-ADD START -->
                        <div class="onehalf-add-shope zoom-img">
                            <a href="#"><img src="assets/img/slides/shop_now.png" alt="shope-add" /></a>
                        </div>
                        <!-- ONEHALF-ADD END -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- ONEHALF-ADD START -->
                        <div class="onehalf-add-shope zoom-img">
                            <a href="#"><img src="assets/img/slides/shop_now2.png" alt="shope-add" /></a>
                        </div>
                        <!-- ONEHALF-ADD END -->
                    </div>
                </div>
                <!-- IMAGE-ADD-AREA END -->
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->

    <?php 
include "tintuc.php";
?>

    <?php 
include "brand.php";
?>

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