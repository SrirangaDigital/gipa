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
			<div class="submenu"></div>
			<div class="topictitle">Donors &amp; Memorial Lectures</div>
			<div class="data">
				<div class="limitdata">
						<ul>
							<li><a href="endowlecture.php?var=Justice Dr. Nittor Srinivasarao Memorial Lecture Series">Justice Dr. Nittor Srinivasarao Memorial Lecture Series</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Dr. K. S. Umapathy and Dr. K. Padma Umapathy Memorial Lecture Series">Dr. K. S. Umapathy and Dr. K. Padma Umapathy Memorial Lecture Series </a><br /><br /></li>
							<li><a href="endowlecture.php?var=A.S.Bhim rao Endowment">A.S.Bhim rao Endowment lectures </a><br /><br /></li>
							<li><a href="endowlecture.php?var=G.N.Shakuntala Charitable trust">G.N.Shakuntala Charitable trust</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Dr.Sanat kumar and Dr.Shoba Sanat kumar. Chicago">Asthana Vidvan Motagana halli subramanya sastry memorial endowment lectures</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Dr. B.V. Subbarayappa Endowment Lecture">Dr. B. V. Subbarayappa Endowment Lectures</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Smt. Nirmala Memorial Lectures">Smt. Nirmala Memorial Lectures</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Sri Harihara Gundurao Memorial Lecture">Sri. Harihara Gundurao Memorial Lectures</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Prof.C. R. Narayanarao Memorial Lecture">Prof. C. R. Narayanarao Memorial Lectures</a><br /><br /></li>
							<li><a href="endowlecture.php?var=In memory of Sangeeta Vidhushi Smt. Vallabham Kalyanasundaram">In Memory of Sangeeta Vidhushi Smt. Vallabham Kalyanasundaram</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Justice R.Venkataramanaih Memorial Lecture">Justice R. Venkataramaniah Memorial Lectures</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Hindupura M. Narayanarao Memorial Lecture">Hindupura M. Narayanarao Memorial Lectures</a><br /><br /></li>
							<li><a href="endowlecture.php?var=Sri. Tumakur Subbaraju Endowment Lectures">Sri. Tumakur Subbaraju Endowment Lectures</a></li><br />
							<li><a href="endowlecture.php?var=Maasti Adhyayana peetha, Bengaluru">Maasti Adhyayana peetha, Bengaluru</a></li><br />
							<li><a href="endowlecture.php?var=Sri. Gopal Varadarajan Endowment Lectures">Sri. Gopal Varadarajan Endowment Lectures</a></li><br />
							<li><a href="endowlecture.php?var=Sri. Jademadappa Smt. Puttananjamma Endowment Lectures">Sri. Jademadappa Smt. Puttananjamma Endowment Lectures</a></li><br />
							<li><a href="endowlecture.php?var=Late B. S. Venkatakrishnappa, Justice R. Venkataramaiah, Smt. Sitamma Venkataramaiah Endowment Lectures">Late B. S. Venkatakrishnappa, Justice R. Venkataramaiah, Smt. Sitamma Venkataramaiah Endowment &nbsp;&nbsp;&nbsp;Lectures</a></li><br />
							<li><a href="endowlecture.php?var=Krishnashtami Lecture">Krishnashtami Lecture</a></li><br />
							<li><a href="endowlecture.php?var=Sri. Prakasha Memorial Lectures">Sri. Prakasha Memorial Lectures</a></li><br />
							<li><a href="endowlecture.php?var=Patti Adinarayanaiah and Patti Ramalakshamma Endowment Lectures">Patti Adinarayanaiah and Patti Ramalakshamma Endowment Lectures</a></li>
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
			<div class="fleft">&copy;2011 GIPA, Bangalore. All Rights Reserved</div>
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

