<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include_once 'db.php';	

if (isset($_POST["ponum"])) {
	$pot = $_POST["ponum"];
}

	$querypot = "SELECT * FROM po WHERE ag=:ponumber";
		$stmtpot = $conn->prepare($querypot);
		$stmtpot->bindParam(':ponumber', $pot, PDO::PARAM_STR);

		// $pot = 8070004970;

	$stmtpot->execute();
	$result=$stmtpot->fetchAll();
	foreach($result as $s){
		$ag =$s[ag];
		$sinobec = $s[sinobec];
		$shipref = $s[shipref];
		$invoice = $s[invoice];
		$contref = $s[contref];
		$eta = $s[eta];
	}

	echo '{"success":true,"ag":'.$ag.', "sinobec": '.$sinobec.', "shipref":'.$shipref.', "invoice":'.$invoice.', "contref":'.$contref.', "eta":'.$eta.'}';

?>