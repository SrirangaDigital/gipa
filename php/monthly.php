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
				<div class="subheader">
				</div>
				<div class="subtabs">
					<ul>
						<li><a href="volumes.php">Volumes</a></li>
						<li class="active"><a class="active" href="articles.php?letter= ">Articles</a></li>
						<li><a href="authors.php?letter= ">Authors</a></li>
						<li><a href="notes.php?letter= ">Notes</a></li>
						<li><a href="search.php">Search</a></li>
						
					</ul>
				</div>
			</div>
			<div class="topictitle">
				List of Articles 
			</div>
			<div class="alphabet">
					<?php	
						$ye=$_GET['ye'];
						$mo=$_GET['mo'];
						echo "$ye, $mo&nbsp;&nbsp;&nbsp;&nbsp;";
					?>
			</div>
			<div class="data">
				<div class="limitdata">
					<ul>
					<?php
						include("connect.php");

						$ye=$_GET['ye'];
						$mo=$_GET['mo'];
						
						$query = "select * from articledetails where year=$ye AND month='$mo' order by page";
						$result = $mysqli->query($query);

						$num_rows = $result->num_rows;
						if($num_rows)
						{
							for($i=1;$i<=$num_rows;$i++)
							{	
								$row = $result->fetch_assoc();
								$title = $row['title'];
								$year = $row['year'];
								$month = $row['month'];
								$page = $row['page']; $page = (int)$page; 
								$volume = $row['volume']; $volume = (int)$volume;
								$issue = $row['issue']; $issue = (int)$issue;
								$aid = $row['aid'];
								$mm = "$volume"."_"."$issue";
								
								$query1 = "select * from authdetails where aid = $aid";
								$result1 = $mysqli->query($query1);
								$row1 = $result1->fetch_assoc();
								$authname = $row1['authname'];
								$ini1 = $row1['ini1'];
								$ini2 = $row1['ini2'];
								$dname = $row1['dname'];
								if($ini1=="")
								{
										if($ini2==""){$author = $authname;}
										else{$author = "$ini2"." $authname";}
								}
								else if($ini2=="")
								{
										if($ini1==""){$author = $authname;}
										else{$author = "$ini1"." $authname";}
								}
								else{$author="$ini1"." $ini2"." $authname";}
								
								echo("<li>");
								echo("<span class=\"titspan\"><a href=\"../Volumes/$year/$month/gipa-$mm.djvu?djvuopts&page=$page&zoom=page\" target=\"_blank\">$title</a></span>");
								if($author!="")
								{
									echo("<br />&nbsp;&nbsp;&nbsp;");
									echo("Author : <span class=\"auspan\"><a href=\"authart.php?id=$aid&author=$dname\">$dname</a></span>");
								}
								echo("</li>");
								echo("<br />\n\t\t\t\t\t");
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
    <?php include("footer.php");?>
</div>
</body>
</html>

