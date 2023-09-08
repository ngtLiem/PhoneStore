<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Sửa sản phẩm
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
<!-- Nguyên đoạn này -->
<div class="position-absolute w-100 min-height-400 top-0" style="background-image: url('https://www.apple.com/lae/iphone-14-pro/images/key-features/hero/hero__cj6i78tzkp8i_large.jpg'); background-position-y: 50%;">
    <!-- <span class="mask bg-primary opacity-5"></span> -->
  </div>
  
  <?php
    $active = 'sp'; 
    require 'aside.php';
  ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Sản phẩm</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Sản phẩm</h6>
        </nav>
        <!-- Đoạn này -->
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <!-- <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..."> -->
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center mb-4 me-4">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <img src="../assets/img/staff_img/<?php echo $_SESSION["avt"]; ?>" class="rounded-circle avatar avatar-xl" alt='user'>
              </div>
            </li>
            <li class="nav-item d-flex align-items-center mt-sm-1 ms-3">
             <nav class=" mt-sm-1" aria-label="breadcrumb">   
                <h7 class="text-white text mb-0">Xin chào,</h7>
                <h6 class="font-weight-bolder text-white mt-n1"><?php echo $_SESSION["name"]; ?></h6>      
                <a href="log_out.php" class="btn btn-outline-light text-white font-weight-bold px-2 mt-n1 py-1">
                  <span class="d-sm-inline d-none me-sm-1">Đăng xuất</span>
                  <i class="fas fa-sign-out-alt "></i>
                </a>
              </nav>
            </li> 
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="row">
    <?php
      require 'connect.php';

        $idsp = $_POST["pdid"];
        $nsxsp = $_POST["nsxsp"];
        $mnsxsp = $_POST["mnsxsp"];

        $tennpp = $_POST["tennpp"];
        $manpp = $_POST["manpp"];

        $stt_pn = $_POST["stt_pn"];

        $lsp = $_POST["lsp"];
        $mlsp = $_POST["mlsp"];
        $imeisp = $_POST["imeisp"];
        $tensp = $_POST["tensp"];
        $colorsp = $_POST["colorsp"];
        $tnsp = $_POST["tnsp"];
        $tgbhsp = $_POST["tgbhsp"];
        $anhsp = $_POST["anhsp"];
        $slsp = $_POST["slsp"];
        $mhsp = $_POST["mhsp"];
        $hdhsp = $_POST["hdhsp"];
        $ctsp = $_POST["ctsp"];
        $cssp = $_POST["cssp"];
        $cpusp = $_POST["cpusp"];
        $ramsp = $_POST["ramsp"];
        $roomsp = $_POST["roomsp"];
        $simsp = $_POST["simsp"];
        $pinsp = $_POST["pinsp"];
        $giasp = $_POST["giasp"];


    ?>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4>Sửa sản phẩm #<?php echo $idsp; ?> - <?php echo $tensp; ?></h4>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <form role="form" method="post" action="update_edit_product.php" enctype="multipart/form-data">
                    <input type="hidden" name="idsp" value="<?php echo $idsp; ?>">
                    <input type="hidden" name="nsxsp" value="<?php echo $nsxsp; ?>">
                    <input type="hidden" name="mnsxsp" value="<?php echo $mnsxsp; ?>">
                    <input type="hidden" name="lsp" value="<?php echo $lsp; ?>">
                    <input type="hidden" name="mlsp" value="<?php echo $mlsp; ?>">

                    <input type="hidden" name="stt_pn" value="<?php echo $stt_pn; ?>">

                    <input type="hidden" name="tennpp" value="<?php echo $tennpp; ?>">
                    <input type="hidden" name="manpp" value="<?php echo $manpp; ?>">

                    <input type="hidden" name="imeisp" value="<?php echo $imeisp; ?>">
                    <input type="hidden" name="tensp" value="<?php echo $tensp; ?>">
                    <input type="hidden" name="colorsp" value="<?php echo $colorsp; ?>">
                    <input type="hidden" name="tnsp" value="<?php echo $tnsp; ?>">
                    <input type="hidden" name="tgbhsp" value="<?php echo $tgbhsp; ?>">
                    <input type="hidden" name="anhsp" value="<?php echo $anhsp; ?>">
                    <input type="hidden" name="slsp" value="<?php echo $slsp; ?>">
                    <input type="hidden" name="mhsp" value="<?php echo $mhsp; ?>">
                    <input type="hidden" name="hdhsp" value="<?php echo $hdhsp; ?>">
                    <input type="hidden" name="ctsp" value="<?php echo $ctsp; ?>">
                    <input type="hidden" name="cssp" value="<?php echo $cssp; ?>">
                    <input type="hidden" name="cpusp" value="<?php echo $cpusp; ?>">
                    <input type="hidden" name="ramsp" value="<?php echo $ramsp; ?>">
                    <input type="hidden" name="roomsp" value="<?php echo $roomsp; ?>">
                    <input type="hidden" name="simsp" value="<?php echo $simsp; ?>">
                    <input type="hidden" name="pinsp" value="<?php echo $pinsp; ?>">
                    <input type="hidden" name="giasp" value="<?php echo $giasp; ?>">



                    <div class="col-12 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-3">
                          Loại sản phẩm
                          <br>
                          <select class="form-control form-control-lg" name="lsp" id="lsp">
                          <option value="<?php echo $mlsp; ?>" selected hidden><?php echo $lsp; ?></option>
                          <?php
                            $sql = "SELECT * FROM LOAI_SP";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              $result = $conn->query($sql);
                              $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                              foreach ($result_all as $row) {
                                echo "<option value=" .$row["LSP_MA"]. ">".$row["LSP_TEN"]. "</option>";
                              }                          
                            } else {
                              echo "<option value=''>Không có dữ liệu</option>";
                            }
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Nhà sản xuất
                          <br>
                          <select class="form-control form-control-lg" name="nsxsp" id="nsxsp">
                          <option value="<?php echo $mnsxsp; ?>" selected hidden><?php echo $nsxsp; ?></option>
                          <?php
                            $sql = "SELECT * FROM nha_san_xuat";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              $result = $conn->query($sql);
                              $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                              foreach ($result_all as $row) {
                                echo "<option value=" .$row["NSX_MA"]. ">".$row["NSX_TEN"]. "</option>";
                              }                          
                            } else {
                              echo "<option value=''>Không có dữ liệu</option>";
                            }
                          ?>
                        </select>
                      </div>

                      <div class="mb-3 px-3 col-3">
                          Nhà phân phối
                          <br>
                          <select  class="form-control form-control-lg" name="nppsp" id="nppsp">
                            <option value="<?php echo $manpp; ?>" selected  hidden><?php echo $tennpp; ?></option>
                            <?php
                              $sql = "SELECT * FROM nha_phan_phoi";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                $result = $conn->query($sql);
                                $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                foreach ($result_all as $row) {
                                  echo "<option value=" .$row["NPP_MASO"]. ">".$row["NPP_TEN"]. "</option>";
                                }                          
                              } else {
                                echo "<option value=''>Không có dữ liệu</option>";
                              }
                            ?>
                          </select>
                        </div>

                        <div class="mb-3 px-3 col-3">
                          Giá (VNĐ)
                        <input min="0" max="10000000000" step="10000" type="number" name="giasp" class="form-control form-control-lg" value="<?php echo $giasp ?>">
                      </div>
                    </div>

                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">                    
                      <div class="mb-3 px-3 col-8">
                          Tên sản phẩm
                        <input type="text" name="tensp" class="form-control form-control-lg" value="<?php echo $tensp; ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                        Số IMEI
                        <br>
                        <input  type="text" name="imeisp" class="form-control form-control-lg" value="<?php echo $imeisp ?>">
                      </div>
                    </div>

                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center"> 
                      <div class="mb-3 px-3 col-3">
                            Số lượng
                          <input  min="1" max="10000" step="1" type="number" name="slsp" class="form-control form-control-lg" value="<?php echo $slsp ?>">
                      </div>                   
                      <div class="mb-3 px-3 col-3">
                          Màu sắc
                          <br>
                          <input  type="text" name="colorsp" class="form-control form-control-lg" value="<?php echo $colorsp ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Thời gian bảo hành
                          <br>
                          <input  type="text" name="tgbhsp" class="form-control form-control-lg" value="<?php echo $tgbhsp ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Màn hình
                          <br>
                          <input  type="text" name="mhsp" class="form-control form-control-lg" value="<?php echo $mhsp ?>">
                      </div>
                    </div>  
                      
                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-3">
                          Hệ điều hành
                          <br>
                          <input  type="text" name="hdhsp" class="form-control form-control-lg" value="<?php echo $hdhsp ?>">
                      </div>                    
                      <div class="mb-3 px-3 col-3">
                          Loại CPU
                          <br>
                          <input  type="text" name="cpusp" class="form-control form-control-lg" value="<?php echo $cpusp ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Thông số camera trước
                          <br>
                          <input  type="text" name="ctsp" class="form-control form-control-lg" value="<?php echo $ctsp ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Thông số camera sau
                          <br>
                          <input  type="text" name="cssp" class="form-control form-control-lg" value="<?php echo $cssp ?>">
                      </div>
                    </div>

                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">                    
                    <div class="mb-3 px-3 col-3">
                          RAM
                          <br>
                          <input  type="text" name="ramsp" class="form-control form-control-lg" value="<?php echo $ramsp ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          ROOM
                          <br>
                          <input  type="text" name="roomsp" class="form-control form-control-lg" value="<?php echo $roomsp ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Hỗ trợ sim
                          <br>
                          <input  type="text" name="simsp" class="form-control form-control-lg" value="<?php echo $simsp ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Pin
                          <br>
                          <input  type="text" name="pinsp" class="form-control form-control-lg" value="<?php echo $pinsp ?>">
                      </div>
                    </div>

                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-12">
                          Tính năng sản phẩm
                        <input type="text"  row="20" name="tnsp" style="height: 150px;" class="form-control form-control-lg" value="<?php echo $tnsp ?>">
                      </div>
                    </div>

                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">                                        
                      <div class="mb-3 px-3 col-3"></div>
                      <div class="mb-3 px-3 col-3">
                          Tải ảnh sản phẩm:
                          <br>
                          <input type="hidden" name="old_productImg" value="<?php echo $anhsp;?>" accept="image/*">
                          <input class="mt-3" type="file" name="productImg" id="productImg" accept="image/*">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          <div id="preview">
                            <img id="old_img" src="../assets/img/product_img/<?php echo $anhsp;?>" class="rounded-circle avatar avatar-xxl ms-4" alt="">
                          </div>
                          <script>
                            var input = document.getElementById("productImg");
                            var preview = document.getElementById("preview");

                            input.addEventListener("change", function() {
                              preview.innerHTML = ""; // clear previous preview
                              var files = this.files;
                              for (var i = 0; i < files.length; i++) {
                                var file = files[i];
                                if (!file.type.startsWith("image/")){ continue } // skip non-image files
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                  var img = document.createElement("img");
                                  img.src = e.target.result;
                                  img.width = 1000; // set width for preview images
                                  img.className = "avatar avatar-xxl me-3";
                                  preview.appendChild(img); // append image to preview div
                                };
                                reader.readAsDataURL(file); // read file as data url
                              }
                            });
                          </script>
                      </div>
                    </div>

                    <!-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div> -->
                    <div class="col-12 mt-n4 card-header pb-2 d-flex align-items-center">                                                            
                      <div class="col-12 text-center px-3">
                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Cập nhật</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  <!-- </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <!-- <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a> -->
        <!-- Navbar Fixed -->
        <!-- <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <?php 
    $conn->close();
  ?>
</body>

</html>