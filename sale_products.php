<!-----------------------------------------------------------------------------------------------------  -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <!-- NEW-PRODUCT-AREA START -->
    <div class="new-product-area">
        <div class="left-title-area">
            <h2 class="left-title">Sale Products</h2>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <!-- NEW-PRO-CAROUSEL START -->
                    <div class="new-pro-carousel">
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
                        <!-- NEW-PRODUCT-SINGLE-ITEM START -->
                        <div class="item">
                            <div class="new-product">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="product.php?id=<?php echo $row["SP_MA"] ?>"><img
                                                src="assets/img/product_img/<?php echo $row["SP_HINHANH"]?>"
                                                alt="product-image" /></a> <a href="#" class="new-mark-box">sale!</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
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
                                        <a href="product.php?id=<?php echo $row["SP_MA"]?>"><?php echo $row["SP_TEN"]?></a>
                                        <div class="price-box">
                                            <span class="price"><?php echo $row["SP_GIA"] ?> VNĐ</span>
																						<span class="old-price"><?php echo $row["SP_GIA"] ?> VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
												}
											}
											?>
                        <!-- NEW-PRODUCT-SINGLE-ITEM END -->
                        <!-- NEW-PRODUCT-SINGLE-ITEM START -->
                    </div>
                    <!-- NEW-PRO-CAROUSEL END -->
                </div>
            </div>
        </div>
    </div>
</div>