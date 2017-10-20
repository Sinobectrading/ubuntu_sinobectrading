<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include_once 'db.php';	
include_once 'func.php';

 
$po = strtolower(filterName("8070004986"));
	$querypo = "SELECT * FROM po WHERE ag=:ponumber";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':ponumber', $po, PDO::PARAM_STR);

$stmtpo->execute();
$result = $stmtpo->fetchAll();

foreach($result as $s){
	$array = json_encode($s); 
	echo '{"success":true,"result":'.$array.'}';
	// $ag =$s[ag];
	// $sinobec = $s[sinobec];
	// $shipref = $s[shipref];
	// $invoice = $s[invoice];
	// $contref = $s[contref];
	// $eta = $s[eta];
	// echo '{"success":true,"ag":$ag, "sinobec":$sinobec, "shipref":$shipref, "invoice":$invoice, "contref":$contref, "eta":$eta}';


 }
 	
?>