FROM php:7.0-apache

RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
