<?php
$zz = rand(1,945);
include("connect.php");
$db = mysql_connect("localhost",$user,$password) or die("Not connected to database");
$rs = mysql_select_db($database,$db) or die("No Database");
$query = "select * from newkagga where num=$zz";
$result = mysql_query($query);
$num_rows = mysql_num_rows($result);
for($i=1;$i<=$num_rows;$i++)
{	
	$row=mysql_fetch_assoc($result);
	$num = $row['num'];
	$poem = $row['kagga'];
	echo ("$poem");
}
?>
