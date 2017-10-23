<?php
	$res = json_encode($_POST);

	echo "From Server".$res[0]->value."<br>";
?>