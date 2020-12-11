FROM php:7-fpm

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y git zlib1g-dev libzip-dev zip unzip
RUN docker-php-ext-install zip

COPY --from=composer:1.10.15 /usr/bin/composer /usr/bin/composer

RUN mkdir -p /app
ADD . /app/

WORKDIR /app

RUN composer install
RUN cp .env.example .env
RUN php artisan key:generate
RUN chmod -R a+w storage/ bootstrap/cache
