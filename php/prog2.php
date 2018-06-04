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
			<?php
						include("connect.php");
						$db = mysql_connect("localhost",$user,$password) or die("Not connected to database");
						$rs = mysql_select_db($database,$db) or die("No Database");
						$query4 = "select * from monthlyevents order by eventlistnumber desc limit 1";
						$result4 = mysql_query($query4);
						$num_rows4 = mysql_num_rows($result4);
						if($num_rows4)
						{
							for($i4=0;$i4<$num_rows4;$i4++)
							{
								$row4=mysql_fetch_assoc($result4);
								$from=$row4['monthfrom'];
								$to=$row4['tomonth'];
							}
						}
			echo"<div class=\"topictitle\">Programmes for $from to $to<br />Venue : ಡಿ.ವಿ.ಜಿ. ಸಭಾಂಗಣ</div>";
			?>
			
			<table class="prgtbl1" style="margin:0em 0em 0em 2.60em">
				<tr>
					<th style ="-moz-border-radius: 9px 0px 0px 0px;-webkit-border-radius: 9px 0px 0px 0px;border-radius: 9px 0px 0px 0px;">Date and Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Sponsor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th style ="-moz-border-radius: 0px 9px 0px 0px;-webkit-border-radius: 0px 9px 0px 0px;border-radius: 0px 9px 0px 0px;">Event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				</tr>
			</table>
			<div class="data">
				<div class="limitdata">
					<table class="prgtbl">
					<?php
						$query = "select * from monthlyevents order by eventlistnumber desc, eventid desc ";
						$result = mysql_query($query);
						$num_rows = mysql_num_rows($result);
						if($num_rows)
						{
							for($i=0;$i<$num_rows;$i++)
							{
								$row=mysql_fetch_assoc($result);
								$datentime=$row['datentime'];
								$prayojak=$row['prayojak'];
								$event=$row['event'];

								echo"\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t";
								echo"<td>$datentime</td>\n\t\t\t\t\t\t\t";
								echo"<td>$prayojak</td>\n\t\t\t\t\t\t\t";
								echo"<td>$event</td>\n\t\t\t\t\t\t";
								echo"</tr>\n";
							}
						}
					?>
					</table>
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

