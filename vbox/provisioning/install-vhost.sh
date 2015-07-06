#!/bin/bash

VHOST_PATH="/etc/apache2/sites-available/000-default.conf"
PROVISION_PATH="/vagrant/provisioning"

echo "Clearing existing Default virtual host..."
sudo cat /dev/null > $VHOST_PATH

echo "Replacing the contents with our detault template..."
sudo cat $PROVISION_PATH/templates/vhosts/default.txt > $VHOST_PATH

echo "Setting a localhost configuration..."
echo "ServerName localhost" | sudo tee /etc/apache2/conf-available/localservername.conf

echo "Enabling the localhost configuration..."
sudo a2enconf localservername

echo "Restarting Apache"
sudo service apache2 restart