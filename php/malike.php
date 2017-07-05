<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gokhale Institute of Public Affairs</title>
<link href="style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style/style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo"><img src="images/logo1.png" alt="Logo" title="Logo"/></div>
		<div class="title">Gokhale Institute of Public Affairs</div>
		<div class="subtitle">Public Life Must be spiritualized - G. K. Gokhale</div>
	</div>
	<div class="mainpage">
	<div class="left">
			<div class="submenu">
		<!--		<div class="subheader">
					ಉಪನ್ಯಾಸಮಾಲಿಕೆ
				</div> -->
				<div class="subtabs">
					<ul>
						<li class="active"><a class="active" href="malike.php">ಉಪನ್ಯಾಸಮಾಲಿಕೆ</a></li>
						<li><a href="audio.php">ಉಪನ್ಯಾಸಕರು</a></li>
					</ul>
				</div>
			</div>
			<div class="topictitlek">
				ಉಪನ್ಯಾಸಮಾಲಿಕೆ
			</div>
			<div class="data">
				<div class="limitdata">
					<ul>
					<?php
						include("connect.php");

						$db = mysql_connect("localhost",$user,$password) or die("Not connected to database");
						$rs = mysql_select_db($database,$db) or die("No Database");
						
						$query = "select * from track order by title";
						$result = mysql_query($query);
						$num_rows = mysql_num_rows($result);

						$num_rows = mysql_num_rows($result);
						if($num_rows)
						{
							for($i=1;$i<=$num_rows;$i++)
							{
								$row=mysql_fetch_assoc($result);
								$title=$row['title'];
								$artid=$row['aid'];
								$dur = $row['duration'];
								$back = '';
								$list = artistlist($artid,$back);
								echo ("<li><span class=\"titspank\"><a href=\"#\">$title</a></span> <span class=\"durspan\"> </span><br />&nbsp;&nbsp;&nbsp;<span class=\"auspan\">$list</span></li><br />\n\t\t\t\t\t");
							}
						}
						
						function artistlist($artid,$back)
						{
							$dummy = 0;
							$total = substr_count($artid, ',');
							$a1 = explode(",", $artid);
				
							foreach($a1 as $a1)
							{
								$query1="SELECT * FROM artist WHERE aid='$a1'";
								$result1= mysql_query($query1);
								$row2=mysql_fetch_assoc($result1);
								$name=$row2['artistname'];
								if($dummy < $total)
								{
									$back = "$back" . "<span class=\"auspank\"><a href=\"artistart.php?var=$name\">$name</a>; </span>";
								}
								else
								{
									$back = "$back" . "<span class=\"auspank\"><a href=\"artistart.php?var=$name\">$name</a></span>";
								}
								$dummy = $dummy + 1;
							}
							return $back;
						}
					?>
					</ul>
				</div>
			</div>
			<div class="kagga1">
					<div class="kagga2">
						<?php
							include("getkagga.php");
						?>
					</div>
				</div>
	</div>
	<div class="right">
		<div class="gokale">
			<img src="images/gokhale1.gif" alt="Logo" title="GopalKrishna Gokhale"/>
		</div>
		<div class="tabs">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="background.php">Background</li></a>
				<li><a href="activity.php">Activities</li></a>
				<?php echo "<li><a href=\"prog.php#d".$_SESSION['next_date']."\">Programmes</a></li>" ?>
				<li><a href="journals.php">Monthly Journals</a></li>
				<li><a class="active" href="malike.php">Lectures</a></li>
				<li><a href="gal.php">Gallery</a></li>
				<li><a href="donors.php">Sponsored Events</a></li>
				<li><a href="cus.php">Contact Us</a></li>
			</ul>		
		</div>
	</div>
	</div>
	<div class="footer">
		<div class="foot_box">
			<div class="fleft">
				&copy;2011 GIPA, Bangalore. All Rights Reserved
			</div>
			<div class="fright">
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li>|</li>

					<li><a href="#">Privacy Policy</a></li>	
					<li>|</li>
					<li><a href="cus.php">Contact Us</a></li>
					<li>&nbsp;</li>
				</ul>
			</div>			
		</div>
	</div>
</div>
</body>
</html>

