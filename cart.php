<!doctype html>
<html lang="en">

<?php include "head.php" ?>

<body>
    <?php
		include "header.php";
	?>
    <!-- main -->
    <!-- MAIN-CONTENT-SECTION START -->

<?php
	if($soluonggiohang == 0){
		
		$message = "Giỏ hàng rỗng, hãy thêm sản phẩm vào giỏ hàng.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: products.php');
	}
?>

    <section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="index.html">home</a>
							<span><i class="fa fa-caret-right	"></i></span>
							<span>Giỏ hàng</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
			
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
						<h2 class="page-title">Thông tin chi tiết giỏ hàng <span class="shop-pro-item">Số lượng sản phẩm trong giỏ hàng: <?php require 'slsp_tronggh.php'; ?> sản phẩm</span></h2>
						
					</div>	
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPING-CART-MENU START -->
						<div class="shoping-cart-menu">
							<ul class="step">
								<li class="step-current first">
									<span>01. Tóm tắt</span>
								</li>
								<li class="step-todo second">
									<span>02. Địa chỉ</span>
								</li>
								<li class="step-todo third">
									<span>03. Vận chuyển</span>
								</li>
								<li class="step-todo four">
									<span>04. Thanh toán</span>
								</li>
								<li class="step-todo last" id="step_end">
									<span>05. Đơn hàng</span>
								</li>
							</ul>									
						</div>
