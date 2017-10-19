<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include 'db.php';	

if (isset($_POST["povalue"])) {
	$po = $_POST["povalue"];
}

	$querypo = "SELECT * FROM po WHERE ag=:ponumber";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':ponumber', $po, PDO::PARAM_STR);

	$stmtpo->execute();

	// $result = $stmt->fetchAll();
	if( $stmtpo->rowCount() > 0){
		echo '{"success":true, "message":""}';
	}
 
	if ( $stmtpo->rowCount() ==0 ) {
		echo '{"success":false,"message":"PO number does not exist!"}';
	} 
 	
?>