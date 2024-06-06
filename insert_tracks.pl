#!/usr/bin/perl

$host = $ARGV[0];
$db = $ARGV[1];
$usr = $ARGV[2];
$pwd = $ARGV[3];

use DBI();

open(IN,"track.xml") or die "can't open gipa.xml\n";

my $dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd");
$dbh->{'mysql_enable_utf8'} = 1;
$dbh->do('SET NAMES utf8');

$sth_drop=$dbh->prepare("DROP TABLE IF EXISTS track");
$sth_drop->execute();
$sth_drop->finish();

$sth11=$dbh->prepare("CREATE TABLE track( 
title varchar(500), 
size int(9), 
duration varchar(255), 
aid varchar(255), 
artist varchar(500), 
trackid int(10) auto_increment primary key
)
ENGINE=MyISAM default character set utf8 collate utf8_general_ci");

$sth11->execute();
$sth11->finish(); 

$line = <IN>;

$authids = "0";
$artist_names = "";

while($line)
{
	if($line =~ /<track duration="(.*)" size="(.*)">/)
	{
		$duration = $1;
		$size = $2;
	}
	elsif($line =~ /<title>(.*)<\/title>/)
	{
		$title = $1;
	}
	elsif($line =~ /<author>(.*)<\/author>/)
	{
		$artistname = $1;
		$authids = $authids . ";" . get_authid($artistname);
		$artist_names = $artist_names . ";" . $artistname;
	}
    elsif($line =~ /<allauthors \/>/)
	{
		$authids = "0";
		$artist_names = "";
	}	
	elsif($line =~ /<\/track>/)
	{
		$authids =~ s/^0;//g;
	
		insert_track($title,$size,$duration,$authids,$artist_names);
		
		$title = '';
		$authids = "0";
		$artist_names = "";
	}
	$line = <IN>;
}

close(IN);
$dbh->disconnect();

sub get_authid()
{
	my($artistname) = @_;
	my($sth,$ref,$authid);

	$artistname =~ s/'/\\'/g;
	
	$sth=$dbh->prepare("select aid from artist where artistname='$artistname'");
	$sth->execute();
			
	my $ref = $sth->fetchrow_hashref();
	$authid = $ref->{'aid'};
	$sth->finish();
	return($authid);
}

sub insert_track()
{
	my($title,$size,$duration,$authids,$artist_names) = @_;
	my($sth11);

	$title =~ s/'/\\'/g;
	$artist_names =~ s/'/\\'/g;
	
	$sth11=$dbh->prepare("insert into track values('$title','$size','$duration','$authids','$artist_names','0')");
	$sth11->execute();
	$sth11->finish();
}
