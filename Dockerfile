FROM php:7.4-apache
# Install your extensions to connect to MySQL and add mysqli
RUN docker-php-ext-install mysqli