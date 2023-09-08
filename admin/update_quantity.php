<?php

    session_start();

    require 'connect.php';

    $pdid = $_POST["temp_id"];
    $quant = $_POST["quantity"];

    $sql = "UPDATE san_pham SET sp_soluongton = sp_soluongton + CAST('".$quant."' AS int) WHERE sp_ma = {$pdid};";
    
    // $sql1 = "INSERT INTO chitiet_pn
    //          SELECT {$pdid}, '".$_SESSION["id"]."', CAST('".$quant."' AS int)
    //          FROM chitiet_pn
    //          where SP_MA = {$pdid}";

    $sql1 = "update chitiet_pn set
                NV_MA= '".$_SESSION["id"]."',
                CTPN_SOLUONG = CTPN_SOLUONG + + CAST('".$quant."' AS int)
                where SP_MA = {$pdid}";

    if(($conn->query($sql) == true) && ($conn->query($sql1) == true)){
        $message = "Nhập thêm sản phẩm thành công!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=products.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

?>