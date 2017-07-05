#!/usr/bin/perl

$host = $ARGV[0];
$db = $ARGV[1];
$usr = $ARGV[2];
$pwd = $ARGV[3];

use DBI();

open(IN,"gipa.xml") or die "can't open gipa.xml\n";

my $dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd");
$dbh->{'mysql_enable_utf8'} = 1;
$dbh->do('SET NAMES utf8');


$sth11=$dbh->prepare("CREATE TABLE progs_list( 
date date, 
time varchar(200), 
sponsor varchar(4000), 
sp_name varchar(3000), 
sp_details varchar(5000), 
subject varchar(5000), 
entryid int(6) auto_increment, primary key(entryid)) ENGINE=MyISAM");
$sth11->execute();
$sth11->finish(); 

$line = <IN>;

$sp_name = '';
$sp_details = '';

while($line)
{
	if($line =~ /<entry>/)
	{
	}
	elsif($line =~ /<date>(.*)<\/date>/)
	{
		$date = $1;
	}
	elsif($line =~ /<time>(.*)<\/time>/)
	{
		$time = $1;
	}
	elsif($line =~ /<sponsor>(.*)<\/sponsor>/)
	{
		$sponsor = $1;
	}
	elsif($line =~ /<sponsor\/>/)
	{
		$sponsor = "";
	}
	elsif($line =~ /<name>(.*)<\/name>/)
	{
		$sp_name = $sp_name . "*" . $1;
	}
	elsif($line =~ /<details>(.*)<\/details>/)
	{
		$sp_details = $sp_details . "*" . $1;
	}
	elsif($line =~ /<details\/>/)
	{
	    $sp_details = "";
	}
	elsif($line =~ /<subject>(.*)<\/subject>/)
	{
		$subject = $1;
	}
	elsif($line =~ /<\/entry>/)
	{
		$sp_name =~ s/^\*//g;
		$sp_details =~ s/^\*//g;
		
		insert_article($date,$time,$sponsor,$sp_name,$sp_details,$subject);
		
		$sp_name = '';
		$sp_details = '';
	}
	$line = <IN>;
}

close(IN);
$dbh->disconnect();

sub insert_article()
{
	my($date,$time,$sponsor,$sp_name,$sp_details,$subject) = @_;
	my($sth1);

	$sponsor =~ s/'/\\'/g;
	$sp_name =~ s/'/\\'/g;
	$sp_details =~ s/'/\\'/g;
	$subject =~ s/'/\\'/g;
	
	$sth1=$dbh->prepare("insert into progs_list values('$date','$time','$sponsor','$sp_name','$sp_details','$subject',0)");
	
	$sth1->execute();
	$sth1->finish();
}
