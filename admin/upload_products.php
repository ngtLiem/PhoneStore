<?php

session_start();
require 'connect.php';

$file_name = basename($_FILES["productImg"]["name"]);
$target_dir = "../assets/img/product_img/";
$target_file = $target_dir . basename($_FILES["productImg"]["name"]);
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
if ($_FILES["productImg"]["size"] > 30000000) {
  echo "Dung lượng file quá lớn";
  $uploadOk = 0;
}

if($file_name != null){
  if(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")) {
    echo "Chỉ chấp nhận file JPG, JPEG & PNG <br>".$file_name;
    $uploadOk = 0;
  }
} else {
  $target_file = $target_dir . "default.jpg";
  $file_name = "default.png";
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["productImg"]["tmp_name"], $target_file)) {
    $filename = $file_name;
  } else {
    $filename = "default.png";
  }


  

  //Lấy id lớn nhất
	$sql = "select max(SP_MA) as max_id from san_pham";
  $result = $conn -> query($sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $max_id = $row["max_id"];
  }

  $sqlpn = "select max(PN_STT) as max_pn from phieu_nhap";
  $result = $conn -> query($sqlpn);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $max_pn = $row["max_pn"];
  }


  $nvid = $_SESSION["nvid"];
  

  $pdid = $max_id+1;
  $nsxid = $_POST["nsxid"];
  $lspid = $_POST["types"];
  $pdimei = $_POST["imei"];
  $pdname = $_POST["pd_name"];
  $pdcolor = $_POST["color"];
  $pdtn = $_POST["tinhnang"];
  $pdbh = $_POST["baohanh"];
  $pdi = $filename;
  $pdmanhinh = $_POST["manhinh"];
  $pdhdh = $_POST["hdh"];
  $pdcamtruoc = $_POST["camtruoc"];
  $pdcamsau = $_POST["camsau"];
  $pdcpu = $_POST["cpu"];
  $pdram = $_POST["ram"];
  $pdroom = $_POST["room"];
  $pdsim = $_POST["sim"];
  $pdpin = $_POST["pin"];
  $pdprice = $_POST["pd_price"];

  $pnid = $max_pn+1;
  $pn_id = $max_pn;

  $nppid = $_POST["source"];
  $pdsl = $_POST["pd_quantity"];

  
  // echo "<br>" . $pdid, $nsxid,  $lspid, $pdimei,  $pdname,  $pdcolor, $pdtn, $pdbh, $pdi, $pdsl, $pdmanhinh, $pdhdh, $pdcamtruoc, $pdcamsau, $pdcamsau, $pdcpu, $pdram, $pdroom, $pdsim, $pdpin;
  

  $sql = "insert into SAN_PHAM 
            values('".$pdid."', '".$nsxid."', '".$lspid."', '".$pdimei."', '".$pdname."', '".$pdcolor."', '".$pdtn."', '".$pdbh."', '".$pdi."', '".$pdsl."', '".$pdmanhinh."', '".$pdhdh."', '".$pdcamtruoc."', '".$pdcamsau."', '".$pdcpu."', '".$pdram."', '".$pdroom."', '".$pdsim."', '".$pdpin."', '".$pdprice."')";


	if ($conn->query($sql) == true) {
    $sql1 = "insert into PHIEU_NHAP values('".$pnid."', sysdate())";
    // $sql2 = "insert into CHITIET_PN values('".$pdid."', '".$pnid."', '".$nvid."', '".$nppid."', '".$pdsl."', '".$pdprice."')";
    if ($conn->query($sql1) == true){ 
      $sql2 = "insert into CHITIET_PN values('".$pdid."', '".$pnid."', '".$nvid."', '".$nppid."', '".$pdsl."', '".$pdprice."')";
      if($conn->query($sql2) == true){
        $message = "Thêm sản phẩm thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=products.php');
      } else{
        echo "Error: " . $sql2 . "<br>" . $conn->error;
      }
    } else {
      echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


  $conn->close();
}

?>
