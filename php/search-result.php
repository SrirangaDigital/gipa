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
			<div class="topictitle">Search Results</div>
			<div class="data">
				<div class="limitdata">
					<?php
						include("connect.php");
						$author=$_POST['author'];
						$text=$_POST['text'];
						$title=$_POST['title'];
						$year1=$_POST['fyear'];
						$year2=$_POST['tyear'];
						$bl=$_POST['bl'];
						
						$author = preg_replace("/[\t]+/", " ", $author);
						$author = preg_replace("/[ ]+/", " ", $author);
						$author = preg_replace("/^ /", "", $author);

						$title = preg_replace("/[\t]+/", " ", $title);
						$title = preg_replace("/[ ]+/", " ", $title);
						$title = preg_replace("/^ /", "", $title);
						$text2 = $text;
						if($title=='')
						{
							$title='[a-z]*';
						}
						if($author=='')
						{
							$author='[a-z]*';
						}
						if($year1=='')
						{
							$year1='1949';
						}
						if($year2=='')
						{
							$year2='1982';
						}
						if($text=='')
						{
							$query="SELECT * FROM
									(SELECT * FROM
									(SELECT * FROM articledetails WHERE authorname REGEXP '$author') AS tb1						
									WHERE title REGEXP '$title') AS tb2
									WHERE year between $year1 and $year2 ORDER BY volume, issue, page";
						}
						elseif($text!='')
						{
							$text = rtrim($text);
							$tx1 = preg_split('/ /',$text);
							$text1 = '';
							$i1 = 1;
	
							$text3 = $tx1[0];
	
							foreach($tx1 as $val1)
							{
								if ($bl == "and")
								{
									$val1 = "+".$val1;
								}
								if($i1 > 1)
								{
									$text1 = $text1." ". $val1;	
								}
								else
								{
									$text1 = $text1."". $val1;	
								}
								$i1++;
							}
							$text=$text1;

							$query="SELECT * FROM
									(SELECT * FROM
										(SELECT * FROM
												(SELECT * FROM searchtable WHERE MATCH (text) AGAINST ('$text' IN BOOLEAN MODE))
													AS tb1 WHERE authorname REGEXP '$author')
												AS tb2 WHERE title REGEXP '$title')
										AS tb4 WHERE year between $year1 and $year2 ORDER BY volume, issue, page, cur_page";
						}

						$result = $mysqli->query($query);
						$num_results = $result->num_rows;

						if ($num_results > 0)
						{
							echo "<span class=\"bld\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$num_results result(s)</span><br /><br />\n\t\t\t\t\t";
						}
						$titleid[0]=0;
						$id = 0;			
						if($num_results)
						{
							for($i=1;$i<=$num_results;$i++)
							{	
								$row = $result->fetch_assoc();
								$title = $row['title'];
								$year = $row['year'];
								$month = $row['month'];
								$page = $row['page']; //$page = (int)$page; 
								$volume = $row['volume']; $volume = (int)$volume;
								$issue = $row['issue'];	$issue = (int)$issue;
								$aid = $row['aid'];
								$titleid = $row['titleid'];
								$mm = "$volume"."_"."$issue";
								if($text != '')
								{
									$cur_page = $row['cur_page'];
								}
								
								$query1 = "select * from authdetails where aid = $aid";
								$result1 = $mysqli->query($query1);
								$row1 = $result1->fetch_assoc();
								$authname = $row1['authname'];
								$ini1 = $row1['ini1'];
								$ini2 = $row1['ini2'];
								$dname = $row1['dname'];
								if($ini1=='')
								{
										
										if($ini2==''){$author = $authname;}
										else{$author = "$authname".", $ini2";}
								}
								elseif($ini2=='')
								{
										if($ini1==''){$author = $authname;}
										else{$author = "$authname".", $ini1";}
								}
								else{$author="$authname".", $ini2".", $ini1";}
								
								
								if ($id != $titleid)
								{
									if($text!='' && $i!=1)
									{
										echo("<br /><br />");
									}
									else if($i!=1)
									{
										echo("<br />");
									}
									echo("<li>");
									echo("<span class=\"titspan\"><a href=\"../Volumes/$year/$month/gipa-$mm.djvu?djvuopts&page=$page&zoom=page\" target=\"_blank\">$title</a></span>");
									echo("&nbsp;|&nbsp;<span class=\"yearspan\"><a href=\"monthly.php?ye=$year&mo=$month\">$month, $year</a></span>");
									if($author!="")
									{
										echo("<br />&nbsp;&nbsp;&nbsp;");
										echo("Author : <span class=\"auspan\"><a href=\"authart.php?id=$aid&author=$dname\">$dname</a></span>");
									}
									echo("</li>\n\t\t\t\t\t");
									
									if($text != '')
									{
										echo "<span class=\"bld\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$text2</span> found at page no(s). ";
										echo "<span class=\"bld\">&nbsp;<a href=\"../Volumes/$year/$month/gipa-$mm.djvu?djvuopts&page=$cur_page&zoom=page&find=$text2\" target=\"_blank\"\">".intval($cur_page)."</a>&nbsp;</span>";
										$id = $titleid;
									}
								}
								else
								{
									echo "<span class=\"bld\">&nbsp;<a href=\"../Volumes/$year/$month/gipa-$mm.djvu?djvuopts&page=$cur_page&zoom=page&find=$text2\" target=\"_blank\"\">".intval($cur_page)."</a>&nbsp;</span>";
									$id = $titleid;	
								}
								
								
							}	
						}
						else
						{
							echo ("<span class=\"titspan\">No results</span><br />");
							echo ("<span class=\"titspan\"><a href=\"search.php\">Go back and Search again</a></span>");
						}				
					?>
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
    <?php include("footer.php");?>
</div>
</body>
</html>

