#!/bin/sh

# Set proper permissions
chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwX storage bootstrap/cache || true

# Run migrations (optional)
# php artisan migrate --force

# Start PHP-FPM
exec php-fpm
