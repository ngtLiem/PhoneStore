<?php
session_start();
require 'connect.php';
$spid = $_POST["idsprm"];
$khid = $_SESSION["khid"];

$sql = "select gh.GH_MA 
            from gio_hang gh
            join chitiet_gh ctgh on ctgh.GH_MA=gh.GH_MA 
            where  gh.KH_MA= {$khid} and ctgh.SP_MA= {$spid}";

$result_magh = $conn->query($sql);
$row = $result_magh->fetch_assoc();
$ghma = $row["GH_MA"];

if(isset($_POST['remove']))
{
    $sql = "delete from chitiet_gh where SP_MA = $spid and GH_MA = $ghma";
    if ($conn->query($sql)==true){
        $message = "Đã xoá sản phẩm ra khỏi giỏ hàng";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=cart.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
          
}
if(isset($_POST['update']))
{
    $sl = intval($_POST["qty"]);
    $sql = "update chitiet_gh set CTGH_SOLUONG = $sl where SP_MA = $spid and GH_MA = $ghma";
    if ($conn->query($sql)==true){
        $message = "Đã cập nhật số lượng sản phẩm";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=cart.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>