FROM php:7.2-apache

RUN a2enmod rewrite;

# WORKDIR ../src

# COPY src /var/www/html/