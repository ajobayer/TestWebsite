# demo-webapp-frontend

## Bootstrap file for Ubunutu
```
#!/bin/bash -xe
apt-get update
apt-get install apache2 php php-mysql git curl
chkconfig httpd on
service apache2 start
#echo "<?php phpinfo();?>" > /var/www/html/index.php
cd /var/www/html
git clone https://github.com/ajobayer/demo-webapp-frontend.git
cp -r demo-webapp-frontend/* .
```

## Bootstrap file for RHEL/CentOS/AMI
```
#!/bin/bash -xe
yum install httpd php php-mysql git -y
yum update -y
chkconfig httpd on
service httpd start
#echo "<?php phpinfo();?>" > /var/www/html/index.php
cd /var/www/html
git clone https://github.com/ajobayer/demo-webapp-frontend.git
cp -r demo-webapp-frontend/* .
```
