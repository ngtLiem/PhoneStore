<?php

require 'connect.php';
session_start();

$username = mysqli_real_escape_string($conn, $_POST['txtus']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "select kh_ma, kh_tendangnhap, kh_matkhau, kh_avatar, kh_ten, kh_email from khach_hang where kh_tendangnhap = '".strtolower($username)."' and kh_matkhau = '".$password."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
  
  $row = $result->fetch_assoc();
  $_SESSION["id"] = $row['kh_ma'];
  $_SESSION["pw"] = $row['kh_matkhau'];
//   $_SESSION["cv"] = $row['cv_ma'];
  $_SESSION["khid"] = $row['kh_ma'];
  $_SESSION["name"] = $row['kh_ten'];
  $_SESSION["email"] = $row['kh_email'];
  if($row['kh_avatar']==null){
    $_SESSION["avt"] = "macdinh.jpg";
  } else {
    $_SESSION["avt"] = $row['kh_avatar'];
  }

  $pwss = $_SESSION["pw"];


  header('Location: index.php');
} else {
  $message = "Tài khoản hoặc mật khẩu không đúng. Vui lòng thử lại!.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header('Refresh: 0;url=registration.php');
}

$conn->close();
?>
