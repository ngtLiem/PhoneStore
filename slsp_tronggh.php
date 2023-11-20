<?php
								
	$soluonggiohang = 0;
	if (isset($_SESSION["khid"])){
		$khid = $_SESSION["khid"];
		$sql_sl = "select count(*) as soluong from gio_hang gh join chitiet_gh ct on gh.GH_MA=ct.GH_MA where gh.KH_MA = {$khid}";
		$rs_slgh = $conn->query($sql_sl);
		$row_gh = mysqli_fetch_assoc($rs_slgh);
		$soluonggiohang = $row_gh["soluong"];
	}
    $slgh = $soluonggiohang;
?>