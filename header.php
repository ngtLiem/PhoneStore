<?php
session_start();
require 'connect.php';						 
?>
								  
<!-- HEADER-TOP START -->
<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="header-left-menu">
							<div class="welcome-info">
								Welcome <span>Bright Mobile</span>
							</div>
							<div class="currenty-converter">
								<!-- <form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Currency : </span><strong>VND</strong>
									</div>
									<ul class="currency-list currency-toogle">
									<li>
											<a title="Việt Nam (VND)" href="#">Việt Nam (VND)</a>
										</li>
										<li>
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
										<li>
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</form>									 -->
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Language : </span><strong>Tiếng Việt</strong>
								</div>
								<ul class="languages-choose language-toogle">
								<li>
										<a href="#" title="Tiếng Việt">
											<span>Tiếng Việt</span>
										</a>
									</li>
									<li>
										<a href="#" title="English">
											<span>English</span>
										</a>
									</li>
									<li>
										<a href="#" title="Français (French)">
											<span>Français</span>
										</a>
									</li>
								</ul>										
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->

					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!-- <div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									<li><a href="checkout.php">Check Out</a></li>
									<li><a href="wishlist.php">Wishlist</a></li>
									<li><a href="my-account.php">My Account</a></li>
									<li><a href="cart.php">My Cart</a></li>
									<li><a href="registration.php">Sign in</a></li>
									
								</ul>									
							</nav>
						</div> -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="header-right-menu">
					<nav>
					<ul class="list-inline">
							<?php
							 // require "login.php";
							 
							      if(!isset($_SESSION["id"])) // If session is not set then redirect to Login Page
							       {
							           printf(' <li><a href="registration.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>');
							       }
							       else{
							       	echo '<li>  Xin chào ' ; echo '<span style="color:Tomato;"><a href="ttkh.php"><b>' . $_SESSION['name'] . '</b></a></span></li>' ;
									echo '<li><span class="glyphicon glyphicon-log-out"></span><a href="logout.php"> Đăng xuất!</a></li>';
							       }

							?>
							
							</ul>
							</nav>
							</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->

    <!-- HEADER-MIDDLE START -->
		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="index.php"><img src="img/logo.png" alt="bstore logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>call us free</h3>
							<span>0123-456-789</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="search.php" method="get" class="search-form-cat">
								<div class="search-product form-group">
									<select name="catsearch" class="cat-search" id="catsearch">
										<option value="">Danh mục</option>
										<option value="1">Android</option>
										<option value="2">IPhone (IOS)</option>
										<option value="3">Điện thoại thông dụng</option>
									</select>
									<input type="text" class="form-control search-form" name="txtSearch" placeholder="Enter your search key ... " />
									<button class="search-button" type="submit">
										<i class="fa fa-search"></i>
									</button>				
								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->

    <!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area">
			<div class="container">
				<div class="row">
					<!-- SHOPPING-CART START -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
						<div class="shopping-cart-out pull-right">
							<div class="shopping-cart">
							
								<a class="shop-link" href="cart.php" title="View my shopping cart">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>Giỏ hàng</b>
									<span class="ajax-cart-quantity"><?php require "slsp_tronggh.php" ?></span>
								</a>
								<!-- hien thi san pham trong gio hang -->
								<div class="shipping-cart-overly" style="height:auto; width: 35	0px;">
									<?php
										if(isset($_SESSION["khid"])){
											$khid = $_SESSION["khid"];
											$sql = "select sp.SP_TEN, sp.SP_GIA, ct.CTGH_SOLUONG, sp.SP_HINHANH, sp.SP_MA
														from san_pham sp 
														join chitiet_gh ct on ct.SP_MA=sp.SP_MA
														join gio_hang gh on gh.GH_MA=ct.GH_MA
														join khach_hang kh on kh.KH_MA=gh.KH_MA
														where kh.KH_MA = {$khid}";
											
											$result = $conn->query($sql);
											if($result->num_rows>0){
												while($row = mysqli_fetch_assoc($result)){
									?>
												
										<div class="shipping-item">
											<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
											<div class="shipping-item-image">
												<a href="single_products.php?id=<?php echo $row["SP_MA"]; ?>"><img src="assets/img/product_img/<?php echo $row["SP_HINHANH"] ?>" alt="shopping image" style="width: 20%;" /></a>
											</div>
											<div class="shipping-item-text">
												<span><?php echo $row["CTGH_SOLUONG"]; ?> <span class="pro-quan-x">x</span> <a href="single_products.php?id=<?php echo $row["SP_MA"]; ?>" class="pro-cat"><?php echo $row["SP_TEN"]; ?></a></span>
												<!-- <span class="pro-quality"><a href="#">S,Black</a></span> -->
												<p>Giá <?php echo number_format($row["SP_GIA"]) ?>đ</p>
											</div>
										</div>																									
								<?php	
										}													
									} 
									$sql_tt = "select sum(ct.CTGH_SOLUONG*sp.SP_GIA) as tongtien from chitiet_gh ct
													join gio_hang gh on ct.GH_MA=gh.GH_MA
													join khach_hang kh on kh.KH_MA=gh.KH_MA
													join san_pham sp on sp.SP_MA=ct.SP_MA
													where kh.KH_MA= {$khid}";
									$rs = $conn->query($sql_tt);
									$tong = $rs->fetch_assoc()["tongtien"];
								?>
										
										<div class="shipping-total-bill">
											<!-- <div class="cart-prices">
												<span class="shipping-cost">$2.00</span>
												<span>Shipping</span>
											</div> -->
											<div class="total-shipping-prices">
												<span class="shipping-total text-success"><?php echo number_format($tong) ?>đ</span>
												<span>Tổng</span>
											</div>										
										</div>
										<div class="shipping-checkout-btn">
											<a href="checkouts.php">Check out <i class="fa fa-chevron-right"></i></a>
										</div>	
								<?php								
								}
								?>				
													
								</div>
							</div>
						</div>
					</div>	
					<!-- SHOPPING-CART END -->
					<!-- MAINMENU START -->
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
						<div class="mainmenu">
							<nav>
								<ul class="list-inline mega-menu">
									<li><a href="index.php">Home</a></li>
									<li>
										<a href="products.php">Điện thoại</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-0">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="category.php">Loại điện thoại</a>
													<ul>
													<?php
														require 'connect.php';
														$sql = "select LSP_MA as maloaisp, LSP_TEN from loai_sp";
														$result = $conn->query($sql);
														if($result->num_rows > 0){
															$result = $conn->query($sql);
															$result_all = $result->fetch_all(MYSQLI_ASSOC);
															foreach($result_all as $row){
														?>
														<li><a href="category.php?maloaisp=<?php echo $row["maloaisp"]?>"><?php echo $row["LSP_TEN"]?></a></li>
														<?php 
																}
															}
														?>
													</ul>
												</div>
											</div>
											<!-- <div class="right-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
													</ul>
												</div>
											</div>
										</div> -->
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									
									<li><a href="index.php">Contact</a></li>
									<li><a href="index.php">About</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				</div>
        <!-- MOBILE MENU START -->
				<!-- <div class="row">
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="index.html">Home variation 1</a></li>
											<li><a href="index-2.html">Home variation 2</a></li>
										</ul>														
									</li>								
									<li><a href="shop-gird.html">Women</a>
										<ul>
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">T-Shirts</a></li>
													<li><a href="shop-gird.html">Blouses</a></li>
												</ul>													
											</li>
											<li><a href="shop-gird.html">Dresses</a>
												<ul>
													<li><a href="shop-gird.html">Casual Dresses</a></li>
													<li><a href="shop-gird.html">Summer Dresses</a></li>
													<li><a href="shop-gird.html">Evening Dresses</a></li>	
												</ul>	
											</li>

										</ul>
									</li>
									<li><a href="shop-gird.html">men</a>
										<ul>											
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">Sports</a></li>
													<li><a href="shop-gird.html">Day</a></li>
													<li><a href="shop-gird.html">Evening</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Blouses</a>
												<ul>
													<li><a href="shop-gird.html">Handbag</a></li>
													<li><a href="shop-gird.html">Headphone</a></li>
													<li><a href="shop-gird.html">Houseware</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Accessories</a>
												<ul>
													<li><a href="shop-gird.html">Houseware</a></li>
													<li><a href="shop-gird.html">Home</a></li>
													<li><a href="shop-gird.html">Health & Beauty</a></li>
												</ul>														
											</li>
										</ul>										
									</li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">tops</a></li>
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="#">Delivery</a></li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>						
					</div>
				</div> -->
        <!-- MOBILE MENU END -->
			</div>
		</header>
		<!-- MAIN-MENU-AREA END -->