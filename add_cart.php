<?php
    session_start();
    require 'connect.php';
    if (!isset($_SESSION["id"])){
        $message = "Vui lòng đăng nhập để thêm vào giỏ hàng!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0;url=registration.php');
    } else {
        $spid = $_POST["id"];
        $slsp = intval($_POST["slsp"]);
        $khid = $_SESSION["khid"];
        // Tìm giỏ hàng của khách hàng
        $sql = "SELECT *, max(gh.GH_MA) as maxgh
        from san_pham sp
        join chitiet_gh ct on sp.SP_MA=ct.SP_MA
        join gio_hang gh on gh.GH_MA=ct.GH_MA
        join khach_hang kh on kh.KH_MA=gh.KH_MA
        where sp.SP_MA={$spid} and kh.KH_MA={$khid}";

        $rs = $conn->query($sql);
        $row = $rs->fetch_assoc();
        $giasp = $row["SP_GIA"];
        $ghma = $row["GH_MA"];
        $maxgh = $row["maxgh"];




        $check_exist = "select count(*) as tontai 
                            from chitiet_gh ctgh
                            join gio_hang gh on ctgh.GH_MA=gh.GH_MA 
                            where  gh.KH_MA= {$khid} and ctgh.SP_MA= {$spid}";

            $rs_chk = $conn->query($check_exist);
            $r = mysqli_fetch_assoc($rs_chk);
            if ($r["tontai"]>0) {
                // Cập nhật số lượng sản phẩm trong chi tiết giỏ hàng
                $sql1 = "UPDATE chitiet_gh SET CTGH_SOLUONG = CTGH_SOLUONG + '".$slsp."' WHERE SP_MA = '".$spid."' AND GH_MA = '".$ghma."'";

                if($conn->query($sql1)==true){
                    $sql2 = "UPDATE gio_hang SET GH_TONGTIEN = (SELECT SUM(CTGH_SOLUONG * '".$giasp."') FROM chitiet_gh WHERE GH_MA = '".$ghma."'), GH_TONGSP = (SELECT SUM(CTGH_SOLUONG) FROM chitiet_gh WHERE GH_MA = '".$ghma."') WHERE KH_MA = '".$khid."' AND GH_MA = '".$ghma."'" ;
                    if($conn->query($sql2)==true){
                        $message = "Cập nhật giỏ hàng thành công" . $slsp . $ghma . $khid . $spid;
                    }
                }

                // Cập nhật tổng tiền và tổng số lượng sản phẩm trong giỏ hàng
                
            } else {
                // $sql = "insert into gio_hang values($maxgh, $khid, 
                $message = "Thêm sản phẩm vào giỏ hàng thành công";
            }

            if($conn->query($sql) == true){
                echo "<script type='text/javascript'>alert('$message');</script>";
                header('Refresh: 0;url=single_products.php?id='.$spid);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            

            // $sl;
            // if(isset($_SESSION['cart'][$idsp]))
            // {
            //     $sl = $_SESSION['cart'][$idsp] +1;
            // }
            // else
            // {
            //     $sl=1;
            // }
            // $_SESSION['cart'][$idsp] = $sl;
                //  echo "<script>window.location.replace('http://host2.org/cart.php'); </script>";
        
    }
?>