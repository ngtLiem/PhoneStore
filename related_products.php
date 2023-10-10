<!-- RELATED-PRODUCTS-AREA START -->
<div class="row">
    <div class="col-sm-12">
        <div class="left-title-area">
            <h2 class="left-title">sản phẩm tương tự</h2>
        </div>
    </div>
    <div class="related-product-area featured-products-area">
        <div class="col-sm-12">
            <div class=" row">
                <!-- RELATED-CAROUSEL START -->
                <div class="related-product">
                    <!-- SINGLE-PRODUCT-ITEM START -->
                    <?php
                        require 'connect.php';
                        // lấy id loại sản phẩm
                        $maloaisp=$row["LSP_MA"];

                        $truyvan = "SELECT SP_MA,SP_TEN,SP_GIA,SP_HINHANH from san_pham WHERE  LSP_MA = '$maloaisp'  limit 10";
                        $re = $conn->query($truyvan);
                        if($re->num_rows > 0){
                            while($dong = $re->fetch_assoc()){
                    ?>

                    <div class="item">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single_products.php?id=<?php echo $dong["SP_MA"] ?>"><img src="assets/img/product_img/<?php echo $dong["SP_HINHANH"]?>" alt="product-image" /></a> 
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
                                <a href="single_products.php?id=<?php echo $dong["SP_MA"]?>"><?php echo $dong["SP_TEN"]?></a>
                                <div class="price-box">
                                    <span class="price"><?php echo $dong["SP_GIA"] ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                            }
                        } 
                    ?>
                    <!-- SINGLE-PRODUCT-ITEM END -->
                </div>
                <!-- RELATED-CAROUSEL END -->
            </div>
        </div>
    </div>
</div>
<!-- RELATED-PRODUCTS-AREA END -->