FROM php:7.3-apache
#Install git
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
COPY src/ /var/www/html/
EXPOSE 80