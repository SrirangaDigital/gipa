<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gokhale Institute of Public Affairs</title>
<link href="style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style/style.cssv?=2.0" media="screen" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico">
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
				<div class="subtabs">
				<ul>
					<li class="active"><a class="active" href="malike.php">ಉಪನ್ಯಾಸಮಾಲಿಕೆ</a></li>
					<li><a href="audio.php">ಉಪನ್ಯಾಸಕರು</a></li>
				</ul>
				</div>
			</div>
			<div class="topictitlek">
				<?php
					$var=$_GET['var'];
					echo "$var";
				?>
			</div>
			<div class="data">
				<div class="limitdata">
					<ul>
					<?php
						include("connect.php");
						$var=$_GET['var'];
						
						$query = "SELECT * FROM track WHERE artist like '%$var%' order by title";
						$result = $mysqli->query($query);
						$num_rows = $result->num_rows;
						if($num_rows)
						{
							for($i=1;$i<=$num_rows;$i++)
							{
								$row = $result->fetch_assoc();
								$title=$row['title'];
								$artist=$row['artist'];
								$dur = $row['duration'];
								echo ("<li><span class=\"titspank\"><a href=\"#\">$title</a></span> <span class=\"durspan\"> </span><br /></li>\n\t\t\t\t\t");
							}
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
<!--
				<li><a class="active" href="malike.php">Lectures</a></li>
-->
				<li><a href="gal.php">Gallery</a></li>
				<li><a href="donors.php">Sponsored Events</a></li>
				<li><a href="ebooks.php">E-Books</a></li>
				<li><a href="cus.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
	</div>
    <?php include("footer.php");?>
</div>
</body>
</html>

