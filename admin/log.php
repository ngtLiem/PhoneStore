<?php
    require 'connect.php';
    session_start();

    $username = mysqli_real_escape_string($conn, $_POST['usname']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "select * from nhan_vien where NV_TENDANGNHAP = '" . strtolower($username) . "' and NV_MATKHAU = '" .$password."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION["id"] = &$row['NV_MA'];
        $_SESSION["cv"] = &$row['CV_MA'];
        $_SESSION["name"] = &$row['NV_TEN'];
        $_SESSION["nvid"] = &$row['NV_MA'];
        $_SESSION["email"] = &$row['NV_EMAIL'];
        // $_SESSION["avt"] = &$row['NV_AVATAR'];
        if($row['NV_AVATAR'] == null){
            $_SESSION['avt'] == "macdinh.jpg";
        } else {
            $_SESSION['avt'] == $row['NV_AVATAR'];
        }

        $_SESSION["avatar"] = &$row['NV_AVATAR'];
        header('Location: dashboard.php');
    } else{
        $message = "Tài khoản hoặc mật khẩu không đúng. Vui lòng nhập lại!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 2;url=sign-in.php');
    }

?>