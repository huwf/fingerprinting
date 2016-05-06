docker run -dt -p 3306:3306 -v ~/fingerprinting/mysql:/var/lib/mysql mysql:5.7
docker run -dt -p 8080:80 -v ~/fingerprinting/html:/var/www/html php:5.6-apache
