FROM php:5.6-apache

#Install composer package
RUN apt-get update
RUN apt-get install -y curl php5-cli git
COPY ./start-server.sh /
COPY ./composer-setup.php /
RUN chmod 755 /start-server.sh
RUN mv /start-server.sh /usr/local/bin/
RUN chmod 755 /composer-setup.php
ENTRYPOINT ["start-server.sh"]
