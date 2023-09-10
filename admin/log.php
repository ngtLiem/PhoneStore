<?php

require 'connect.php';
session_start();

$username = mysqli_real_escape_string($conn, $_POST['usname']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);

$sql = "select nv_ma, nv_tendangnhap, nv_matkhau, cv_ma, nv_avatar, nv_ten, nv_email from nhan_vien where nv_tendangnhap = '".strtolower($username)."' and nv_matkhau = '".$password."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
  
  $row = $result->fetch_assoc();
  $_SESSION["id"] = $row['nv_ma'];
  $_SESSION["pw"] = $row['nv_matkhau'];
  $_SESSION["cv"] = $row['cv_ma'];
  $_SESSION["nvid"] = $row['nv_ma'];
  $_SESSION["name"] = $row['nv_ten'];
  $_SESSION["email"] = $row['nv_email'];
  if($row['nv_avatar']==null){
    $_SESSION["avt"] = "macdinh.jpg";
  } else {
    $_SESSION["avt"] = $row['nv_avatar'];
  }

  $pwss = $_SESSION["pw"];


  header('Location: dashboard.php');
} else {
  $message = "Tài khoản hoặc mật khẩu không đúng. Vui lòng thử lại!.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header('Refresh: 0;url=sign-in.php');
}

$conn->close();
?>
