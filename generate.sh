#!/bin/sh

host="localhost"
db="igipa"
usr="root"
pwd='mysql'

echo "drop database if exists $db; create database $db;" | /usr/bin/mysql -uroot -p$pwd
perl insert_progs.pl $host $db $usr $pwd
perl insert_kagga.pl $host $db $usr $pwd
