#!/bin/sh

host="localhost"
db="igipa"
usr="root"
pwd='Pass246!'

echo "drop database if exists $db; create database $db CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;" | /usr/bin/mysql -uroot -p$pwd
perl insert_progs.pl $host $db $usr $pwd
perl insert_kagga.pl $host $db $usr $pwd
perl insert_artist.pl $host $db $usr $pwd
perl insert_tracks.pl $host $db $usr $pwd
