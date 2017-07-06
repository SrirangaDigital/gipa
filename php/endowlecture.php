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
			<div class="submenu">
			<!--	<span class="subheader1">Donors &amp; Memorial Lectures</span> -->
			</div>
			<div class="topictitle">
				Donors &amp; Memorial Lectures
			</div>
			<div class="data">
				<div class="limitdata">
						<ul>
							<table class="dontbl1" style="border-bottom:1px solid #fff;">
								<th><?php $var = $_GET['var']; echo("$var") ?></th>
							</table>
							<table class="dontbl">
								<tr>
								<th>Date</th>
								<th>Programme</th>
								<th>Subject</th>
								<th>Lecturer/Speaker</th>
								</tr>
							<?php
								include("connect.php");

								$query = "select * from programme where sponsers like '%$var%'";
								$result = $mysqli->query($query);
								$num_rows = $result->num_rows;

								if($num_rows)
								{
									for($i=1;$i<=$num_rows;$i++)
									{
										$row = $result->fetch_assoc();
										$prog = $row['programmes'];
										$date = $row['date'];
										$artists = $row['artists'];
										$subject = $row['subject'];
								
										
												echo("<tr>
														<td>$date</td>
														<td>$prog</td>
														<td>$subject</td>
														<td>$artists</td>
													</tr>");
									}
								}
							?>
							</table>
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
				<li><a href="malike.php">Lectures</a></li>
				<li><a href="gal.php">Gallery</a></li>
				<li><a class="active" href="donors.php">Sponsored Events</a></li>
				<li><a href="cus.php">Contact Us</a></li>
			</ul>		
		</div>
	</div>
	</div> <!-- end of mainpage -->
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

