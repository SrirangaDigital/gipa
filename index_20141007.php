<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gokhale Institute of Public Affairs</title>
<link href="php/style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="php/style/indexstyle.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo"><img src="php/images/logo1.png" alt="Logo" title="Logo"/></div>
		<div class="title">Gokhale Institute of Public Affairs</div>
		<div class="subtitle">Public Life Must be spiritualized - G. K. Gokhale</div>
	</div>
	<div class="mainpage">
	<div class="left">
		<div class="data">
			<div class="datatop">
				<img class="institute" src="php/images/iii.png" alt="Gokhale Institute, Bangalore" title="Gokhale Institute, Bangalore"/>
				<div class="instrt">
					<span class="bld"><br />The Gokhale Institute of Public Affairs (GIPA)</span> is an independent, non-party and non communal organization endeavouring to serve as a center for the education of the public for democratic citizenship. It seeks to Co-operate with, and seeks Co-operation from the Government and all public institutions in the country. 
					<div class="dv">
						<br /><span class="bld"><a href="php/journals.php">Public Affairs, Monthly Journal</a></span> of the Gokhale Institute of Public Affairs was started in the year 1949 with the objective of promoting education for and in the conscientious practice of democratic citizenship.<br />
						<br /><br />
						<span class="bld_color">
							<span class="bld"><a href="php/gipa_pic.php">Click Here</a></span>
							to download the ongoing series of talks on “The Foundations of Indian Culture” delivered by 
							<span class="bld">Shatavadhani Dr. R. Ganesh.</span><br />
						</span>
					</div>
				</div>
			</div>
			<div class="line"></div>
				<?php
					$h = date("H");
					$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
					$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
					
					
					if($h<24)
					{
						$today = $today;						
					}
					else
					{
						$today = $tomorrow;

					}
					$today1 = $today;
					$today = date("Y-m-d",$today);
					$disdate = date("d-m-Y", $today1);
					//echo $disdate . "<br />";
					//$today="2011-10-01";
					//$disdate="01-10-2011";

					include("php/connect.php");
					$db = mysql_connect("localhost",$user,$password) or die("Not connected to database");
					$rs = mysql_select_db($database,$db) or die("No Database");
					$query1 = "select * from daybydayprog where edate='$today'";
					$result1 = mysql_query($query1);
					$result2 = mysql_query($query1);
					$num_rows1 = mysql_num_rows($result1);
				//	echo "$today";
					if($num_rows1)
					{
						$row13=mysql_fetch_assoc($result2);
						$time = $row13['time'];
						echo("<div class=\"datamiddle\">");// Program today will be displayed
							echo("<div class=\"today\">ಇಂದಿನ ಕಾರ್ಯಕ್ರಮ<br />
								<span class=\"displaydate\">
								ದಿನಾಂಕ : $disdate  
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								ಸ್ಥಳ : ಡಿ.ವಿ.ಜಿ. ಸಭಾಂಗಣ
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								ಸಮಯ : $time</span>
								</div>");
							for($i1=1;$i1<=$num_rows1;$i1++)
							{
								$row1=mysql_fetch_assoc($result1);
								$datentime = $row1['datentime'];
								$time = $row1['time'];
								$prayojak = $row1['prayojak'];
								$event = $row1['event'];
								echo "<br />$prayojak <br />$event<br />";
								echo("<div></div>");
							}
						echo("</div>");
					}
				?>
			<div class="databottom">
				<div class="kagga">
				<?php
					include("php/getkaggaforindex.php");
				?>
				</div>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="gokale">
			<img src="php/images/gokhale1.gif" alt="GopalKrishna Gokhale" title="GopalKrishna Gokhale"/>
		</div>
		<div class="tabs">
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="php/background.php">Background</a></li>
				<li><a href="php/activity.php">Activities</a></li>
				<li><a href="php/prog.php">Programmes</a></li>
				<li><a href="php/journals.php">Monthly Journals</a></li>
				<li><a href="php/malike.php">Lectures</a></li>
				<li><a href="php/gal.php">Gallery</a></li>
				<li><a href="php/donors.php">Sponsored Events</a></li>
				<li><a href="php/cus.php">Contact Us</a></li>
			</ul>		
		</div>
		<div class="visitors">
			<table class="visit">
				<th>Visitors</th>
				<tr>
					<td>
					<?php 
						include("php/count.php");
					?>
					</td>
				</tr>
			</table>
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
					<li><a href="php/cus.php">Contact Us</a></li>
					<li>&nbsp;</li>
				</ul>
			</div>
		</div>
	</div>
</div>

</body>
</html>

