<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include 'db.php';	

$pon = "";	

if (isset($_POST["ponumber"])) {
	$pon = $_POST["ponumber"];
}

$query = "SELECT * FROM po WHERE ag=:ponum";
$stmt = $conn->prepare($query);
$stmt->bindParam(':ponum', $pon, PDO::PARAM_STR);
 $stmt->execute();
// $result = $stmt->fetchAll();
if($stmt->rowCount() > 0){
	echo '{"success":true, "message":"PO number valid"}';
}
if($stmt->rowCount() == 0){
	echo '{"success":false, "message":"PO number does not exist!"}';
}
?>