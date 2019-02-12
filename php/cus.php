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
			<div class="submenu"></div>
			<div class="topictitle">Location and Infrastructure</div>
			<div class="data">
				<div class="limitdata1">
						The Institute is located at Narasimharaja Colony (N.R.Colony) in Bangalore about 6 kms from City Railway Station / Kempegowda Bus Station and is close to B.M.S College of Engineering. The auditorium, D.V.G Sabhangana, with acoustics has a seating capacity of one hundred people.<br /><br /><br /><br />
						<center><span style="font-variant:small-caps; color:#975700; font-weight:bold;"><font style="font-size:2em; color:#975700;">G</font>okhale <font style="font-size:2em; color:#975700;">I</font>nstitute of <font style="font-size:2em; color:#975700;">P</font>ublic <font style="font-size:2em; color:#975700;">A</font>ffairs</span><br />
								<span style="color:#975700;">Bull Temple Road<br />
								Narasimharaja Colony<br />
								Bangalore - 560 019<br />
								Phone: (080) 26613148<br />
								E-mail:</span><span style="color:#975700;">secretary[AT]gipa-bng[DOT]org</span><br /></center><br /><br />
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
<!--
				<li><a href="malike.php">Lectures</a></li>
-->
				<li><a href="gal.php">Gallery</a></li>
				<li><a href="donors.php">Sponsored Events</a></li>
				<li><a href="ebooks.php">E-Books</a></li>
				<li><a class="active" href="cus.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
	</div> <!-- end of mainpage -->
    <?php include("footer.php");?>
</div>
</body>
</html>
