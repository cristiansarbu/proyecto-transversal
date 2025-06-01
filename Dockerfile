FROM php:8.4-apache-bookworm
RUN a2enmod rewrite
RUN apt-get update && apt-get install -y libzip-dev libonig-dev libxml2-dev default-mysql-client && docker-php-ext-install pdo pdo_mysql zip mbstring