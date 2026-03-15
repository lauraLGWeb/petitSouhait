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

RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs --no-scripts

RUN php bin/console importmap:install || true

RUN php bin/console asset-map:compile --no-debug || true

RUN mkdir -p var/cache var/log && chmod -R 777 var

COPY docker/nginx.conf /etc/nginx/nginx.conf

EXPOSE 80

CMD ["sh", "-c", "php bin/console doctrine:migrations:migrate --no-interaction 2>/dev/null; php-fpm -D && nginx -g 'daemon off;'"]