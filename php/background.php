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
			<div class="topictitle">
				Events leading to the founding of GIPA
			</div>
			<div class="data">
				<div class="limitdata">
					The death of <span class="bld">Gopal Krishna Gokhale</span> on <span class="bld">19th February 1915</span> evoked an outburst of grief and sense of loss throught the country. Leaders like Balagangadhar Tilak and Mahatma Gandhi paid rich tributes to the departed leader. There was a desire every where to make an organised effort to serve the country after the example of gokhale.<br /><br />
					<span class="bld">1915-1941</span><br />
					In Bangalore a largely attended public meeting was held on <span class="bld">25th February 1915</span> at which <span class="bld">Sir M.Visveswaraya</span>, then Dewan of Mysore, spoke in appreciation of Gokhale's personality and his work. Inspired by the speeches of national leaders and others, a small group of young men decided to start an association called The <span class="bld">Mysore Social Service League</span>. Among those who took active interest in that endeavour may be mentioned <span class="bld">D.V.Gundappa, K.S.Krishna Iyer. A.R.Nageshwara Iyer, N.Narasimha Murthy, M.G.Varadachar, C.S.Anantha Padmanabha Iyer, S.Surya Prakash, Mokshagundam Krishna Murthy, Belur Srinivasa Iyengar, B.V.Subba Rao and K.Bheema Rao</span>. It is this small group which decided to invite Mahatma Gandhi to Bangalore in May 1915 and requested him to bless their idea. Gandhiji was touring in South India at that time, and had proposed to visit Madras. A telegram was sent to him and the invitation was accepted.<br /><br />
					The visit of Mahatma Gandhi - his first visit to Bangalore - evoked great enthusiasm among the public and the function was a great success. M.Venkatakrishnaiya, the Grand Old Man of Mysore, came specially to take part in the meeting. Enthused by the public appreciation, the League drew up a programme of work. It arranged several public lectures. It organised two night schools and took up relief measures during the epidemic of influenza in 1918-19. The epidemic snatched away some members of the League, and the personal circumstances of other members turned unfavourable for public work. During the next ten years the dream of public service remained only in the hearts of these young men who were by then popularly known as the Gokhale group.<br /><br />
					The urge to revive the idea came during 1930 due to the conditions then prevailing in the country. To make democracy safe and smooth, a non-partisan and well-informed citizens' group was the need of the day. To organize such an agency was the purpose of the Gokhale Institute of Public Affairs.<br /><br />
					During 1939 a draft of the conspectus was prepared by D.V.Gundappa and submitted to Rt.Hon. V.S.Sreenivasa Sastri. Incorporating his valuable suggestions, a letter of appeal was prepared to raise an initial fund of Rs.5,000/-. However, it had to be defered for various reasons.<br /><br />
					Another effort was made in 1941 about the time of the introduction of new constitution in Mysore. A course of lectures was arranged to enlighten the public about the New Constitution. Four meetings were arranged. The first meeting of the Gokhale Institute of Public Affairs was called on 22nd May 1941 in the National High School. It drew a packed audience among whom were noted journalists, political workers, members of legislature and other prominent citizens. D.V.Gundappa delivered the first day's lecture; the second, third and fourth meetings were addressed by M.A.Gopalaswamy Iyengar, M.P.Somasekhara Rao and V.Sitaramaiah respectively.<br /><br />
					<span class="bld">At the initial stage</span><br/>
					A renewed and final effort - now for the fourth time - at founding the Gokhale Institute was made towards the end of 1944 and letters of appeal were once again addressed. The response was encouraging. A meeting was called on 18th February 1945 at D.V.Gundappa's residence in Nagasandra Road. The meeting adopted the draft rules and appointed a Council of Management, Congratulatory messages had been received from Gopalaswamy Ayyangar, Sir Mirza M. Ismail and others. The Institute in the present form was thus born on 18th February 1945. However, as the needed building was not available, it was only on 2nd July 1946 that the first lecture was arranged after securing a building. That meeting was addressed by Hrudayanath Kunzru, then president of the Servants of India Society.<br /><br />
					The Study Circle was started on 15th December 1947 and the first book taken up for study was John Stuart Mill's On Liberty, Since then many Classics in English, Samskrita and Kannada have been studied.
					On 15th August 1948 B.P.Wadia, Director of the Indian Institute of World Culture, Bangalore, declared the Library of the G.I.P.A. open for the public use. The library now has a rare collection of valuable books, and is constantly used by the general public as well as by research scholars.
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
				<li><a class="active" href="background.php">Background</li></a>
				<li><a href="activity.php">Activities</li></a>
				<?php echo "<li><a href=\"prog.php#d".$_SESSION['next_date']."\">Programmes</a></li>" ?>
				<li><a href="journals.php">Monthly Journals</a></li>
<!--
				<li><a href="malike.php">Lectures</a></li>
-->
				<li><a href="gal.php">Gallery</a></li>
				<li><a href="donors.php">Sponsored Events</a></li>
				<li><a href="cus.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
	</div>
    <?php include("footer.php");?>
</div>
</body>
</html>
