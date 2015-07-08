## Simple LAMP stack on Vagrant with Piwik

### Installation steps

This server is **NOT FOR PRODUCTION**, it is intended for local use only.

If you deploy this server to a public environment it **will** get hacked.

---


1. Ensure you have Virtual Box [installed](https://www.virtualbox.org/wiki/Downloads "Download Virtual Box")
2. Ensure you have Vagrant [installed](https://www.vagrantup.com "Install Vagrant")
3. Install the Vagrant Triggers plugin ```vagrant plugin install vagrant-triggers```
4. cd to the ```vbox-lamp-basic``` folder
5. Type ```vagrant up```
6. Wait until the cli is done rushing past your eyes
7. Visit: [http://33.33.33.10/](http://33.33.33.10/) in your fave browser
8. To install Piwik
	9. Visit: [33.33.33.10/piwik/](http://33.33.33.10/piwik/) in your web browser
	10. Follow the installation instructions with the database user as _root_ and password as _password123_
