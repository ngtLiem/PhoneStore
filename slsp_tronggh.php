<?php
								
	$soluonggiohang = 0;
	if (isset($_SESSION["khid"])){
		$khid = $_SESSION["khid"];
		$sql_sl = "select count(*) as soluong from gio_hang where KH_MA = {$khid}";
		$rs_slgh = $conn->query($sql_sl);
		$row_gh = mysqli_fetch_assoc($rs_slgh);
		$soluonggiohang = $row_gh["soluong"];
	}
    echo $soluonggiohang;
?>