## Reset Configs
```
php artisan migrate:fresh --seed && \
php artisan cache:clear && \
php artisan config:clear && \
php artisan route:clear && \
php artisan view:clear
```

### Database
* php artisan migrate:fresh --seed
### Clear Cache
* php artisan cache:clear
* php artisan config:clear
* php artisan config:cache
* php artisan route:clear
* php artisan view:clear
* php artisan event:clear

