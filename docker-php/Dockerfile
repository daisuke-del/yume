FROM php:8.0-apache
RUN apt-get update && apt-get install -y \
   vim \
   zip \
   unzip \
   iputils-ping \
   git
RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

EXPOSE 80