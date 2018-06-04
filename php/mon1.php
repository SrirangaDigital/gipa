<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gokhale Institute of Public Affairs</title>
<link href="style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style/style.css?v=2.0" media="screen" rel="stylesheet" type="text/css" />
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
				<div class="subheader">
				<!--	Volumes -->
				</div>
				<div class="subtabs">
					<ul>
						<li class="active"><a class="active" href="volumes.php">Volumes</a></li>
						<li><a href="articles.php?letter= ">Articles</a></li>
						<li><a href="authors.php?letter= ">Authors</a></li>
						<li><a href="notes.php?letter= ">Notes</a></li>
						<li><a href="search.php">Search</a></li>
					</ul>
				</div>
			</div>
			<div class="topictitle">
				<?php $year=$_GET['year']; echo "$year"?>
			</div>
			<div class="data">
				<div class="limitdata1">
						<table class="montbl">
							<tr>
								<td><a href="../Volumes/1949/January/gipa-1_1.djvu?djvuopts&zoom=page" target="_blank">January</a></td>
								<td><a href="../Volumes/1949/February/gipa-1_2.djvu?djvuopts&zoom=page" target="_blank">February</a></td>
								<td><a href="../Volumes/1949/March/gipa-1_3.djvu?djvuopts&zoom=page" target="_blank">March</a></td>
							</tr>
							<tr>
								<td><a href="../Volumes/1949/April/gipa-1_4.djvu?djvuopts&zoom=page" target="_blank">April</a></td>
								<td><a href="../Volumes/1949/May/gipa-1_5.djvu?djvuopts&zoom=page" target="_blank">May</a></td>
								<td><a href="../Volumes/1949/June/gipa-1_6.djvu?djvuopts&zoom=page" target="_blank">June</a></td>
							</tr>
							<tr>
								<td><a href="../Volumes/1949/July/gipa-1_7.djvu?djvuopts&zoom=page" target="_blank" >July</a></td>
								<td><a href="../Volumes/1949/August/gipa-1_8.djvu?djvuopts&zoom=page" target="_blank">August</a></td>
								<td><a href="../Volumes/1949/September/gipa-1_9.djvu?djvuopts&zoom=page" target="_blank">September</a></td>
							</tr>
							<tr>
								<td><a href="../Volumes/1949/October/gipa-1_10.djvu?djvuopts&zoom=page" target="_blank">October</a></td>
								<td><a href="../Volumes/1949/November/gipa-1_11.djvu?djvuopts&zoom=page" target="_blank">November</a></td>
								<td><a href="../Volumes/1949/December/gipa-1_12.djvu?djvuopts&zoom=page" target="_blank">December</a></td>
							</tr>
						</table>
				</div>
				<div class="kagga1">
					<div class="kagga2">
						<?php
							include("getkagga.php");
						?>
					</div>
				</div>
			</div>
	</div>
	<div class="right">
		<div class="gokale">
			<img src="images/gokhale1.gif" alt="Logo" title="GopalKrishna Gokhale"/>
		</div>
		<?php include("nav.php");?>
	</div>
	</div>
    <?php include("footer.php");?>
</div>
</body>
</html>

