FROM php:8.4-fpm AS base

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libicu-dev libpng-dev \
    && docker-php-ext-install intl gd zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN set -xe; \
    apt-get update; \
    apt-get -y install \
      msmtp \
      msmtp-mta

COPY ./docker/php/msmtprc /etc/msmtprc
RUN chmod 644 /etc/msmtprc && \
    chown root:root /etc/msmtprc

WORKDIR /var/www/html


FROM base AS dev

FROM base AS prod

COPY src/composer.json ./
RUN composer install

COPY ./src /var/www/html
