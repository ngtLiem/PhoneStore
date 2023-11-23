<?php 
require "connect.php";
if(isset($_POST['muangay'])){
    
    $email =  $_POST['email']; 
    $tenkh = $_POST['name'];
    $diachi = $_POST['txtdiachi'];
    $dienthoai =  $_POST['phone']; 
    $hinhthucthanhtoan = $_POST['hinhthuctt']; 

    $masp= $_POST['idsp']; 
    $dongia= $_POST['gia']; 
    $sl= intval($_POST['txtsoluong']);
    

    $sql = "select max(HD_STT)+1 as maxid from hoa_don";
    $rs = $conn->query($sql);
    $r = mysqli_fetch_assoc($rs);
    $new_id = $r["maxid"];

    $sql1="insert into hoa_don values ($new_id, 3, null, null, $hinhthucthanhtoan, null, null, sysdate(), $dongia * $sl, null)";
    if ($conn->query($sql1) == TRUE) {
        $sql2= "insert into chi_tiet_hd values ($masp, $new_id, $sl, $dongia)";             
       
        if ($conn->query($sql2) == TRUE) {
            $message = "Đã đặt hàng thành công!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0;url=single_products.php?id=' .$masp);
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
    }
}
			
?>