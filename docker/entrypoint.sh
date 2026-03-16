#!/bin/sh

php bin/console importmap:install --no-interaction || true
php bin/console asset-map:compile --no-debug --no-interaction || true
php bin/console doctrine:schema:create --no-interaction || true

chmod -R 777 /var/www/html/var

php-fpm -D
nginx -g 'daemon off;'
