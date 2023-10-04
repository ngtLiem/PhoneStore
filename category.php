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
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
        <link rel="stylesheet" href="style.css">
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
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
					<li><a href="index.php">Trang chủ</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div id="main-content" class="col-md-10">
					<div class="row">
						<div class="col-md-10">
							<div class="products">
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
								<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
								<div class="image" style="width:250px;height:240px"><a href="product.php?id=<?php echo $row["SP_MA"]?>"><img src="assets/img/product_img/<?php echo $row["SP_HINHANH"]?>" style="width: 100%; height: 100%; object-fit: cover;"/></a></div>
								<div class="caption">
									<div class="name"><h3><a href="product.php?id=<?php echo $row["SP_MA"]?>"><?php echo $row["SP_TEN"]?></a></h3></div>
									<div class="price"><?php echo $row["SP_GIA"] ?> VNĐ</div>
								</div>
							</div>
								</div>
								<?php
		}
					?>
							</div>
						</div>
	
					</div>
		
		
					<div class="row text-center">
						<ul class="pagination">
						<?php 
						// PHẦN HIỂN THỊ PHÂN TRANG
			// BƯỚC 7: HIỂN THỊ PHÂN TRANG
			 
			// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
			for ($i = 1; $i <= $total_page; $i++){
				if ($i == $current_page){

					   ?>
					   <li class="active"><a href="#"><?php echo $i  ?></a></li>					   
						  <?php 
				}

			?>
			<?php
			if($i != $current_page){
			 ?>	
			 	  <li><?php echo '<a href="category.php?maloaisp='.$maloaisp.'&page='.$i.'">'.$i.'</a> '; ?></li>
			 <?php
			}
			  ?>	
						  <?php 
			}
						  ?>
						</ul>
					</div>
				
		
				</div>
				<?php 
	
	// include "sidebar.php"
	?>
			</div>
		</div>
	</div>	
	<?php 
	include "footer.php"
	?>
    </body>
</html>