<!-- tu day ne -->	<div class="table-responsive">
							<table class="table table-bordered" id="cart-summary">
								<thead>
									<tr>
										<th class="cart-product">Sản phẩm</th>
										<th class="cart-description">Mô tả</th>
										<th class="cart-avail text-center">Trạng thái</th>
										<th class="cart-unit text-right">Giá</th>
										<th class="cart_quantity text-center">Số lượng</th>
										<th class="cart-delete">&nbsp;</th>
										<th class="cart-total text-right">Thành tiền</th>
									</tr>
								</thead>
					<?php
						if($soluonggiohang > 0){
							$khid = $_SESSION["khid"];
							$sl = 0;
							$total = 0;
							$sql = "select gh.GH_MA, gh.KH_MA, ct.CTGH_SOLUONG, ct.SP_MA, gh.GH_TONGTIEN
									from gio_hang gh
									join chitiet_gh ct on ct.GH_MA = gh.GH_MA
									where gh.KH_MA = {$khid}";
							$rs = $conn->query($sql);
							foreach($rs as $sp){
								$sl += 1;
								$spid = $sp["SP_MA"];
								$query = "select * 
											from san_pham sp 
											join loai_sp lsp on sp.LSP_MA = lsp.LSP_MA 
											where sp.SP_MA = {$spid}";

								$result = $conn->query($query);
								foreach($result as $s){
									?>
							<form action="remove_cart.php" method="post" name="form5" id="ff5">	
								<tbody>	
									<tr>
										<td class="cart-product">
											<a href="single_products.php?id=<?php echo $s["SP_MA"] ?>"><img alt="Blouse" src="assets/img/product_img/<?php echo $s["SP_HINHANH"]; ?>"></a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="single_products.php?id=<?php echo $s["SP_MA"] ?>"><?php  echo $s["SP_TEN"]?></a></p>
											<small><a href="category.php?maloaisp=<?php echo $s["LSP_MA"]; ?>">Loại sản phẩm: <?php echo $s["LSP_TEN"]; ?></a> </small>
											<small><a href="#">Màu: <?php echo $s["SP_MAUSAC"]; ?></a></small>
										</td>
										<td class="cart-avail"><span class="label label-success">In stock</span></td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price"><?php echo number_format($s["SP_GIA"]); ?>đ</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<div class="cart-plus-minus-button">
												<input class="cart-plus-minus" type="number" min="1" max="99" name="qty" value="<?php echo $sp["CTGH_SOLUONG"]; ?>">
											</div>
											<div>
											<input type="submit" name="update" style="margin-top:15px; " value="Cập nhật" class="btn btn-default" />
										</div>
										</td>
										<td class="cart-delete text-center">
											<span>
												<a href="remove_cart.php?idsprm=<?php echo $s["SP_MA"]; ?>" type="submit" name="remove" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
												<input type="submit" name="remove" value="Delete" class="btn btn-default pull-right" style="color: #000 !important;"/>
												<input type="hidden" name="idsprm" value="<?php echo $s["SP_MA"] ?>" />
											</span>
										</td>
										<td class="cart-total">
											<!-- <span class="price"><?php echo number_format($sp["CTGH_SOLUONG"] * $s["SP_GIA"]); ?></span> -->
											<span class="price"><?php echo number_format($sp["GH_TONGTIEN"]); ?></span>
										</td>
									</tr>
								</tbody>
							</form>
							<?php
								}
							}
						}
					?>
					<?php
							if($soluonggiohang > 0){
							$khid = $_SESSION["khid"];
							$sl = 0;
							$total = 0;
							$sql = "select sum(gh.GH_TONGTIEN) as tongtien
									from gio_hang gh
									join chitiet_gh ct on ct.GH_MA = gh.GH_MA
									where gh.KH_MA = {$khid}";
							$rs = $conn->query($sql);
							$tongtien = $rs->fetch_assoc()["tongtien"];
					?>
								<tfoot>										
									<tr class="cart-total-price">
										<td class="cart_voucher" colspan="3" rowspan="4"></td>
										<td class="text-right" colspan="3">Tổng tiền</td>
										<td id="total_product" class="price" colspan="1"><?php echo number_format($tongtien); ?> đ</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Phí giao hàng</td>
										<td id="total_shipping" class="price" colspan="1">0 đ</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Giảm giá</td>
										<td class="price" colspan="1">0 đ</td>
									</tr>
									<tr>
										<td class="total-price-container text-right" colspan="3">
											<span>Tổng</span>
										</td>
										<td id="total-price-container" class="price" colspan="1">
											<span id="total-price"><?php echo number_format($tongtien); ?> đ</span>
										</td>
									</tr>
								</tfoot>
								<?php
								}			
					?>
							</table>
						</div>
						<!-- toi day ne -->
					</div>
					<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="first_item primari-box mycartaddress-info">
							<ul class="address">
								<li>
									<h3 class="page-subheading box-subheading">
										Thông tin cửa hàng
									</h3>
								</li>
								<li><span class="address_name">BootExperts</span></li>
								<li><span class="address_company">Web development Company</span></li>
								<li><span class="address_address1">Bonossri</span></li>
								<li><span class="address_address2">D-Block</span></li>
								<li><span class="">Rampura</span></li>
								<li><span class="">Dhaka</span></li>
								<li><span class="address_phone">+880 1735161598</span></li>
								<li><span class="address_phone_mobile">+880 1975161598</span></li>
							</ul>	
						</div>						
					</div> -->
					<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="second_item primari-box mycartaddress-info">
							<?php
								$khid = $_SESSION["khid"];
								$sql_kh = "select * from khach_hang where KH_MA = {$khid}";
								$rs_kh = $conn->query($sql_kh);
								$row_kh = $rs_kh->fetch_assoc();
							?>
							<ul class="address">
								<li>
									<h3 class="page-subheading box-subheading">
										Thông tin khách hàng
									</h3>
								</li>
								<li><span class="text-secondary text-red">Họ và Tên: </span><span class="address_name"><?php echo $row_kh["KH_TEN"]; ?></span></li>
								<li><span class="address_company">Web development Company</span></li>
								<li><span class="address_address1">Dhaka</span></li>
								<li><span class="address_address2">Bonossri</span></li>
								<li><span class="">Dhaka-1205</span></li>
								<li><span class="">Rampura</span></li>
								<li><span class="address_phone">+880 1735161598</span></li>
								<li><span class="address_phone_mobile">+880 1975161598</span></li>
							</ul>	
							
						</div>
					</div> -->
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- RETURNE-CONTINUE-SHOP START -->
						<div class="returne-continue-shop">
							<a href="index.php" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
							<a href="checkout-signin.php" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
						</div>	
						<!-- RETURNE-CONTINUE-SHOP END -->						
					</div>
					
					
				</div>
<?php require 'featured_products.php' ?>
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