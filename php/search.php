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
				<div class="subheader"></div>
				<div class="subtabs">
					<ul>
						<li><a href="volumes.php">Volumes</a></li>
						<li><a href="articles.php?letter=A">Articles</a></li>
						<li><a href="authors.php?letter= ">Authors</a></li>
						<li><a href="notes.php?letter= ">Notes</a></li>
						<li class="active"><a class="active" href="search.php">Search</a></li>
					</ul>
				</div>
			</div>
			<div class="topictitle">Search</div>
			<div class="data">
				<div class="limitdata1">
					<table align="center" style="margin:2em auto 0em 17em;">
						<form method="POST" action="search-result.php">
						<tr>
							<th>Title : &nbsp;&nbsp;</th>
							<td><input type="text" name="title" value=""/></td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						<tr>
							<th>Author : &nbsp;&nbsp;</th>
							<td><input type="text" name="author" value=""/></td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						<tr>
							<th>Words : &nbsp;&nbsp;</th>
							<td><input type="text" name="text" value=""/></td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						<tr>
							<th></th>
							<td>
								<input type="radio" name="bl" value="and" CHECKED />&nbsp;All these words
								<input type="radio" name="bl" value="or" />&nbsp;Any of these words
							</td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						<tr>
							<th>Period : &nbsp;&nbsp;</th>
							<td>
								<select name="fyear">
								<option value=""></option>
								<?php
									include("connect.php");
									$query = "select distinct year from articledetails order by year";
									$result = $mysqli->query($query);
									$num_rows = $result->num_rows;
									if($num_rows)
									{
										for($i=1;$i<=$num_rows;$i++)
										{
											$row = $result->fetch_assoc();
											$year = $row['year'];
											echo("<option value=\"$year\">$year</option>");
										}
									}
								?>
								</select>
								&nbsp;&nbsp;&nbsp; To &nbsp;&nbsp;&nbsp;
								<select name="tyear">
								<option value=""></option>
								<?php
									
									$result = $mysqli->query($query);
									$num_rows = $result->num_rows;
									if($num_rows)
									{
										for($i=1;$i<=$num_rows;$i++)
										{
											$row = $result->fetch_assoc();
											$year = $row['year'];
											echo("<option value=\"$year\">$year</option>");
										}
									}
								?>
								</select>
							</td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						<tr>
							<td>&nbsp;</td>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input name="button1" type="submit" value="SEARCH"/>&nbsp;&nbsp;&nbsp;&nbsp;
							<input name="button2" type="reset" value="RESET"/>
						</td>
						</tr>
						</form>
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

