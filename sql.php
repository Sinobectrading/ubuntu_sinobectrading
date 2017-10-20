<?php
include_once 'db.php';

$file=fopen("databae/po.csv","r");
 

while(!feof($file))
{
   $line = explode(',',fgets($file));
   $query = "INSERT INTO po (ag,sinobec,hipref,invoice,contref,eta) values (".$line[0].", ".substr($line[1],0,19).")";
   $conn->query($query);
}
fclose($file);
?>