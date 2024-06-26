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
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    Sửa thông tin nhân viên
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
<div class="min-height-300 bg-primary position-absolute w-100"></div>

<?php
    $active = 'nv'; 
    require 'aside.php';
  ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Sửa thông tin nhân viên</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Sửa thông tin nhân viên</h6>
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
            
        $nvid = $_POST["nvid"];

        require 'connect.php';

        $sql = "select nv_ma, nv_ten, nv_diachi, nv_sdt, nv_email, nv_ngaysinh, nv_gioitinh, nv_tendangnhap, nv_matkhau, nv_avatar, cv_ma from nhan_vien where nv_ma = ".$nvid."";
        $result = $conn->query($sql);
        if($result->num_rows >0 ){
            $row = mysqli_fetch_assoc($result);
            $nvid = $row["nv_ma"];
            $tkid = $row["nv_ma"];
            $nvhoten = $row["nv_ten"];
            $nvadress = $row["nv_diachi"];
            $nvsdt = $row["nv_sdt"];
            $nvemail = $row["nv_email"];
            $nvgioitinh = $row["nv_gioitinh"];
            $nvdate = date("Y-m-d", strtotime($row["nv_ngaysinh"]));
            $tkusn = $row["nv_tendangnhap"];
            $tkpw = $row["nv_matkhau"];
            $tkavt = $row["nv_avatar"];
            $tkvaitro = $row["cv_ma"];
        }

        
        

      ?>
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4>Sửa thông tin nhân viên có mã #<?php echo $nvid; ?></h4>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <form role="form" method="post" action="update_edit_staff.php" enctype="multipart/form-data">
                    <input type="hidden" name="staff_id" value="<?php echo $nvid; ?>">
                    <input type="hidden" name="nv_id" value="<?php echo $tkid; ?>">
                    <input type="hidden" name="nv_avt" value="<?php echo $tkavt; ?>">
                    <div class="col-12 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-4">
                          Họ và tên
                        <input type="text" name="staff_name" class="form-control form-control-lg" value="<?php echo $nvhoten; ?>">
                      </div>
                      <div class="mb-3 px-3 col-4">
                        Ngày sinh
                        <input type="date" name="staff_birth" id="staff_birth" class="form-control form-control-lg" value="<?php echo $nvdate; ?>">
                      </div>
                      <div class="mb-3 px-3 col-4">
                        Giới tính
                        <select class="form-control form-control-lg" name="staff_sex" id="staff_sex">
                          <option value="<?php echo $nvgioitinh; ?>" selected hidden>
                            <?php
                                if($nvgioitinh=='m'){
                                    ?>Nam<?php
                                } else {
                                    ?>Nữ<?php
                                } 
                            ?>
                          </option>
                          <option value="m">Nam</option>
                          <option value="f">Nữ</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-6">
                          Số điện thoại
                        <input type="text" name="staff_phone" class="form-control form-control-lg" value="<?php echo $nvsdt; ?>">
                      </div>
                      <div class="mb-3 px-3 col-6">
                          Email
                        <input type="email" name="staff_mail" class="form-control form-control-lg" value="<?php echo $nvemail; ?>">
                      </div>
                    </div>
                    <div class="col-12 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-12">
                          Địa chỉ
                        <input required type="text" name="staff_address" class="form-control form-control-lg" value="<?php echo $nvadress ?>">
                      </div>
                    </div>
                    <div class="col-12 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-3">
                        Vai trò
                        <select class="form-control form-control-lg" name="staff_vaitro" id="staff_vaitro">
                          <option value="<?php echo $tkvaitro; ?>" selected hidden>
                            <?php
                                if($tkvaitro=='1'){
                                    ?>Quản lý<?php
                                } else if($tkvaitro=='2'){
                                    ?>Nhân viên bán hàng<?php
                                } else {
                                    ?> Nhân viên kế toán <?php
                                }
                            ?>
                          </option>
                          <option value="1">Quản lý</option>
                          <option value="2">Nhân viên bán hàng</option>
                          <option value="3">Nhân viên kế toán</option>
                        </select>
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Tên đăng nhập
                        <input type="text" name="staff_usname" class="form-control form-control-lg" value="<?php echo $tkusn; ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Mật khẩu
                        <input type="password" id="pw" name="staff_pass" class="form-control form-control-lg" value="<?php echo $tkpw; ?>">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          Nhập lại mật khẩu
                        <input type="password" id="rpw" name="staff_repass" class="form-control form-control-lg" value="<?php echo $tkpw; ?>">
                      </div>
                    </div>
                    <div class="col-12 card-header pb-2 d-flex align-items-center">
                      <div class="mb-3 px-3 col-3"></div>
                      <div class="mb-3 px-3 col-3">
                          Tải ảnh đại diện:
                          <br>
                          <input class="mt-3" type="file" name="staffImg" id="staffImg" accept="image/*">
                          <input type="hidden" name="old_staffImg" value="<?php echo $tkavt;?>" accept="image/*">
                      </div>
                      <div class="mb-3 px-3 col-3">
                          <div id="preview">
                            <img id="old_img" src="../assets/img/staff_img/<?php echo $tkavt;?>" class="rounded-circle avatar avatar-xxl ms-4" alt="">
                          </div>
                          <script>
                            var input = document.getElementById("staffImg");
                            var preview = document.getElementById("preview");
                            var old_img = document.getElementById("old_img");

                            input.addEventListener("change", function() {
                              preview.innerHTML = ""; // clear previous preview
                              old_img.innerHTML = "";
                              var files = this.files;
                              for (var i = 0; i < files.length; i++) {
                                var file = files[i];
                                if (!file.type.startsWith("image/")){ continue } // skip non-image files
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                  var img = document.createElement("img");
                                  img.src = e.target.result;
                                  img.width = 200; // set width for preview images
                                  img.className = "rounded-circle avatar avatar-xxl ms-4";
                                  preview.appendChild(img); // append image to preview div
                                };
                                reader.readAsDataURL(file); // read file as data url
                              }
                            });
                          </script>
                      </div>
                      <div class="mb-3 px-3 col-3"></div>
                    </div>

                    <!-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div> -->
                    <div class="text-center px-3">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Cập nhật</button>
                    </div>
                </form>
            </div>
          </div>
        </div> 
      </div>
        <!-- Nguyên đống này la mot danh muc -->
      

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