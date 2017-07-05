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
			<div class="topictitle">Public Affairs</div>
			<div class="data">
				<div class="limitdata1">
					<span class="bld">Public Affairs</span>, the monthly journal of the Gokhale Institute of Public Affairs was started in the year 1949 with the objective of promoting education for and in the conscientious practice of democratic citizenship.<br /><br />
					We can browse the Magazine by <span class="bld"><a href="articles.php?letter= ">Articles</a></span>, <span class="bld"><a href="volumes.php">Volumes</a></span>, <span class="bld"><a href="authors.php?letter= ">Authors</a></span>, and by <span class="bld"><a href="notes.php?letter= ">Notes</a></span>. <br /><br />
					We can <span class="bld"><a href="search.php">Search</a></span> through the entire archive by giving Article name, Author and Words appearing as filters.<br /><br />
					<span class="bld">Note:</span>  This magazine is in djvu format and to view this magazine you must install djvu plugin which is the primary means of viewing DjVu documents. It runs inside most modern browsers including IE, Firefox and Safari. To download this plug-in Click below<br /><br />
					<center><a href="http://www.celartem.com/en/download/djvu.asp"><img src="images/djvu_dl_pic.gif" border="0"></a></center>
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
				<li><a class="active" href="journals.php">Monthly Journals</a></li>
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
					<li>&nbsp;</li>
				</ul>
			</div>			
		</div>
	</div>
</div>
</body>
</html>

