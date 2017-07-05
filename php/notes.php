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
				<div class="subheader">
				<!--	List of Articles -->
				</div>
				<div class="subtabs">
					<ul>
						<li><a href="volumes.php">Volumes</a></li>
						<li><a href="articles.php?letter= ">Articles</a></li>
						<li><a href="authors.php?letter= ">Authors</a></li>
						<li class="active"><a class="active" href="notes.php?letter= ">Notes</a></li>
						<li><a href="search.php">Search</a></li>
						
					</ul>
				</div>
			</div>
			<div class="topictitle">
				List of Articles (Notes)
			</div>
			<div class="alphabet">
						<span class="letter"><a href="notes.php?letter= ">(A-Z)</a></span>
						<span class="letter"><a href="notes.php?letter=A">A</a></span>
						<span class="letter"><a href="notes.php?letter=B">B</a></span>
						<span class="letter"><a href="notes.php?letter=C">C</a></span>
						<span class="letter"><a href="notes.php?letter=D">D</a></span>
						<span class="letter"><a href="notes.php?letter=E">E</a></span>
						<span class="letter"><a href="notes.php?letter=F">F</a></span>
						<span class="letter"><a href="notes.php?letter=G">G</a></span>
						<span class="letter"><a href="notes.php?letter=H">H</a></span>
						<span class="letter"><a href="notes.php?letter=I">I</a></span>
						<span class="letter"><a href="notes.php?letter=J">J</a></span>
						<span class="letter"><a href="notes.php?letter=K">K</a></span>
						<span class="letter"><a href="notes.php?letter=L">L</a></span>
						<span class="letter"><a href="notes.php?letter=M">M</a></span>
						<span class="letter"><a href="notes.php?letter=N">N</a></span>
						<span class="letter"><a href="notes.php?letter=O">O</a></span>
						<span class="letter"><a href="notes.php?letter=P">P</a></span>
						<span class="letter"><a href="notes.php?letter=Q">Q</a></span>
						<span class="letter"><a href="notes.php?letter=R">R</a></span>
						<span class="letter"><a href="notes.php?letter=S">S</a></span>
						<span class="letter"><a href="notes.php?letter=T">T</a></span>
						<span class="letter"><a href="notes.php?letter=U">U</a></span>
						<span class="letter"><a href="notes.php?letter=V">V</a></span>
						<span class="letter"><a href="notes.php?letter=W">W</a></span>
						<span class="letter"><a href="notes.php?letter=X">X</a></span>
						<span class="letter"><a href="notes.php?letter=Y">Y</a></span>
						<span class="letter"><a href="notes.php?letter=Z">Z</a></span>
			</div>
			<div class="data">
				<div class="limitdata">
					<ul>
					<?php
						include("connect.php");

						$db = mysql_connect("localhost",$user,$password) or die("Not connected to database");
						$rs = mysql_select_db($database,$db) or die("No Database");

						$letter=$_GET['letter'];

						$query = "select * from articledetails where title like '$letter%' AND notes=1 order by title, volume, issue, page";
						$result = mysql_query($query);

						$num_rows = mysql_num_rows($result);
						if($num_rows)
						{
							for($i=1;$i<=$num_rows;$i++)
							{	
								$row=mysql_fetch_assoc($result);
								$title = $row['title'];
								$year = $row['year'];
								$month = $row['month'];
								$page = $row['page'];  $page = (int)$page;
								$volume = $row['volume'];$volume = (int)$volume;
								$issue = $row['issue']; $issue = (int)$issue;
								$aid = $row['aid'];
								$mm = "$volume"."_"."$issue";
								
								$query1 = "select * from authdetails where aid = $aid";
								$result1 = mysql_query($query1);
								$row1=mysql_fetch_assoc($result1);
								$authname = $row1['authname'];
								$ini1 = $row1['ini1'];
								$ini2 = $row1['ini2'];
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
								echo("&nbsp;|&nbsp;<span class=\"yearspan\"><a href=\"monthly.php?ye=$year&mo=$month\">$month, $year</a></span>");
								if($author!="")
								{
									echo("<br />&nbsp;&nbsp;");
									echo("&nbsp;Author : <span class=\"auspan\"><a href=\"authart.php?id=$aid&author=$author\">$author</a></span>");
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

