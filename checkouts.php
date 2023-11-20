<!doctype html>
<html lang="en">


<?php include "head.php" ?>

<body>
    <?php
		include "header.php";
	?>

    <!-- <?php
	// if($soluonggiohang == 0){
	// 	$message = "Giỏ hàng rỗng, hãy thêm sản phẩm vào giỏ hàng.";
    //     echo "<script type='text/javascript'>alert('$message');</script>";
    //     header('Location: products.php');
	// }
?> -->

    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="index.html">HOMe</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>Addresses</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-title">Addresses</h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPING-CART-MENU START -->
                    <div class="shoping-cart-menu">
                        <ul class="step">
                            <li class="step-todo first step-done">
                                <span><a href="cart.php">1. Tóm tắt</a></span>
                            </li>
                            <li class="step-current second">
									<span>2. Xác nhận đơn hàng</span>
								</li>
                            <li class="step-todo third" id="step_end">
                                <span>03. Đơn hàng</span>
                            </li>
                        </ul>
                    </div>
                    <!-- SHOPING-CART-MENU END -->
                </div>
                <!-- ADDRESS AREA START -->
                <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
                    <div class="form-group primary-form-group p-info-group deli-address-group">
                        <h3 class="page-subheading box-subheading">Thông tin địa chỉ của bạn</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
                    <div class="form-group primary-form-group p-info-group deli-address-group">
                        <h3 class="page-subheading box-subheading">Thông tin đơn hàng</h3>
                    </div>
                </div>
            </div>
            <form method="post" action="luudonhang.php">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Thông tin khách hàng</div>
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <img src="assets/img/cus_img/<?php echo $_SESSION["avt"] ?>" alt="" style="heigh:auto; width:auto; object-fit: cover;">
                                </div>
                                <label>Tên khách hàng : </label><span> <?php echo $_SESSION["name"]?></span>
                                <div class="col-mb-8">
                                    <label>Điện thoại: </label><span> <?php echo $_SESSION["sdt"]?></span>
                                </div>
                                <div class="col-mb-8">
                                    <label>Email:</label><span> <?php echo $_SESSION["email"]?></span>
                                </div>
                                <div class="col-mb-8">
                                    <label>Địa chỉ giao hàng: </label><span> <?php echo $_SESSION["location"]?></span>
                                    <br/>
                                </div>
                                <div class="col-mb-8">
                                    <label>Ngày đặt hàng: <input type="text" readonly class="form-control" value="<?php echo date('d-m-Y'); ?>" name="date" id="datechoose" required></label>
                                </div>
								<div class="col-mb-8" style="margin-left:170px;">
                                    <label>Hình thức thanh toán
                                        <select class="form-control" name="hinhthuctt">
                                            <?php
											$sql="SELECT * from phuong_thuc_thanh_toan ";
											$result = $conn->query($sql); 
											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
										?>
                                            <option value="<?php echo $row["PTTT_MA"] ?>"><?php echo $row["PTTT_TEN"] ?></option>
                                            <?php
												}
											}
										?>
                                        </select>
                                    </label>
								</div>
								<div class="col-mb-8" style="margin-left:170px;">
                                    <label>Nhà vận chuyển
                                        <select class="form-control" name="nhavanchuyen">
                                            <?php
											$sql="SELECT * from nha_van_chuyen ";
											$result = $conn->query($sql); 
											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
										?>
                                            <option value="<?php echo $row["NVC_MA"] ?>"><?php echo $row["NVC_TEN"] ?></option>
                                            <?php
												}
											}
										?>
                                        </select>
                                    </label>
                                </div>
                                

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Danh sách các sản phẩm</div>
                            <div class="panel-body">
								<!-- tu day -->
								<div class="col-md-12">
									<div class="table-responsive">          
										<table class="table">
											<thead>
											<tr>
												<th>Tên sản phẩm</th>
												<th>SL</th>
												<th>Giá</th>
												<th>Tổng</th>
											</tr>
											</thead>
											<tbody>
                                            <?php	
                                                        $sp_array = array();
                                                        $slsp_array = array();
                                                        $khid = $_SESSION["khid"];
                                                        $sl = 0;
                                                        $sql = "select ct.SP_MA, ct.CTGH_SOLUONG, gh.GH_MA
                                                                    from chitiet_gh ct 
                                                                    join gio_hang gh on ct.GH_MA=gh.GH_MA
                                                                    WHERE gh.KH_MA={$khid}";
                                                        $rs = $conn->query($sql);
                                                        $total = 0;
                                                        foreach ($rs as $sp) {
                                                            $sl += 1;
                                                            $spid = $sp["SP_MA"];
                                                            $sp_array[] = $spid;
                                                            $query = "SELECT * from san_pham s WHERE  s.SP_MA  = $spid";
                                                            $result = $conn->query($query);
                                                            foreach ($result as $s) {
                                                        ?>					
                                                        <tr>
                                                            <td><?php  echo $s["SP_TEN"]?></td>
                                                            <td><?php echo $sp["CTGH_SOLUONG"]?></td>
                                                            <td><?php  echo number_format($s["SP_GIA"])?> </td>
                                                            <td><?php echo number_format($sp["CTGH_SOLUONG"]*$s["SP_GIA"])?></td>					
                                                            <?php $slsp_array[] = $sp["CTGH_SOLUONG"] ?>
                                                        </tr>   
                                                    <?php
                                                        $total += $sp["CTGH_SOLUONG"]*$s["SP_GIA"];
                                                            }
                                                        }
                                                        $queryString = http_build_query($sp_array);
                                                        $queryString1 = http_build_query($slsp_array);
                                                    ?>
											</tbody>
											<tfoot>
											<tr>
												<td colspan="3">
													<span>Tổng</span>
												</td>
												<td colspan="1">
												    <h4><?php echo number_format($total);  ?> VNĐ</h4>
												</td>
											</tr>
											</tfoot>
										</table>
									</div>
									<h4>TỔNG <?php echo number_format($total,0);  ?> VNĐ</h4>
                                    <input type="hidden" name="total" value="<?php echo $total ?>">
                                    <input type="hidden" name="dongia" value="<?php echo $s["SP_GIA"] ?>">
                                    <input type="hidden" name="ghma" value="<?php echo $sp["GH_MA"] ?>">
                                    <input type="hidden" name="sparray" value="<?php echo $queryString; ?>">
                                    <input type="hidden" name="slarray" value="<?php echo $queryString1; ?>">
                                    <input style="margin-left:250px; background-color:#ffc800;" type="submit" name="Dat" value="Đặt hàng" class="btn btn-1" />	
									
								</div>
                                <!-- tới đây -->
							</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="add-new-address">
                        <!-- <a href="my-cart-step-2-info.html" class="new-address-link">Add a new address<i class="fa fa-chevron-right"></i></a>
                        <div class="form-group p-info-group type-address-group">
                            <label>If you would like to add a comment about your order, please write it in the field below.</label>
                            <textarea class="form-control input-feild " name="addcomment"></textarea>
                        </div> -->
                    </div>
                    <div class="returne-continue-shop ship-address">
                        <a href="index.php" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
                        <a href="checkout.php" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
						
                    </div>	
                </div>
                </form>
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
            center: new google.maps.LatLng(10.031157, 105.769171)
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