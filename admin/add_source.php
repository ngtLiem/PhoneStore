<?php
  require 'connect.php';
?>

<?php

    $sql = "select max(NPP_MASO) as maxid from nha_phan_phoi;";
    if ($conn->query($sql)==true){
        $rs = $conn->query($sql);
        $row = mysqli_fetch_assoc($rs);
        $id = $row["maxid"] + 1;
    } else {
        echo "<br>Error: " . $sql . "<br>" . $conn->error;
    }


    $ten = $_POST["ten"];
    $mota = $_POST["mota"];

    $sql = "insert into nha_phan_phoi values ($id, '".$ten."', '".$mota."');";

    if ($conn->query($sql)==true){
        $message = "Thêm đối tác ".$ten." thành công!";
        echo "<br><script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=pdsource.php');
    } else {
        echo "<br>Error: " . $sql . "<br>" . $conn->error;
    }

?>