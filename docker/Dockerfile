FROM composer:2.2 as composer
FROM php:7.4-apache

WORKDIR /etc/apache2/sites-available/

COPY docker/001-fs.conf .

WORKDIR /var/www/html/

RUN apt-get update \
    && apt-get install -y libzip-dev git wget --no-install-recommends \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN a2enmod rewrite \
    && a2dissite 000-default \
    && a2ensite 001-fs

COPY --from=composer /usr/bin/composer /usr/bin/composer
