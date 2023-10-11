<?php
require 'connect.php';
session_start();
$spid = $_POST["idsprm"];
$khid = $_SESSION["khid"];

// $spid = $_GET["idsprm"];
// $message = "$spid";
// echo "<script type='text/javascript'>alert('$message');</script>";


$sql_giasp = "select SP_GIA from san_pham where SP_MA = {$spid}";
        $result_giasp = $conn->query($sql_giasp);
        $giasp = $result_giasp->fetch_assoc()["SP_GIA"];

$sql = "select gh.GH_MA 
            from gio_hang gh
            join chitiet_gh ctgh on ctgh.GH_MA=gh.GH_MA 
            where  gh.KH_MA= {$khid} and ctgh.SP_MA= {$spid}";

$result_magh = $conn->query($sql);
$row = $result_magh->fetch_assoc();
$ghma = $row["GH_MA"];


if(isset($_POST['remove'])){
    $sql = "delete from chitiet_gh where SP_MA = $spid and GH_MA = $ghma";
    if ($conn->query($sql)==true){
        // $sql1 = "delete from gio_hang where GH_MA =$ghma and KH_MA = $khid";
        // if($conn->query($sql1) ==true){
            $message = "Đã xoá sản phẩm ra khỏi giỏ hàng";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0;url=cart.php');
        // } else{
        //     echo "Error: " . $sql1 . "<br>" . $conn->error;
        // }
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

if(isset($_POST['update'])){
    $sl = intval($_POST["qty"]);
    $sql = "update chitiet_gh set CTGH_SOLUONG = $sl where SP_MA = $spid and GH_MA = $ghma";
    if ($conn->query($sql)==true){
        $sql1 = "update gio_hang set 
                    GH_TONGSP = (SELECT SUM(CTGH_SOLUONG) FROM chitiet_gh WHERE GH_MA = '".$ghma."') , 
                    GH_TONGTIEN = (SELECT SUM(CTGH_SOLUONG * '".$giasp."') FROM chitiet_gh WHERE GH_MA = '".$ghma."')
                    where GH_MA= $ghma and KH_MA=$khid";
        if($conn->query($sql1)==true){
            $message = "Đã cập nhật số lượng sản phẩm";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=cart.php');
        } else{
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>