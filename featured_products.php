<div class="row">
    <!-- FEATURED-PRODUCTS-AREA START -->
    <div class="featured-products-area">
        <div class="center-title-area">
            <h2 class="center-title">Sản phẩm nổi bật</h2>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <!-- FEARTURED-CAROUSEL START -->
                <div class="feartured-carousel">
                    <!-- SINGLE-PRODUCT-ITEM START -->
										<?php
													require 'connect.php';
													$sql = "select * from 
																	chitiet_pn ct join san_pham sp on ct.SP_MA=sp.SP_MA 
																	join phieu_nhap pn on ct.PN_STT=pn.PN_STT 
																	ORDER BY pn.PN_NGAYNHAP";
													
													$result = $conn->query($sql);
													if($result->num_rows>0){
														while($row = $result->fetch_assoc()){
													?>
                    <div class="item">
                        <div class="single-product-item">
                            <div class="product-image">
								<a href="single_products.php?id=<?php echo $row["SP_MA"] ?>"><img src="assets/img/product_img/<?php echo $row["SP_HINHANH"]?>" alt="product-image" /></a>
                                <!-- <a href="#" class="new-mark-box">new</a> -->
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
                                        <span>1 Review (s)</span>
                                    </div>
                                </div>
                                <a href="single_products.php?id=<?php echo $row["SP_MA"]?>"><?php echo $row["SP_TEN"]?></a>
                                <div class="price-box">
                                  <span class="price"><?php echo $row["SP_GIA"] ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php 
						}
					} 
					?>
                    <!-- SINGLE-PRODUCT-ITEM END -->
                    <!-- SINGLE-PRODUCT-ITEM START -->
                </div>
                <!-- FEARTURED-CAROUSEL END -->
            </div>
        </div>
    </div>
    <!-- FEATURED-PRODUCTS-AREA END -->
</div>