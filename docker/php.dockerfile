FROM php:8.0-fpm-alpine

RUN docker-php-ext-install opcache
RUN apk add --no-cache libzip-dev && docker-php-ext-configure zip && docker-php-ext-install zip

# install gdlib
RUN apk add --no-cache libpng libpng-dev libwebp-dev libjpeg-turbo-dev
RUN docker-php-ext-configure gd --enable-gd --with-jpeg --with-webp
RUN docker-php-ext-install gd

ADD ./docker/fpm.conf /usr/local/etc/php-fpm.d/zzzz-sock.conf

RUN echo http://dl-2.alpinelinux.org/alpine/edge/community/ >> /etc/apk/repositories
RUN apk --no-cache add shadow && usermod -u 101 www-data

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer