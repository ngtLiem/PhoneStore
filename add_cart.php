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

        // Lay gia sp
        $sql_giasp = "select SP_GIA from san_pham where SP_MA = {$spid}";
        $result_giasp = $conn->query($sql_giasp);
        $giasp = $result_giasp->fetch_assoc()["SP_GIA"];

        // Kiem tra san pham da co trong gio hang chua
        $check_exist = "select count(*) as tontai 
                            from chitiet_gh ctgh
                            join gio_hang gh on ctgh.GH_MA=gh.GH_MA 
                            where  gh.KH_MA= {$khid} and ctgh.SP_MA= {$spid}";

            $rs_chk = $conn->query($check_exist);
            $r = mysqli_fetch_assoc($rs_chk);
            if ($r["tontai"]>0) {
                // Tìm giỏ hàng của khách hàng
                $sql = "select gh.GH_MA 
                            from gio_hang gh
                            join chitiet_gh ctgh on ctgh.GH_MA=gh.GH_MA 
                            where  gh.KH_MA= {$khid} and ctgh.SP_MA= {$spid}";

                $result_magh = $conn->query($sql);
                $row = $result_magh->fetch_assoc();
                $ghma = $row["GH_MA"];

                if($conn->query($sql) == true){
                    // Cập nhật số lượng sản phẩm trong chi tiết giỏ hàng
                    $sql1 = "UPDATE chitiet_gh SET CTGH_SOLUONG = CTGH_SOLUONG + '".$slsp."' WHERE SP_MA = '".$spid."' AND GH_MA = '".$ghma."'";

                    if($conn->query($sql1)==true){
                        // Cập nhật tổng tiền và tổng số lượng sản phẩm trong giỏ hàng
                        $sql2 = "UPDATE gio_hang SET 
                                    GH_TONGTIEN = (SELECT SUM(CTGH_SOLUONG * '".$giasp."') FROM chitiet_gh WHERE GH_MA = '".$ghma."'), 
                                    GH_TONGSP = (SELECT SUM(CTGH_SOLUONG) FROM chitiet_gh WHERE GH_MA = '".$ghma."') 
                                    WHERE KH_MA = '".$khid."' AND GH_MA = '".$ghma."'" ;
                        if($conn->query($sql2)==true){
                            $message = "Cập nhật giỏ hàng thành công";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            header('Refresh: 0;url=single_products.php?id='.$spid);
                        } else{
                            echo "Error: " . $sql2 . "<br>" . $conn->error;
                        }
                    } else{
                        echo "Error: " . $sql1 . "<br>" . $conn->error;
                    }
                } else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
            } else {
                // Lay id lon nhat cua gio hang
                $sql_maxgh = "select max(GH_MA) as maxgh from gio_hang;";
                $result_maxgh = $conn->query($sql_maxgh);
                $maxgh = $result_maxgh->fetch_assoc()["maxgh"];
                $idgh = $maxgh+1;

                $tongtiengh = $slsp * $giasp;

                $sql_gh = "insert into gio_hang values('".$idgh."', '".$khid."', '".$slsp."', '".$tongtiengh."')";
                if($conn->query($sql_gh) == true){
                    $sql_ctgh = "insert into chitiet_gh values('".$spid."', '".$idgh."', '".$slsp."')";
                    if($conn->query($sql_ctgh) == true){
                        $message = "Thêm sản phẩm vào giỏ hàng thành công";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header('Refresh: 0;url=single_products.php?id='.$spid);
                    }
                } else{
                    echo "Error: " . $sqlgh . "<br>" . $conn->error;
                }
                
            }
                
    }
?>