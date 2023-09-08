<?php
  session_start();
  require 'connect.php';
	
	$reason = null ;

	$nvid = $_SESSION["nvid"];
	$mahd = $_POST["mahd"];
    $status = $_POST["status"];

	$sql = "update hoa_don set TT_MA = {$status}";
	
	if (isset($_POST["lido"])){
		$reason = $_POST["lido"];
		$sql .= ", HD_LIDOHUY = '{$reason}'";
	};
	
    


	if ($status!=1){
		$sql .= ", NV_MA = {$nvid}";
	} else {
		$sql .= ", NV_MA = null";
	}
	
	if (isset($_POST["donvc"])){
		$dvc = $_POST["donvc"];
		$sql .= ", DVC_MA = {$dvc}";
	}
	
	$sql .= " where HD_STT = {$mahd}";

	$rs = $conn->query($sql);
	if($rs) {
		$message = "Cập nhật đơn hàng thành công!";
        echo "<script type='text/javascript'>alert('$message');</script>";
		header('Refresh: 0;url=products_wait.php');
	} else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>