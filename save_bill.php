<?php 
    session_start();
    require 'connect.php';
         
    $total= intval($_POST['total']);
    $email =  $_SESSION['email'];
    $khid = $_SESSION["khid"];
    $tenkh = $_SESSION['name'];
    // $diachi = $_POST['diachi'];
    $diachi = $_SESSION['location'];
    $dienthoai =  $_SESSION['sdt'];
    $hinhthucthanhtoan = $_POST['hinhthuctt']; 
    $nhavanchuyen = $_POST['nhavanchuyen'];
    $idsp = intval($_POST['spid']);
    // $giasp = intval($_POST['giasp']);

    // Lay gia sp
    // $sql_giasp = "select SP_GIA from san_pham where SP_MA = {$spid}";
    // $result_giasp = $conn->query($sql_giasp);
    // $row_gia = $result_giasp->fetch_assoc();
    // $giasp = $row_gia["SP_GIA"];

    // Tìm giỏ hàng của khách hàng
    $sql_gh = "select gh.GH_MA 
    from gio_hang gh
    join chitiet_gh ctgh on ctgh.GH_MA=gh.GH_MA 
    where  gh.KH_MA= {$khid} and ctgh.SP_MA= {$idsp}";

    $result_magh = $conn->query($sql_gh);
    $row = $result_magh->fetch_assoc();
    $ghma = $row["GH_MA"];

    $sql_maxhd = "select max(HD_STT)+1 as maxid from hoa_don";
    $rs = $conn->query($sql_maxhd);
    $r = mysqli_fetch_assoc($rs);
    $new_id = $r["maxid"];

   

    // $sql_maxdvc = "select max(DVC_MA)+1 as maxdvc from don_van_chuyen";
    // $rs = $conn->query($sql_maxdvc);
    // $r = mysqli_fetch_assoc($rs);
    // $new_id_dvc = $r["maxdvc"];


    $sql = "insert into hoa_don values
            ($new_id, 1, null, null, $hinhthucthanhtoan, null, $ghma, sysdate(), $total, null)";
    if ($conn->query($sql)==true){
        // Ngày dự kiến hoàn thành
        // $date = date('Y-m-d', strtotime(' + 1 days'));
        // $sql_dvc = "insert into don_van_chuyen values ('".$new_id_dvc."', '".$nhavanchuyen."', '".$diachi."', sysdate(), '".$date."')";
        $array = array();
        if(isset($_POST['sparray'])) {
            parse_str($_POST['sparray'], $array);
        }
        $array_sl = array();
        if(isset($_POST['slarray'])) {
            parse_str($_POST['slarray'], $array_sl);
        }

        $array_gia = array();
        if(isset($_POST['giaarray'])) {
            parse_str($_POST['giaarray'], $array_gia);
        }
        for ($i = 0; $i < count($array); $i++) {
            $spid = $array[$i];
            $slsp = $array_sl[$i];
            $giasp = $array_gia[$i];
            $sql_ct = "insert into chi_tiet_hd values ($spid, $new_id, $slsp, $giasp)";
            if($conn->query($sql_ct)==true){
               $ok=1;
            } else {
                $ok=0;
                echo "Error: " . $sql_ct . "<br>" . $conn->error;
            }
         }
         if ($ok=1) {
             $message = "Đã đặt hàng thành công! hd= .$new_id . sl= .$slsp. ghma = .$ghma. dongia=$giasp";
            echo "<script type='text/javascript'>alert('$message');</script>";
            // $sql = "delete from chitiet_gh where SP_MA = $spid and GH_MA = $ghma";
            header('Refresh: 3;url=index.php');
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>