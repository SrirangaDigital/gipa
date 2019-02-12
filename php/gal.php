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
<script type="text/javascript" src="js/jquery.min.js"></script>
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
			<!--	<div class="subheader">
					<span class="subhead">Photo Gallery</span>
				</div> -->
			</div>
			<div class="topictitle">
				Photo Gallery
			</div>
			<div class="data">
				<div class="limitdata1">
					<script src="lightbox/js/prototype.js" type="text/javascript"></script>
					<script src="lightbox/js/scriptaculous.js?load=effects" type="text/javascript"></script>
					<script src="lightbox/js/lightbox.js" type="text/javascript"></script>
					<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen">
					<table class="galtbl">
						<tr>
							<td><a href='images/gal/1.jpg' rel='lightbox[gallery]' title="Vidvan Ranganathasharma and Dr.Gururaj karajagi"><img src="images/gal/1t.jpg" alt="face1"></a></td>
							<td><a href='images/gal/2.jpg' rel='lightbox[gallery]' title="Advocate Generalof India Sri Soli.J.Sorabji speaking at GIPA on the centenary celebration of Sri Minoo Masoud.Topic: Growing intolerance a threat to democracy"><img src="images/gal/2t.jpg" alt="face1"></a></td>
							<td><a href='images/gal/3.jpg' rel='lightbox[gallery]' title="Dr.K.S.Narayanacharya"><img src="images/gal/3t.jpg" alt="face1"></a></td>							
						</tr>
						<tr>
							<td><a href='images/gal/4.jpg' rel='lightbox[gallery]' title="Extended D.V.G.Auditorium"><img src="images/gal/4t.jpg" alt="face1"></a></td>
							<td><a href='images/gal/dvg.jpg' rel='lightbox[gallery]' title="D. V. G. Study Circle"><img src="images/gal/dvgt.jpg" alt="D. V. G. Study Circle"></a></td>
							<td><a href='images/gal/palkivala2.jpg' rel='lightbox[gallery]' title="Nani Palkivala addressing a big gathering"><img src="images/gal/palkivala2t.jpg" alt="face1"></a></td>
						</tr>
						<tr>
							<td><a href='images/gal/palkivala3.jpg' rel='lightbox[gallery]' title="Nani Palkivala addressing a big gathering"><img src="images/gal/palkivala3t.jpg" alt="face1"></a></td>
							<td><a href='images/gal/prog1.jpg' rel='lightbox[gallery]' title="Lectures"><img src="images/gal/prog1t.jpg" alt="face1"></a></td>
							<td><a href='images/gal/prog2.jpg' rel='lightbox[gallery]' title="Lectures"><img src="images/gal/prog2t.jpg" alt="face1"></a></td>
						</tr>
						<tr>
							<td><a href='images/gal/subbulakshmi.jpg' rel='lightbox[gallery]' title="M.S.Subbulakshmi honoured by Sadashivam"><img src="images/gal/subbulakshmit.jpg" alt="face1"></a></td>
							<td><a href='images/gal/pal.jpg' rel='lightbox[gallery]' title="Nani Palkivala addressing a big gathering"><img src="images/gal/palt2.jpg" alt="face1"></a></td>
						</tr>
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
				<li><a href="journals.php">Monthly Journals</a></li>
<!--
				<li><a href="malike.php">Lectures</a></li>
-->
				<li><a class="active" href="gal.php">Gallery</a></li>
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

