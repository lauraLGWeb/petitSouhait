FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    nginx \
    postgresql-dev \
    icu-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_pgsql opcache intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

ENV COMPOSER_AUDIT_ABANDONED=ignore
ENV APP_ENV=prod
ENV APP_SECRET=somesecretkey

RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs --no-scripts

COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 80

CMD ["/entrypoint.sh"]