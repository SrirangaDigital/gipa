#!/usr/bin/perl

$host = $ARGV[0];
$db = $ARGV[1];
$usr = $ARGV[2];
$pwd = $ARGV[3];

use DBI();

open(IN,"kagga.xml") or die "can't open kagga.xml\n";

my $dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd");
$dbh->{'mysql_enable_utf8'} = 1;
$dbh->do('SET NAMES utf8');


$sth11=$dbh->prepare("CREATE TABLE newkagga (
	num int(4) NOT NULL,
	kagga text) ENGINE=MyISAM  character set utf8 collate utf8_general_ci");
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
	elsif($line =~ /<num>(.*)<\/num>/)
	{
		$num = $1;
	}
	elsif($line =~ /<kagga>(.*)<\/kagga>/)
	{
		$kagga = $1;
	}
	elsif($line =~ /<\/entry>/)
	{	
		insert_article($num,$kagga);
		
		$sp_name = '';
		$sp_details = '';
	}
	$line = <IN>;
}

close(IN);
$dbh->disconnect();

sub insert_article()
{
	my($num,$kagga) = @_;
	my($sth1);

	$kagga =~ s/'/\\'/g;
	
	$sth1=$dbh->prepare("insert into newkagga values('$num','$kagga')");
	$sth1->execute();
	$sth1->finish();
}
