<?php 
session_start();
require 'connect.php';
if(isset($_SESSION["khid"])){
    $total= intval($_POST['total']);
    $email =  $_SESSION["email"];
    $khid = $_SESSION["khid"];
    $tenkh = $_SESSION["name"];
    $diachi = $_SESSION["location"];
    $ghma = $_POST['ghma'];
    
    $hinhthucthanhtoan = $_POST['hinhthuctt']; 

    $sql = "select max(HD_STT)+1 as maxid from hoa_don";
    $rs = $conn->query($sql);
    $r = mysqli_fetch_assoc($rs);
    $new_id = $r["maxid"];

    $array = array();
    if(isset($_POST['sparray'])) {
        parse_str($_POST['sparray'], $array);
    }
    $array_sl = array();
    if(isset($_POST['slarray'])) {
        parse_str($_POST['slarray'], $array_sl);
    }

    $sql="insert into hoa_don values ($new_id, 1, null, null, $hinhthucthanhtoan, null, $ghma, sysdate(), $total, null)";
    if ($conn->query($sql)==true){
        foreach($array as $spid) {
            $sql_ct = "insert into chi_tiet_hd values ($spid, $new_id, 1, 1)";
            // $i = 0;
            // $slsp = $array_sl[$i];
            $sql_update_ct ="update chi_tiet_hd set 
                                    CTHD_SLB = (select ct.CTGH_SOLUONG
                                                    from gio_hang gh 
                                                    join chitiet_gh ct on ct.GH_MA=gh.GH_MA
                                                    join khach_hang kh on kh.KH_MA=gh.KH_MA
                                                    where kh.KH_MA = '".$khid."' and ct.SP_MA = '".$spid."'),
                                    CTHD_DONGIA = (select SP_GIA from san_pham where SP_MA = '".$spid."')
                                     where SP_MA = '".$spid."' and HD_STT ='".$new_id."'";
            // $i+=1;
                if($conn->query($sql_ct)==true && $conn->query($sql_update_ct)){
                    $ok=1;
                } else {
                    $ok=0;
                    echo "Error: " . $sql_ct . "<br>" . $conn->error;
                }
           
         }
         if ($ok=1) {
            foreach($array as $spid){
                $sql_delete = "delete from chitiet_gh where sp_ma = $spid";
                if($conn->query($sql_delete)==true){
                    $good=1;
                } else{
                    echo "Error: " . $sql_delete . "<br>" . $conn->error;
                }      
            }
            if($good==1){
                $message = "Đã đặt hàng thành công!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
                 
         }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
           

            header('Refresh: 0;url=cart.php');
        }
     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else{
    $message = "Vui lòng thêm món ăn để đặt hàng!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Refresh: 0;url=product.php');
}

?>