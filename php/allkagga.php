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
			<div class="submenu"></div>
			<div class="topictitle">ಮಂಕುತಿಮ್ಮನ ಕಗ್ಗಗಳು</div>
			<div class="data">
				<div class="limitdata1">
					<table class="allkaggatbl">
					<tr>
					<?php
						$count = 0;
						include("connect.php");
						$db = mysql_connect("localhost",$user,$password) or die("Not connected to database");
						$rs = mysql_select_db($database,$db) or die("No Database");
						$query = "select * from newkagga";
						$result = mysql_query($query);
						$num_rows = mysql_num_rows($result);
						for($i=1;$i<=$num_rows;$i++)
						{
							$row=mysql_fetch_assoc($result);
							$num = $row['num'];
							$poem = $row['kagga'];
							echo("<td><table class=\"kaggainner\"><tr><td>$poem &nbsp;&nbsp;-&nbsp;&nbsp;$num</td></tr></table></td>\n");
							$count = $count + 1;
							if($count%2==0){ echo("</tr><tr>");}
						}
					?>
					</tr>
					</table>
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
				<li><a class="active" href="prog.php">Programmes</a></li>
				<li><a href="journals.php">Monthly Journals</a></li>
				<li><a href="malike.php">Lectures</a></li>
				<li><a href="gal.php">Gallery</a></li>
				<li><a href="donors.php">Sponsored Events</a></li>
				<li><a href="cus.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
	</div>
    <?php include("footer.php");?>
</div>
</body>
</html>

