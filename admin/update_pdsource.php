<?php

    session_start();

    require 'connect.php';

    $id = $_POST["temp_id"];
    $name = $_POST["name"];
    $des = $_POST["des"];

    $sql = "UPDATE nha_phan_phoi SET npp_maso = '{$name}', npp_mota = '{$des}' WHERE npp_maso = {$id};";

    if($conn->query($sql) == true){
        $message = "Cập nhật thành công!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=pdsource.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>