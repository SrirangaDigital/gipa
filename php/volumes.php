<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134339425-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-134339425-1');
	</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gokhale Institute of Public Affairs</title>
<link href="style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style/style.css?v=2.0" media="screen" rel="stylesheet" type="text/css" />
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
				<div class="subheader"></div>
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
				Volumes
			</div>
			<div class="data">
				<div class="limitdata1">
						<table class="voltbl">
							<?php
									$cnt = 0;
									include("connect.php");
									$query = "select distinct year from articledetails";
									$result = $mysqli->query($query);
									$num_rows = $result->num_rows;
									echo ("<tr>\n\t\t\t\t\t\t\t");
									
									for($i=1;$i<=$num_rows;$i++)
									{	
										$cnt= $cnt+1;
										$row = $result->fetch_assoc();
										$year = $row['year'];
										echo ("<td><a href=\"mon.php?year=$year\">$year</a></td>\n\t\t\t\t\t\t\t");
										if($cnt==1)
										{
											echo ("<td><a href=\"#\">1952</a></td>\n\t\t\t\t\t\t\t");
										}
										if($cnt==4)
										{
											echo ("</tr>\n\t\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t");
										}
										if($cnt==6)
										{
											echo ("<td><a href=\"#\">1966</a></td>\n\t\t\t\t\t\t\t");
										}
										if($cnt==8)
										{
											echo ("</tr>\n\t\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t");
										}
										if($cnt==13)
										{
											echo ("</tr>\n\t\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t");
										}
										if($cnt==18)
										{
											echo ("</tr>\n\t\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t");
										}
										if($cnt==20)
										{
											echo ("</tr>\n");
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
				<?php echo "<li><a href=\"prog.php#d".$_SESSION['next_date']."\">Programmes</a></li>" ?>
				<li><a class="active" href="journals.php">Monthly Journals</a></li>
<!--
				<li><a href="malike.php">Lectures</a></li>
-->
				<li><a href="gal.php">Gallery</a></li>
				<li><a href="donors.php">Sponsored Events</a></li>
				<li><a href="ebooks.php">E-Books</a></li>
				<li><a href="cus.php">Contact Us</a></li>
			</ul>		
		</div>
	</div>
	</div>
    <?php include("footer.php");?></div>
</body>
</html>

