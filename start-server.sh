#! /bin/bash
# Install dependencies for the application
mv /composer-setup.php /var/www/html/
php -r "if (hash_file('SHA384', 'composer-setup.php') === '92102166af5abdb03f49ce52a40591073a7b859a86e8ff13338cf7db58a19f7844fbc0bb79b2773bf30791e935dbd938') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv /var/www/html/composer.phar /usr/local/bin/composer

chown 1000:1000 /usr/local/bin/composer
composer require whichbrowser/parser
composer update whichbrowser/parser

#And run Apache
apache2-foreground
