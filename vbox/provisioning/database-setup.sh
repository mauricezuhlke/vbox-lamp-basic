#!/bin/bash

## install mysql # set user & password
echo "Setting the MySQL password to be $1"
debconf-set-selections <<< "mysql-server mysql-server/root_password password $1"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $1"
apt-get update
echo "Installing MySQL Server"
apt-get install -y mysql-server-5.5
echo "Installing MySQL Client"
apt-get install -y mysql-client
