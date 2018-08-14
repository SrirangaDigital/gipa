<?php
session_start();
$cur_date = date("Y-m-d");

include("php/connect.php");

if(!(isset($_SESSION['next_date'])))
{
	$query5 = "select date from progs_list where date>='$cur_date' limit 1";
	$result5 = $mysqli->query($query5);
	$row5 = $result5->fetch_assoc();
	$next_date = $row5['date'];
	$_SESSION['next_date'] = $next_date;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gokhale Institute of Public Affairs</title>
<link href="php/style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="php/style/indexstyle.css?v=2.0" media="screen" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="php/images/favicon.ico">
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo"><img src="php/images/logo1.png" alt="Logo" title="Logo"/></div>
		<div class="title">Gokhale Institute of Public Affairs</div>
		<div class="subtitle">Public Life Must be spiritualized - G. K. Gokhale</div>
	</div>
	<div class="mainpage">
	<div class="left">
		<div class="data">
			<div class="datatop">
				<img class="institute" src="php/images/iii.png" alt="Gokhale Institute, Bangalore" title="Gokhale Institute, Bangalore"/>
				<div class="instrt">
					<span class="bld"><br />The Gokhale Institute of Public Affairs (GIPA)</span> is an independent, non-party and non communal organization endeavouring to serve as a center for the education of the public for democratic citizenship. It seeks to Co-operate with, and seeks Co-operation from the Government and all public institutions in the country. 
					<div class="dv">
						<br /><span class="bld"><a href="php/journals.php">Public Affairs, Monthly Journal</a></span> of the Gokhale Institute of Public Affairs was started in the year 1949 with the objective of promoting education for and in the conscientious practice of democratic citizenship.<br />
						<br /><br />
						<span class="bld_color">
                            <span class="bld"><a href="php/gipa_pic.php">Click Here</a></span>
                            to download the ongoing series of talks on “The Foundations of Indian Culture” delivered by
                             <span class="bld">Shatavadhani Dr. R. Ganesh.</span><br />
                        </span>
<!--
						<span class="bld_color">
							Talks on <span class="bld"><a href="php/gipa_pic.php">“The Foundations of Indian Culture”</a></span> delivered by 
							<span class="bld">Shatavadhani Dr. R. Ganesh.</span><br />
						</span>
-->
					</div>
				</div>
			</div>
			<div class="line"></div>
			<table class="prgtbl">
<?php

$kan_days = array('ಭಾನುವಾರ', 'ಸೋಮವಾರ', 'ಮಂಗಳವಾರ', 'ಬುಧವಾರ', 'ಗುರುವಾರ', 'ಶುಕ್ರವಾರ', 'ಶನಿವಾರ');

$query4 = "select * from progs_list where date='$cur_date' limit 1";
$result4 = $mysqli->query($query4);
$num_rows4 = $result4->num_rows;

if($num_rows4)
{
	echo "<tr><td colspan=\"3\" class=\"prg_title\">ಇಂದಿನ ಕಾರ್ಯಕ್ರಮ</td></tr>";

	for($i4=0;$i4<$num_rows4;$i4++)
	{
		$row4 = $result4->fetch_assoc();
		$date = $row4['date'];
		$time = $row4['time'];
		$sponsor = $row4['sponsor'];
		$sp_name = $row4['sp_name'];
		$sp_details = $row4['sp_details'];
		$subject = $row4['subject'];
		
		$out = preg_split('/-/', $date);
		
		$day = date("w", mktime(0, 0, 0, $out[1], $out[2], $out[0]));
		
		echo"<tr>\n";
		echo"<td class=\"date\"><span class=\"special\">".$out[2]."-".$out[1]."-".$out[0]."</span><br />".$kan_days[$day]."<br />$time</td>\n";
		echo"<td class=\"sponsor\">$sponsor</td>\n";
		echo"<td class=\"event\">";
		
		$out_name = preg_split('/\*/', $sp_name);
		$out_details = preg_split('/\*/', $sp_details);
		
		$num = count($out_name);

		if($num == 1)
		{
			if($sp_name != '')
			{
				echo "<span class=\"special\">$sp_name</span><br />";
			}
			if($sp_details != '')
			{
				echo "($sp_details)<br />";
			}
		}
		else
		{
			for($j=0;$j<$num;$j++)
			{
				if($out_details != '')
				{
					echo "<span class=\"special\">".$out_name[$j]. "</span> (" . $out_details[$j] . ")<br />\n";
				}
				else
				{
					echo "<span class=\"special\">".$out_name[$j]. "</span><br />\n";
				}				
			}
		}
		echo "<span class=\"special\">$subject</span></td>\n";
		echo"</tr>\n";
	}
}
?>
			</table>
			<div class="databottom">
				<div class="kagga">
				<?php
					include("php/getkaggaforindex.php");
				?>
				</div>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="gokale">
			<img src="php/images/gokhale1.gif" alt="GopalKrishna Gokhale" title="GopalKrishna Gokhale"/>
		</div>
		<div class="tabs">
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="php/background.php">Background</a></li>
				<li><a href="php/activity.php">Activities</a></li>
				<?php echo "<li><a href=\"php/prog.php#d".$_SESSION['next_date']."\">Programmes</a></li>" ?>
				<li><a href="php/journals.php">Monthly Journals</a></li>
<!--
				<li><a href="php/malike.php">Lectures</a></li>
-->
				<li><a href="php/gal.php">Gallery</a></li>
				<li><a href="php/donors.php">Sponsored Events</a></li>
				<li><a href="php/cus.php">Contact Us</a></li>
			</ul>		
		</div>
		<div class="visitors">
			<table class="visit">
				<th>Visitors</th>
				<tr>
					<td>
					<?php 
						include("php/count.php");
					?>
					</td>
				</tr>
			</table>
		</div>
	</div>
	</div>
    <?php include("php/footer.php");?>
</div>

</body>
</html>

