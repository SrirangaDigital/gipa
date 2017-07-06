 <?php

include("connect.php");

if(isset($_SESSION['visitor_number']))
{
	echo $_SESSION['visitor_number'];
}
else
{
	//include("connect.php");
	$update_query= "update visitor set count=count+1";
	$result = $mysqli->query($update_query);
 
	$pick = "select count from visitor";
	$pick_result = $mysqli->query($pick);
	$num_results = $pick_result->num_rows;
	
	if($num_results)
	{
		$row = $pick_result->fetch_assoc();
		$_SESSION['visitor_number'] = $row['count'];
		echo $_SESSION['visitor_number'];
	}	
	$mysqli->close();
}
?>
