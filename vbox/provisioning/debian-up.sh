#!/bin/sh

## do an update & upgrade
##sudo apt-get -y update && sudo apt-get -y upgrade > /dev/null 2>&1
sudo apt-get -y update && sudo DEBIAN_FRONTEND=noninteractive apt-get -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" upgrade
