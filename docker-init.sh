#!/bin/bash

docker run -it -p 3306:3306 -v /home/huw/fingerprinting/mysql:/var/lib/mysql mysql:5.7 -e MYSQL_ROOT_PASSWORD=$1
docker run -dt -p 8080:80 -v /home/huw/fingerprinting/html:/var/www/html fingerprinting-server /bin/bash -c "start-server.sh"
