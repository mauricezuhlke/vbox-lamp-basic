#!/bin/bash

## Create the database
echo "Creating the $2 database"
/usr/bin/mysql -uroot -p$1 -e "CREATE DATABASE IF NOT EXISTS $2"
