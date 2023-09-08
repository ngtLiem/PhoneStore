<?php

session_start();

$idsp = $_POST["idsp"]; 
$anhsp = $_POST["old_productImg"];

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
// $anhsp = $_POST["anhsp"];
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

  require 'connect.php';

$file_name = basename($_FILES["productImg"]["name"]);
$target_dir = "../assets/img/product_img/";
$target_file = $target_dir . $file_name;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["productImg"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
$new_name = basename($_FILES["productImg"]["name"]);
if (file_exists($target_file)){
    $count=1;
    $name = strtolower(pathinfo($new_name,PATHINFO_FILENAME));
    while(file_exists($target_file)){
        $new_name = "";
        $new_name = $name."-".$count.".".$imageFileType;
        $target_file = $target_dir.$new_name; 
        $count++;
        echo $count;
    }
}

// Check file size
if ($_FILES["productImg"]["size"] > 500000) {
  echo "Dung lượng file quá lớn";
  $uploadOk = 0;
}

if($file_name != null){
  if(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")) {
    echo "Chỉ chấp nhận file JPG, JPEG & PNG <br>".$file_name;
    $uploadOk = 0;
    $message = "Loi dinh dang";
    echo "<br><script type='text/javascript'>alert('$message');</script>";
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  echo "<br><script type='text/javascript'>alert('$message');</script>";
      header('Refresh: 0;url=products.php');
// if everything is ok, try to upload file
} else {
  
  if (move_uploaded_file($_FILES["productImg"]["tmp_name"], $target_file)) {

  } 

  if ($new_name!="-1."){
    $anhsp = $new_name;
  }

  $sql1 = "update chitiet_pn set
            NPP_MASO = {$manpp},
            NV_MA = {$_SESSION["nvid"]},
            PN_STT = {$stt_pn},
            CTPN_SOLUONG = {$slsp},
            CTPN_DONGIA = {$giasp}
          where SP_MA = {$idsp};";

  $sql2 = "update san_pham set 
            NSX_MA= {$mnsxsp},
            LSP_MA= {$mlsp},
            SP_IMEI= '".$imeisp."',
            SP_TEN= '".$tensp."',
            SP_MAUSAC= '".$colorsp."',
            SP_TINHNANG= '".$tnsp."',
            SP_TGBH= '".$tgbhsp."',
            SP_HINHANH= '".$anhsp."',
            SP_SOLUONGTON= '".$slsp."',
            SP_MANHINH= '".$mhsp."',
            SP_HDH= '".$hdhsp."',
            SP_CAMTRUOC= '".$ctsp."',
            SP_CAMSAU= '".$cssp."',
            SP_CPU= '".$cpusp."',
            SP_RAM= '".$ramsp."',
            SP_ROOM= '".$roomsp."',
            SP_SIM= '".$simsp."',
            SP_PIN= '".$pinsp."',
            SP_GIA= '".$giasp."'
            where SP_MA = {$idsp};";

  if($conn->query($sql1) == true){
    if($conn->query($sql2) == true){
      $message = "Cập nhật sản phẩm ".$tensp." thành công!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('Refresh: 0;url=products.php');
    }
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
    echo "Error: " . $sql2 . "<br>" . $conn->error;
  }

}
?>