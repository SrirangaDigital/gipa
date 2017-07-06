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
		<div class="submenu"></div>
		<div class="topictitle">Programmes from January 2012 to June 2015<br />Venue : ಡಿ.ವಿ.ಜಿ. ಸಭಾಂಗಣ</div>
		<table class="prgtbl1" style="margin:0em 0em 0em 2.60em">
			<tr>
				<th style ="-moz-border-radius: 9px 0px 0px 0px;-webkit-border-radius: 9px 0px 0px 0px;border-radius: 9px 0px 0px 0px;width: 20%;text-align:center;">Date and Time</th>
				<th style="width: 35%;text-align:center;">Sponsor</th>
				<th style ="-moz-border-radius: 0px 9px 0px 0px;-webkit-border-radius: 0px 9px 0px 0px;border-radius: 0px 9px 0px 0px;width: 45%;text-align:center;">Event</th>
			</tr>
		</table>
			<div class="data">
				<div class="limitdata">
					<table class="prgtbl">
<?php

include("connect.php");
$kan_days = array('ಭಾನುವಾರ', 'ಸೋಮವಾರ', 'ಮಂಗಳವಾರ', 'ಬುಧವಾರ', 'ಗುರುವಾರ', 'ಶುಕ್ರವಾರ', 'ಶನಿವಾರ');

$query4 = "select * from progs_list order by date";
$result4 = $mysqli->query($query4);
$num_rows4 = $result4->num_rows;
if($num_rows4)
{
	for($i4=0;$i4<$num_rows4;$i4++)
	{
		$row4 = $result4->fetch_assoc();
		$date = $row4['date'];
		$time = $row4['time'];
		$sponsor = $row4['sponsor'];
		$sp_name = $row4['sp_name'];
		$sp_details = $row4['sp_details'];
		$subject = $row4['subject'];
		
		$out = preg_split('/-/', $date);
		
		$day = date("w", mktime(0, 0, 0, $out[1], $out[2], $out[0]));
		
		echo"<tr id=\"d$date\">\n";
		echo"<td class=\"date\"><span class=\"special\">".$out[2]."-".$out[1]."-".$out[0]."</span><br />".$kan_days[$day]."<br />$time</td>\n";
		echo"<td class=\"sponsor\">$sponsor</td>\n";
		echo"<td class=\"event\">";
		
		$out_name = preg_split('/\*/', $sp_name);
		$out_details = preg_split('/\*/', $sp_details);
		
		$num = count($out_name);

		if($num == 1)
		{
			if($sp_name != '')
			{
				echo "<span class=\"special\">$sp_name</span><br />";
			}
			if($sp_details != '')
			{
				echo "($sp_details)<br />";
			}
		}
		else
		{
			for($j=0;$j<$num;$j++)
			{
				if(isset($out_details[$j]) && isset($out_name[$j]))
				{
					echo "<span class=\"special\">". $out_name[$j] . "</span> (" . $out_details[$j] . ")<br />\n";
				}
				elseif(!isset($out_details[$j]) && isset($out_name[$j]))
				{
					echo "<span class=\"special\">".$out_name[$j]. "</span><br />\n";
				}
				elseif(isset($out_details[$j]) && !isset($out_name[$j]))
				{
					echo "<span class=\"special\">". $out_name[$j] . "</span> (" . $out_details[$j] . ")<br />\n";
				}				
			}
		}
		echo "<span class=\"special\">$subject</span></td>\n";
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
				<?php echo "<li><a class=\"active\" href=\"prog.php#d".$_SESSION['next_date']."\">Programmes</a></li>" ?>
				<li><a href="journals.php">Monthly Journals</a></li>
				<li><a href="malike.php">Lectures</a></li>
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
					<li>|</li>
					<li><a href="sitemap.php">Sitemap</a></li>
					<li>&nbsp;</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>

