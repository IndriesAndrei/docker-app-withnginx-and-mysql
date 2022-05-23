# pulling the image php 8.1.6 image from hub.docker.com
FROM php:8.1.6-fpm

WORKDIR /var/www

# installing some dependencies we want for our application
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

RUN docker-php-ext-install pdo_mysql 

EXPOSE 9000