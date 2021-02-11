FROM php:7.4-fpm

COPY src /var/www/php

WORKDIR /var/www/php

RUN docker-php-ext-install pdo_mysql