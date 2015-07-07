#!/bin/bash

## Create the database
echo "Creating the $2 database"
/usr/bin/mysql -u root -p$1 -e "create database if not exists $2"
