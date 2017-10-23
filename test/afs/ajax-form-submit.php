<?php


	$array = $_POST;

	foreach ($array as $key => $value)
	echo $key." has the value :". $value."<br>";

	echo "<br>".$array['fname']."<br>";

	$json = json_encode($array);



	echo "From Server".$json."<br>";
?>