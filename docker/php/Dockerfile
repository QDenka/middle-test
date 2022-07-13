FROM node:16.3.0-alpine AS node
FROM php:8.1-fpm-alpine

COPY --from=node /usr/lib /usr/lib
COPY --from=node /usr/local/share /usr/local/share
COPY --from=node /usr/local/lib /usr/local/lib
COPY --from=node /usr/local/include /usr/local/include
COPY --from=node /usr/local/bin /usr/local/bin

WORKDIR /var/www/html

RUN apk --update add wget \
    curl \
    openssl \
    openssl-dev

RUN docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir /.npm && chmod 777 -R /.npm
RUN ln -s /var/www/html/resources/assets /var/www/html/public

RUN rm /var/cache/apk/*

