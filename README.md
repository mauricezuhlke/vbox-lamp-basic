## Simple LAMP stack on Vagrant with Open Web Analytics

### Installation steps

This server is **NOT FOR PRODUCTION**, it is intended for local use only.

If you deploy this server to a public environment it **will** get hacked.

---


1. Ensure you have Virtual Box [installed](https://www.virtualbox.org/wiki/Downloads "Download Virtual Box")
2. Ensure you have Vagrant [installed](https://www.vagrantup.com "Install Vagrant")
3. Update your hosts file to allow a domain name to be used by Open Web Analytics as it won't work with IP addresses
	4. edit your host file (on a mac it's at: ```/private/etc/hosts```)
	2. Add a line at the end to say:
	```33.33.33.10 [made-up-domain].com``` 
	3. 33.33.33.10 is the private IP addess the Vagrant box will be listening at.
3. Install the Vagrant Triggers plugin ```vagrant plugin install vagrant-triggers```
4. cd to the ```vbox-lamp-basic``` folder
5. Type ```vagrant up```
6. Wait until the cli is done rushing past your eyes
7. Visit: http://[made-up-domain].com in your fave browser
8. To install Open Web Analytics
	9. http://[made-up-domain].com/owa in your web browser
	10. Follow the installation instructions with the database user as _root_ and password as _password123_
