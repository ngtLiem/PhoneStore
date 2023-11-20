<?php

require 'connect.php';
session_start();

$username = mysqli_real_escape_string($conn, $_POST['txtus']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "select * from khach_hang where kh_tendangnhap = '".strtolower($username)."' and kh_matkhau = '".$password."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $_SESSION["id"] = $row["KH_MA"];
  $_SESSION["pw"] = $row["KH_MATKHAU"];
  $_SESSION["khid"] = $row["KH_MA"];
  $_SESSION["name"] = $row["KH_TEN"];
  $_SESSION["sdt"] = $row["KH_SDT"];
  $_SESSION["location"] = $row["KH_DIACHI"];
  $_SESSION["email"] = $row["KH_EMAIL"];
  if($row["KH_AVATAR"]==null){
    $_SESSION["avt"] = "macdinh.jpg";
  } else {
    $_SESSION["avt"] = $row["KH_AVATAR"];
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
