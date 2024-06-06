#!/usr/bin/perl

$host = $ARGV[0];
$db = $ARGV[1];
$usr = $ARGV[2];
$pwd = $ARGV[3];

use DBI();

open(IN,"track.xml") or die "can't open track.xml\n";

my $dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd");
$dbh->{'mysql_enable_utf8'} = 1;
$dbh->do('SET NAMES utf8');

$sth_drop=$dbh->prepare("DROP TABLE IF EXISTS artist");
$sth_drop->execute();
$sth_drop->finish();

$sth11=$dbh->prepare("CREATE TABLE artist(artistname varchar(255), aid int(55) auto_increment, primary key(aid))auto_increment=4001 ENGINE=MyISAM character set utf8 collate utf8_general_ci");
$sth11->execute();
$sth11->finish();

$line = <IN>;

while($line)
{
	if($line =~ /<author>(.*)<\/author>/)
	{
		$artistname = $1;
		insert_artists($artistname);
    }
	$line = <IN>;
}

close(IN);
$dbh->disconnect();


sub insert_artists()
{
	my($artistname) = @_;

	$artistname =~ s/'/\\'/g;
	
	my($sth,$ref,$sth1);
	$sth = $dbh->prepare("select aid from artist where artistname='$artistname'");
	$sth->execute();
	$ref=$sth->fetchrow_hashref();
	if($sth->rows()==0)
	{
		$sth1=$dbh->prepare("insert into artist values('$artistname',null)");
		$sth1->execute();
		$sth1->finish();
	}
	$sth->finish();	
}
