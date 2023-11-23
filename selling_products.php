<div class="row">
    <!-- BESTSELLER-PRODUCTS-AREA START -->
    <div class="bestseller-products-area">
        <div class="center-title-area">
            <h2 class="center-title">Sản phẩm bán chạy</h2>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <!-- BESTSELLER-CAROUSEL START -->
                <div class="bestseller-carousel">
                    <!-- BESTSELLER-SINGLE-ITEM START -->
										<?php 
											require 'connect.php';
											$sql = "select sp.sp_ma as id, sp.sp_ten as ten, sp.sp_gia as gia, sp.SP_HINHANH as anh, sum(ct.cthd_slb) as so_ban, count(distinct ct.hd_stt) as so_hd
                                from san_pham sp
                                join chi_tiet_hd ct on sp.sp_ma = ct.sp_ma
                                group by sp.sp_ma, sp.sp_ten
                                order by so_ban desc
                                limit 5;  ";            
											$result = $conn->query($sql);
											$row1 = $result->fetch_assoc();
											$row2 = $result->fetch_assoc();
											$row3 = $result->fetch_assoc();
											$row4 = $result->fetch_assoc();
				
											$top1_id = $row1["id"];
											$top1_ten = $row1["ten"];
											$top1_soban = $row1["so_ban"];
											$top1_anh = $row1["anh"];
											$top1_hd = $row1["so_hd"];
											$top1_gia = $row1["gia"];
				
											$top2_id = $row2["id"];
											$top2_ten = $row2["ten"];
											$top2_soban = $row2["so_ban"];
											$top2_anh = $row2["anh"];
											$top2_hd = $row2["so_hd"];
											$top2_gia = $row2["gia"];
				
											$top3_id = $row3["id"];
											$top3_ten = $row3["ten"];
											$top3_soban = $row3["so_ban"];
											$top3_anh = $row3["anh"];
											$top3_hd = $row3["so_hd"];
											$top3_gia = $row3["gia"];
				
											$top4_id = $row4["id"];
											$top4_ten = $row4["ten"];
											$top4_soban = $row4["so_ban"];
											$top4_anh = $row4["anh"];
											$top4_hd = $row4["so_hd"];
											$top4_gia = $row4["gia"];

                                            $top5_id = $row4["id"];
											$top5_ten = $row4["ten"];
											$top5_soban = $row4["so_ban"];
											$top5_anh = $row4["anh"];
											$top5_hd = $row4["so_hd"];
											$top5_gia = $row4["gia"];
										?>
										<!-- TOP 1 BÁN CHẠY -->
                    <div class="item">
                        <div class="single-product-item">
                            <div class="product-image">
								<a href="single_products.php?id=<?php echo $top1_id; ?>"><img src="assets/img/product_img/<?php echo $top1_anh?>" alt="product-image" /></a>
                                <a href="#" class="new-mark-box">top 1!</a>
                                <div class="overlay-content">
                                    <ul>
                                        <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="add_carts.php?id=<?php echo $top1_id ?>" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
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
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span style="color: #ff5858;; font-size:18px;;">Đã bán: <?php echo $top1_soban; ?></span>
                                    </div>
                                </div>
								<a href="single_products.php?id=<?php echo $top1_id; ?>"><?php echo $top1_ten; ?></a>
                                <div class="price-box">
                                  <span class="price"><?php echo $top1_gia; ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
									<!-- TOP 2 BÁN CHẠY -->
										<div class="item">
                        <div class="single-product-item">
                            <div class="product-image">
								<a href="single_products.php?id=<?php echo $top2_id; ?>"><img src="assets/img/product_img/<?php echo $top2_anh?>" alt="product-image" /></a>
                                <a href="#" class="new-mark-box">top 2!</a>
                                <div class="overlay-content">
                                    <ul>
                                        <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="add_carts.php?id=<?php echo $top2_id ?>" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
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
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span style="color: #ff5858;; font-size:18px;;">Đã bán: <?php echo $top2_soban; ?></span>
                                    </div>
                                </div>
								<a href="single_product.php?id=<?php echo $top2_id; ?>"><?php echo $top2_ten; ?></a>
                                <div class="price-box">
                                  <span class="price"><?php echo $top2_gia; ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
				    <!-- TOP 3 BÁN CHẠY -->
					<div class="item">
                        <div class="single-product-item">
                            <div class="product-image">
								<a href="single_products.php?id=<?php echo $top3_id; ?>"><img src="assets/img/product_img/<?php echo $top3_anh?>" alt="product-image" /></a>
                                <a href="#" class="new-mark-box">top 3!</a>
                                <div class="overlay-content">
                                    <ul>
                                        <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="add_carts.php?id=<?php echo $top3_id ?>" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
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
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span style="color: #ff5858;; font-size:18px;;">Đã bán: <?php echo $top3_soban; ?></span>
                                    </div>
                                </div>
								<a href="single_products.php?id=<?php echo $top3_id; ?>"><?php echo $top3_ten; ?></a>
                                <div class="price-box">
                                  <span class="price"><?php echo $top3_gia; ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- TOP 4 BÁN CHẠY -->
					<div class="item">
                        <div class="single-product-item">
                            <div class="product-image">
								<a href="single_products.php?id=<?php echo $top4_id; ?>"><img src="assets/img/product_img/<?php echo $top4_anh?>" alt="product-image" /></a>
                                <a href="#" class="new-mark-box">top 4!</a>
                                <div class="overlay-content">
                                    <ul>
                                        <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="add_carts.php?id=<?php echo $top4_id ?>" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
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
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span style="color: #ff5858;; font-size:18px;;">Đã bán: <?php echo $top4_soban; ?></span>
                                    </div>
                                </div>
								<a href="single_products.php?id=<?php echo $top4_id; ?>"><?php echo $top4_ten; ?></a>
                                <div class="price-box">
                                  <span class="price"><?php echo $top4_gia; ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TOP 4 BÁN CHẠY -->
					<div class="item">
                        <div class="single-product-item">
                            <div class="product-image">
								<a href="single_products.php?id=<?php echo $top5_id; ?>"><img src="assets/img/product_img/<?php echo $top5_anh?>" alt="product-image" /></a>
                                <a href="#" class="new-mark-box">top 5!</a>
                                <div class="overlay-content">
                                    <ul>
                                        <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="add_carts.php?id=<?php echo $top5_id ?>" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
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
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-box">
                                        <span style="color: #ff5858;; font-size:18px;;">Đã bán: <?php echo $top5_soban; ?></span>
                                    </div>
                                </div>
								<a href="single_products.php?id=<?php echo $top5_id; ?>"><?php echo $top5_ten; ?></a>
                                <div class="price-box">
                                  <span class="price"><?php echo $top5_gia; ?> VNĐ</span>
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