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
				<!-- HIỂN THỊ TÊN TRANG WEB -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="index.html">Home</a>
							<span><i class="fa fa-caret-right"></i></span>
							<span>Women</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>

      <?php include "slidebar.php" ?>

			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<!-- hình đầu trang web -->
						<div class="right-all-product">
							<!-- PRODUCT-CATEGORY-HEADER START -->
							<div class="product-category-header">
								<div class="category-header-image">
									<img src="img/category-header.jpg" alt="category-header" />
									<div class="category-header-text">
										<h2>Women </h2>
										<strong>You will find here all woman fashion collections.</strong>
										<p>This category includes all the basics of your wardrobe and much more:<br /> shoes, accessories, printed t-shirts, feminine dresses, women's jeans!</p>
									</div>									
								</div>
							</div>
							<!-- PRODUCT-CATEGORY-HEADER END -->

							<!-- ======================================================= -->
							<!-- HIỂN THỊ SP THEO DANH MỤC -->
							<div class="product-category-title">
								<!-- PRODUCT-CATEGORY-TITLE START -->
								<h1>
									<span class="cat-name">Women</span>
									<span class="count-product">There are 13 products.</span>
								</h1>
								<!-- PRODUCT-CATEGORY-TITLE END -->
							</div>
							<div class="product-shooting-area">
								<div class="product-shooting-bar">
									<!-- SHOORT-BY START -->
									<div class="shoort-by">
										<label for="productShort">Sort by</label>
										<div class="short-select-option">
											<select name="sortby" id="productShort">
												<option value="">--</option>
												<option value="">Price: Lowest first</option>
												<option value="">Price: Highest first</option>
												<option value="">Product Name: A to Z</option>
												<option value="">Product Name: Z to A</option>
												<option value="">In stock</option>
												<option value="">Reference: Lowest first</option>
												<option value="">Reference: Highest first</option>
											</select>												
										</div>
									</div>
									<!-- SHOORT-BY END -->
									<!-- SHOW-PAGE START -->
									<div class="show-page">
										<label for="perPage">Show</label>
										<div class="s-page-select-option">
											<select name="show" id="perPage">
												<option value="">11</option>
												<option value="">12</option>
											</select>													
										</div>
										<span>per page</span>										
									</div>
									<!-- SHOW-PAGE END -->
									<!-- VIEW-SYSTEAM START -->
									<div class="view-systeam">
										<label for="perPage">View:</label>
										<ul>
											<li class="active"><a href="shop-gird.html"><i class="fa fa-th-large"></i></a><br />Grid</li>
											<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a><br />List</li>
										</ul>
									</div>
									<!-- VIEW-SYSTEAM END -->
								</div>
								<!-- PRODUCT-SHOOTING-RESULT START -->
								<div class="product-shooting-result">
									<form action="#">
										<button class="btn compare-button">
											Compare (<span class="compare-value">1</span>)
											<i class="fa fa-chevron-right"></i>
										</button>
									</form>
									<div class="showing-item">
										<span>Showing 1 - 12 of 13 items</span>
									</div>
									<div class="showing-next-prev">
										<ul class="pagination-bar">
											<li class="disabled">
												<a href="#" ><i class="fa fa-chevron-left"></i>Previous</a>
											</li>
											<li class="active">
												<span><a class="pagi-num" href="#">1</a></span>
											</li>
											<li>
												<span><a class="pagi-num" href="#">2</a></span>
											</li>
											<li>
												<a href="#" >Next<i class="fa fa-chevron-right"></i></a>
											</li>
										</ul>
										<form action="#">
											<button class="btn showall-button">Show all</button>
										</form>
									</div>
								</div>
								<!-- PRODUCT-SHOOTING-RESULT END -->
							</div>
						</div>
						<!-- ======================================================================================== -->
						<!-- ALL GATEGORY-PRODUCT START -->
						<div class="all-gategory-product">
							<div class="row">
								<ul class="gategory-product">
									<!-- SINGLE ITEM START -->
										<?php 
											require 'connect.php';
											//lay san pham theo id
											$maloaisp = $_GET["maloaisp"];
											
											$result = mysqli_query($conn, 'select count(SP_MA) as total from san_pham where LSP_MA = '.$maloaisp);
											
											$row = mysqli_fetch_assoc($result);
											$total_records = $row['total'];		
											if($row['total'] === 0)
											{
											header('Location: khongcosanpham.php');
											}					   
											$offset =1;
											// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
											$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
											$limit = 6;
											// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
											// tổng số trang
											$total_page = ceil($total_records / $limit);
										 
											// Giới hạn current_page trong khoảng 1 đến total_page
											if ($current_page > $total_page){
												$current_page = $total_page;
											}
											else if ($current_page < 1){
												$current_page = 1;
											}
										 
											// Tìm Start
											$start = ($current_page - 1) * $limit;
										 
											// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH
											// Có limit và start rồi thì truy vấn CSDL lấy danh Sách
											$result = mysqli_query($conn, "SELECT * FROM san_pham where LSP_MA = '$maloaisp' LIMIT $start, $limit " );
											 // output data of each row
											 while ($row = mysqli_fetch_assoc($result)){
													?>
									<li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12" >
										<div class="single-product-item">
											<div class="product-image">
											<a href="product.php?id=<?php echo $row["SP_MA"] ?>"><img src="assets/img/product_img/<?php echo $row["SP_HINHANH"]?>" alt="product-image" /></a> 
											<a href="#" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
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
												<a href="product.php?id=<?php echo $row["SP_MA"]?>"><?php echo $row["SP_TEN"]?></a>
                        <div class="price-box">
                          <span class="price"><?php echo $row["SP_GIA"] ?> VNĐ</span>
                        </div>
											</div>
										</div>						
									</li>
									<!-- SINGLE ITEM END -->
									<?php
												}
											?>	
								</ul>
							</div>
						</div>
						<!-- ALL GATEGORY-PRODUCT END -->


						<!-- Tính số trang và chuyển trang -->
						<!-- PRODUCT-SHOOTING-RESULT START -->
						<div class="product-shooting-result product-shooting-result-border">
							<form action="#">
								<button class="btn compare-button">
									Compare (<strong class="compare-value">1</strong>)
									<i class="fa fa-chevron-right"></i>
								</button>
							</form> 
							 <div class="showing-item">
								<span>Showing   items</span>
							</div> 
							<div class="showing-next-prev">
								<ul class="pagination-bar">
									<?php
									for ($i = 1; $i <= $total_page; $i++){
										if ($i == $current_page){
												 ?>
									<li class="disabled">
										<a href="#" ><i class="fa fa-chevron-left"></i>Previous</a>
									</li>
									<li class="active">
										<span><a class="pagi-num" href="#"><?php echo $i  ?></a></span>
									</li>
									<?php
										if($i != $current_page){
									?>
									<li>
										<span><a class="pagi-num" href="#"><?php echo $i  ?></a></span>
										<?php echo '<a href="category.php?maloaisp='.$maloaisp.'&page='.$i.'">'.$i.'</a> '; ?>
									</li>
									<?php
										}
									?>
									<li>
										<a href="#" >Next<i class="fa fa-chevron-right"></i></a>
									</li>
									<?php }} ?>
								</ul>
								<!-- <form action="#">
									<button class="btn showall-button">Show all</button>
								</form> -->
							</div>
						</div>	
						<!-- PRODUCT-SHOOTING-RESULT END -->
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