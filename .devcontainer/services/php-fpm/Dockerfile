FROM php:7.4-fpm-alpine
RUN addgroup -g 1333 vscode && addgroup www-data vscode
RUN adduser -u 1333 -S vscode -G vscode
# Install the php zip extension.
RUN apk add --no-cache libzip-dev && docker-php-ext-configure zip && docker-php-ext-install zip
# Install php pcov pecl extension for super-fast coverage reports.
RUN apk add --no-cache g++ gcc make php7-dev zlib-dev && pecl install pcov && docker-php-ext-enable pcov
# Install common php extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql