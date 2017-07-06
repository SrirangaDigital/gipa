<?php
$zz = rand(1,945);
include("connect.php");
$query = "select * from newkagga where num=$zz";
$result = $mysqli->query($query);
$num_rows = $result->num_rows;
for($i=1;$i<=$num_rows;$i++)
{	
	$row = $result->fetch_assoc();
	$num = $row['num'];
	$poem = $row['kagga'];
	echo ("$poem");
}
?>
