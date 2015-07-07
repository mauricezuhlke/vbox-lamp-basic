#!/bin/bash

# enable mod-rewrite
echo "Enabling mod_rewrite"
sudo a2enmod rewrite

# set the correct permissions
echo "Setup the www-data user"
sudo usermod -a -G www-data vagrant

echo "Change ownership of the www path"
sudo chown -R root:www-data /var/www
sudo chmod 2775 /var/www

# ensure the permissions are sticky
echo "Ensure directory permissions are sticky"
find /var/www -type d -exec sudo chmod 2775 {} +

echo "Ensure file permissions are sticky"
find /var/www -type f -exec sudo chmod 0664 {} +

echo "Restart apache"
sudo service apache2 restart
