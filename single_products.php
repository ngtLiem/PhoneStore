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
				<?php
					require 'connect.php';
					$idsp = $_GET["id"];
					$sql = "SELECT * FROM san_pham sp
							join loai_sp lsp on lsp.LSP_MA=sp.LSP_MA
							where sp.SP_MA=".$idsp;
					$result=$conn->query($sql);
					$row=$result->fetch_assoc();
					$maloaisp = $row["LSP_MA"];
				?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="index.php">Home<span><i class="fa fa-caret-right"></i> </span> </a>
							<span> <i class="fa fa-caret-right"> </i> </span>
							<a href="products.php"> Điện thoại </a>
							<span> <?php echo $row["SP_TEN"]; ?> </span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>				
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<!-- SINGLE-PRODUCT-DESCRIPTION START -->
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
								<div class="single-product-view">
									  <!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="thumbnail_1">
											<div class="single-product-image">
												<img src="assets/img/product_img/<?php echo $row["SP_HINHANH"] ?>" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="assets/img/product_img/<?php echo $row["SP_HINHANH"] ?>" data-fancybox-group="gallery"><span class="btn large-btn text-dark">Phóng to <i class="fa fa-search-plus"></i></span></a>
											</div>	
										</div>
										<!-- Hiển thị nhiều ảnh -->
										<!-- <div class="tab-pane" id="thumbnail_2">
											<div class="single-product-image">
												<img src="img/product/sale/3.jpg" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="img/product/sale/3.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
											</div>	
										</div> -->
									</div>										
								</div>
								<!-- <div class="select-product">
									
									<ul class="nav nav-tabs select-product-tab bxslider">
										<li class="active">
											<a href="#thumbnail_1" data-toggle="tab"><img src="img/product/sidebar_product/1.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_2" data-toggle="tab"><img src="img/product/sidebar_product/2.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_3" data-toggle="tab"><img src="img/product/sidebar_product/3.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_4" data-toggle="tab"><img src="img/product/sidebar_product/4.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_5" data-toggle="tab"><img src="img/product/sidebar_product/5.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_6" data-toggle="tab"><img src="img/product/sidebar_product/6.jpg" alt="pro-thumbnail" /></a>
										</li>
									</ul>										
								</div> -->
							</div>
							<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
								<div class="single-product-descirption">
									<h2><?php echo $row["SP_TEN"]; ?></h2>
									<div class="single-product-social-share">
										<ul>
											<li><a href="#" class="twi-link"><i class="fa fa-twitter"></i>Tweet</a></li>
											<li><a href="#" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
											<li><a href="#" class="g-plus-link"><i class="fa fa-google-plus"></i>Google+</a></li>
											<li><a href="#" class="pin-link"><i class="fa fa-pinterest"></i>Pinterest</a></li>
										</ul>
									</div>
									<div class="single-product-review-box">
										<div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
										</div>
										<div class="read-reviews">
											<a href="#">Read reviews (1)</a>
										</div>
										<div class="write-review">
											<a href="#">Write a review</a>
										</div>		
									</div>
									<div class="single-product-condition">
										<p>Loại điện thoại: <span class="text-uppercase"></span><?php echo $row["LSP_TEN"]; ?></span></p>
										<p>Tình trạng: <span>Mới</span></p>
										
										<div class="product-in-stock">
										<p>Còn lại: <span><?php echo $row["SP_SOLUONGTON"]; ?></span></p>
										</div>
									</div>
									<div class="single-product-price">
										<h2><?php echo number_format($row["SP_GIA"]); ?> VND</h2>
									</div>
									<!-- <div class="single-product-desc">
										<p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
										
									</div> -->
									<!-- <div class="single-product-info">
										<a href="#"><i class="fa fa-envelope"></i></a>
										<a href="#"><i class="fa fa-print"></i></a>
										<a href="#"><i class="fa fa-heart"></i></a>
									</div> -->
									<div class="single-product-quantity">
										<p class="small-title">Số lượng</p> 
										<div class="cart-quantity">
											<div class="cart-plus-minus-button single-qty-btn">
												<input class="cart-plus-minus sing-pro-qty" type="text" name="qtybutton" value="0">
											</div>
										</div>
									</div>
									<!-- <div class="single-product-size">
										<p class="small-title">Size </p> 
										<select name="product-size" id="product-size">
											<option value="">S</option>
											<option value="">M</option>
											<option value="">L</option>
										</select>
									</div>
									<div class="single-product-color">
										<p class="small-title">Color </p> 
										<a href="#"><span></span></a>
										<a class="color-blue" href="#"><span></span></a>
									</div> -->
									<div class="single-product-add-cart">
										<a class="add-cart-text" title="Add to cart" href="#">Thêm vào giỏ hàng</a>
									</div>
								</div>
							</div>
						</div>
						<!-- SINGLE-PRODUCT-DESCRIPTION END -->
						<!-- SINGLE-PRODUCT INFO TAB START -->
						<div class="row">
							<div class="col-sm-12">
								<div class="product-more-info-tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs more-info-tab">
										<li class="active"><a href="#moreinfo" data-toggle="tab">Mô tả</a></li>
										<li><a href="#datasheet" data-toggle="tab">Thông tin cấu hình</a></li>
										<li><a href="#review" data-toggle="tab">Đánh giá</a></li>
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="moreinfo">
											<h3 class="text-uppercase text-info">Tính năng nổi bật</h3>
											<div class="tab-description">
												<div innerHTML><p><?php echo $row["SP_TINHNANG"]; ?></p></div>
											</div>
										</div>
										
										<div class="tab-pane" id="datasheet">
											<div class="deta-sheet">
												<table class="table-data-sheet">			
													<tbody>
														<tr class="odd">
															<td>Màn hình:</td>
															<td><?php echo $row["SP_MANHINH"]; ?></td>
														</tr>
														<tr class="even">
															<td class="td-bg">Hệ điều hành:</td>
															<td class="td-bg"><?php echo $row["SP_HDH"]; ?></td>
														</tr>
														<tr class="odd">
															<td>Camera sau:</td>
															<td><?php echo $row["SP_CAMSAU"]; ?></td>
														</tr>
														<tr class="even">
															<td class="td-bg">Camera trước:</td>
															<td class="td-bg"><?php echo $row["SP_CAMTRUOC"]; ?></td>
														</tr>
														<tr class="odd">
															<td>Chip:</td>
															<td><?php echo $row["SP_CPU"]; ?></td>
														</tr>
														<tr class="even">
															<td class="td-bg">RAM:</td>
															<td class="td-bg"><?php echo $row["SP_RAM"]; ?></td>
														</tr>
														<tr class="odd">
															<td>Dung lượng lưu trữ:</td>
															<td><?php echo $row["SP_ROOM"]; ?></td>
														</tr>
														<tr class="even">
															<td class="td-bg">Sim:</td>
															<td class="td-bg"><?php echo $row["SP_SIM"]; ?></td>
														</tr>
														<tr class="odd">
															<td>Pin, sạc:</td>
															<td><?php echo $row["SP_PIN"]; ?></td>
														</tr>
														
													</tbody>
												</table>				
											</div>
										</div>
										<div class="tab-pane" id="review">
											<div class="row tab-review-row">
												<div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
													<div class="tab-rating-box">
														<span>Grade</span>
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>	
														<div class="review-author-info">
															<strong>write A REVIEW</strong>
															<span>06/22/2015</span>
														</div>															
													</div>
												</div>
												<div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
													<div class="write-your-review">
														<p><strong>write A REVIEW</strong></p>
														<p>write A REVIEW</p>
														<span class="usefull-comment">Was this comment useful to you? <span>Yes</span><span>No</span></span>
														<a href="#">Report abuse </a>
													</div>
												</div>
												<a href="#" class="write-review-btn">Write your review!</a>
											</div>
										</div>
									</div>									
								</div>
							</div>
						</div>
						<!-- SINGLE-PRODUCT INFO TAB END -->
						
						<!-- SẢN PHẨM TƯƠNG TỰ -->
						<?php require 'related_products.php' ?>

					</div>
					<!-- RIGHT SIDE BAR START -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<!-- SINGLE SIDE BAR START -->
						<div class="single-product-right-sidebar">
							<h2 class="left-title">Viewed products</h2>
							<ul>
								<li>
									<a href="#"><img src="img/product/sidebar_product/2.jpg" alt="" /></a>
									<div class="r-sidebar-pro-content">
										<h5><a href="#">Faded Short ...</a></h5>
										<p>Faded short sleeves t-shirt with high...</p>
									</div>
								</li>
								<li>
									<a href="#"><img src="img/product/sidebar_product/4.jpg" alt="" /></a>
									<div class="r-sidebar-pro-content">
										<h5><a href="#">Printed Chif ..</a></h5>
										<p>Printed chiffon knee length dress...</p>
									</div>
								</li>
								<li>
									<a href="#"><img src="img/product/sidebar_product/6.jpg" alt="" /></a>
									<div class="r-sidebar-pro-content">
										<h5><a href="#">Printed Sum ...</a></h5>
										<p>Long printed dress with thin...</p>
									</div>
								</li>
								<li>
									<a href="#"><img src="img/product/sidebar_product/1.jpg" alt="" /></a>
									<div class="r-sidebar-pro-content">
										<h5><a href="#">Printed Dress </a></h5>
										<p>100% cotton double printed dress....</p>
									</div>
								</li>
							</ul>
						</div>	
						<!-- SINGLE SIDE BAR END -->
						<!-- SINGLE SIDE BAR START -->
						<div class="single-product-right-sidebar clearfix">
							<h2 class="left-title">Tags </h2>
							<div class="category-tag">
								<a href="#">fashion</a>
								<a href="#">handbags</a>
								<a href="#">women</a>
								<a href="#">men</a>
								<a href="#">kids</a>
								<a href="#">New</a>
								<a href="#">Accessories</a>
								<a href="#">clothing</a>
								<a href="#">New</a>
							</div>							
						</div>	
						<!-- SINGLE SIDE BAR END -->
						<!-- SINGLE SIDE BAR START -->						
						<div class="single-product-right-sidebar">
							<div class="slider-right zoom-img">
								<a href="#"><img class="img-responsive" src="img/product/cms11.jpg" alt="sidebar left" /></a>
							</div>							
						</div>
					</div>
					<!-- SINGLE SIDE BAR END -->				
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