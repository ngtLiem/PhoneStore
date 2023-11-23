<?php 
if(isset($_SESSION["khid"])){
    $khid = $_SESSION['khid'];
    $sql = "select sum(ct.CTGH_SOLUONG) as soluong 
                from chitiet_gh ct
                join gio_hang gh on ct.GH_MA=gh.GH_MA
                where gh.KH_MA={$khid}";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $slsp_gh = $row["soluong"];
    echo "$slsp_gh";
} else{
    echo "0";
}
                                   
?>