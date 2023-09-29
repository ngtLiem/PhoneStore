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
    <link rel="stylesheet" href="css/style.css">
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
                            <a href="#"><img src="img/product/shope-add1.jpg" alt="shope-add" /></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="one-column-add zoom-img">
                            <a href="#"><img src="img/product/shope-add2.jpg" alt="shope-add" /></a>
                        </div>
                    </div>
                </div>
                <!-- ADD-TWO-BY-ONE-COLUMN END -->
            </div>

						<!-- sản phẩm nổi bật -->
						<?php include "featured_products.php" ?>
						<!-- Sale + new products -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- TAB-BG-PRODUCT-AREA START -->
                    <div class="tab-bg-product-area">
                        <!-- TAB PANES START -->
                        <div class="tab-content bg-tab-content">
                            <!-- TABS ONE START-->
                            <div role="tabpanel" class="tab-pane active" id="women-tab">
                                <div class="bg-tab-content-area tab-carousel-1">
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/1.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">sale!</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Blouse</a>
                                                <div class="price-box">
                                                    <span class="price">$22.95</span>
                                                    <span class="old-price">$27.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/9.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">sale!</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$23.40</span>
                                                    <span class="old-price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/5.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$50.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/12.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Summer Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$28.98</span>
                                                    <span class="old-price">$30.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/13.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Summer Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$30.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/7.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Chiffon Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/11.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/10.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/2.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Blouse</a>
                                                <div class="price-box">
                                                    <span class="price">$27.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/4.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/6.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>4 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/8.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>3 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                </div>
                            </div>
                            <!-- TABS ONE END-->
                            <!-- TABS TWO START-->
                            <div role="tabpanel" class="tab-pane" id="tops-tab">
                                <div class="bg-tab-content-area tab-carousel-2">
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/9.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">sale!</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$23.40</span>
                                                    <span class="old-price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/5.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$50.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/1.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">sale!</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Blouse</a>
                                                <div class="price-box">
                                                    <span class="price">$22.95</span>
                                                    <span class="old-price">$27.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/2.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Blouse</a>
                                                <div class="price-box">
                                                    <span class="price">$27.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/12.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Summer Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$28.98</span>
                                                    <span class="old-price">$30.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/4.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/13.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Summer Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$30.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/7.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Chiffon Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/6.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>4 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/10.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/11.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/8.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>3 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                </div>
                            </div>
                            <!-- TABS TWO END-->
                            <!-- TABS THREE START-->
                            <div role="tabpanel" class="tab-pane" id="t-shirts">
                                <div class="bg-tab-content-area tab-carousel-3">
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/5.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$50.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/7.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Chiffon Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/6.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>4 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.40</span>
                                                    <span class="old-price">$20.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/13.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Summer Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$30.50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/9.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">sale!</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$23.40</span>
                                                    <span class="old-price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/1.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">sale!</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Blouse</a>
                                                <div class="price-box">
                                                    <span class="price">$22.95</span>
                                                    <span class="old-price">$27.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/10.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/2.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Blouse</a>
                                                <div class="price-box">
                                                    <span class="price">$27.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/12.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Summer Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$28.98</span>
                                                    <span class="old-price">$30.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/4.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                <div class="price-box">
                                                    <span class="price">$16.51</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/11.jpg"
                                                        alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>1 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                    <!-- TAB-SINGLE-ITEM START -->
                                    <div class="item">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="#"><img src="img/product/sale/8.jpg" alt="product-image" /></a>
                                                <a href="#" class="new-mark-box">new</a>
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-search"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title="Quick view"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="customar-comments-box">
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-box">
                                                        <span>3 Review(s)</span>
                                                    </div>
                                                </div>
                                                <a href="single-product.html">Printed Dress</a>
                                                <div class="price-box">
                                                    <span class="price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TAB-SINGLE-ITEM END -->
                                </div>
                            </div>
                            <!-- TABS THREE END-->
                        </div>
                        <!-- TAB PANES END -->
                        <!-- TABS MENU START-->
                        <div class="tab-carousel-menu">
                            <ul class="nav nav-tabs product-bg-nav">
                                <li class="active"><a href="#women-tab" data-toggle="tab">Women</a></li>
                                <li><a href="#tops-tab" data-toggle="tab">tops</a></li>
                                <li><a href="#t-shirts" data-toggle="tab">t-shirts</a></li>
                            </ul>
                        </div>
                        <!-- TABS MENU END-->
                    </div>
                    <!-- TAB-BG-PRODUCT-AREA END -->
                </div>
            </div>
            <div class="row">
                <!-- BESTSELLER-PRODUCTS-AREA START -->
                <div class="bestseller-products-area">
                    <div class="center-title-area">
                        <h2 class="center-title">bestseller</h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <!-- BESTSELLER-CAROUSEL START -->
                            <div class="bestseller-carousel">
                                <!-- BESTSELLER-SINGLE-ITEM START -->
                                <div class="item">
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="#"><img src="img/product/sale/1.jpg" alt="product-image" /></a>
                                            <a href="#" class="new-mark-box">sale!</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review (s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html">Blouse</a>
                                            <div class="price-box">
                                                <span class="price">$22.95</span>
                                                <span class="old-price">$27.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BESTSELLER-SINGLE-ITEM END -->
                                <!-- BESTSELLER-SINGLE-ITEM START -->
                                <div class="item">
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
                                            <a href="#" class="new-mark-box">new</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review (s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                            <div class="price-box">
                                                <span class="price">$16.51</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BESTSELLER-SINGLE-ITEM END -->
                                <!-- BESTSELLER-SINGLE-ITEM START -->
                                <div class="item">
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="#"><img src="img/product/sale/9.jpg" alt="product-image" /></a>
                                            <a href="#" class="new-mark-box">sale!</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review (s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html">Printed Dress</a>
                                            <div class="price-box">
                                                <span class="price">$23.40</span>
                                                <span class="old-price">$26.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BESTSELLER-SINGLE-ITEM END -->
                                <!-- BESTSELLER-SINGLE-ITEM START -->
                                <div class="item">
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="#"><img src="img/product/sale/13.jpg" alt="product-image" /></a>
                                            <a href="#" class="new-mark-box">new</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review (s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html">Printed Summer Dress</a>
                                            <div class="price-box">
                                                <span class="price">$30.50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BESTSELLER-SINGLE-ITEM END -->
                                <!-- BESTSELLER-SINGLE-ITEM START -->
                                <div class="item">
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
                                            <a href="#" class="new-mark-box">new</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review (s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                            <div class="price-box">
                                                <span class="price">$16.51</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BESTSELLER-SINGLE-ITEM END -->
                                <!-- BESTSELLER-SINGLE-ITEM START -->
                                <div class="item">
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="#"><img src="img/product/sale/7.jpg" alt="product-image" /></a>
                                            <a href="#" class="new-mark-box">new</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review (s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                            <div class="price-box">
                                                <span class="price">$16.40</span>
                                                <span class="old-price">$20.50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BESTSELLER-SINGLE-ITEM END -->
                            </div>
                            <!-- BESTSELLER-CAROUSEL END -->
                        </div>
                    </div>
                </div>
                <!-- BESTSELLER-PRODUCTS-AREA END -->
            </div>
            <div class="row">
                <!-- IMAGE-ADD-AREA START -->
                <div class="image-add-area">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- ONEHALF-ADD START -->
                        <div class="onehalf-add-shope zoom-img">
                            <a href="#"><img src="img/product/one-helf1.jpg" alt="shope-add" /></a>
                        </div>
                        <!-- ONEHALF-ADD END -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- ONEHALF-ADD START -->
                        <div class="onehalf-add-shope zoom-img">
                            <a href="#"><img src="img/product/one-helf2.jpg" alt="shope-add" /></a>
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