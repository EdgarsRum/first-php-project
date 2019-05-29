FROM php:fpm-alpine

# Install extensions
RUN docker-php-ext-install pdo_mysql

COPY root-crontab /var/spool/cron/crontabs/root

EXPOSE 9000
