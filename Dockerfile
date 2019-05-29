FROM php:fpm-alpine

# Install extensions
RUN docker-php-ext-install pdo_mysql

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
