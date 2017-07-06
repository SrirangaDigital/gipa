<?php
	$zz = rand(1,945);
	include("connect.php");
	$query = "select * from newkagga where num=$zz";
	$result = $mysqli->query($query);
	if($result)
	{
		$num_rows = $result->num_rows;
		if($num_rows > 0)
		{
			for($i=1;$i<=$num_rows;$i++)
			{	
				$row = $result->fetch_assoc();
				$num = $row['num'];
				$poem = $row['kagga'];
				echo ("$poem");
			}
		}
	}
	else
	{
		echo "Problem in Database";
	}

?>
