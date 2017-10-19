<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include 'db.php';	

$companyid = "";	
$pon = "";

if (isset($_POST["trackvalue"])) {
	$tve = $_POST["trackvalue"];
}


	$querycid = "SELECT * FROM customer WHERE cid=:clientid";
		$stmtcid = $conn->prepare($querycid);
		$stmtcid->bindParam(':clientid', $tve, PDO::PARAM_STR);

	$stmtcid->execute();


	$querypon = "SELECT * FROM po WHERE ag=:ponum";
		$stmtpon = $conn->prepare($querypon);
		$stmtpon->bindParam(':ponum', $tve, PDO::PARAM_STR);

	$stmtpon->execute();

 
	// $result = $stmt->fetchAll();
	if($stmtpon->rowCount() > 0){
		echo '{"success":true, "message":"PO number valid"}';
	}
	if($stmtpon->rowCount() == 0){
		echo '{"success":false, "message":"PO number does not exist!"}';
	}
}
?>