# Run Application
1. Setup Environment
2. Turn On Herd (runs the website)
3. Run ```npm run dev``` (runs the css)

# Setup Your Environment
## What you need
### Software
* Leravel Herd [(desktop Software)](https://herd.laravel.com/)
* composer - (will come w/ herd)
* npm - (will come w/ herd )
* npm - vite

### VS Code Plugins
* PHP Intelephense
* Laravel Blade Snippets
* SQLite Viewer
* Tailwind CSS IntelliSence
* PostCSS Language Support
* Material Icon theme
* Prettier 

### Herd
1. Open Herd Dashbord
2. Open Sites
3. Add Site
4. Link Existing Project
5. Link to woptum folder
6. PHP 8.3
7. HTTPS checkmark
8. reboot Computer

## Errors You May incounter
### 

### No Directory
```Warning: require(../vendor/autoload.php): Failed to open stream: No such file or directory in ...public\index.php on line 13```
* This error means not all packages are installed
* In terminal ```composer install```

### ``` Error 500```
* You may be missing .env file not the same as .env.example
* Copy an past .env.example into .env file

### ``` No application encryption key has been specified. ```
* In Terminal Run: ```php artisan key:generate```

### ``` Database file at path missing ```
* Create database file in ```database/database.sqlite```
* We are going back to our .env file
* Under ```DB_CONNECTION=sqlite``` add line ```DB_DATABASE=/absolute/path/to/database.sqlite```
* In Terminal ```php artisan config:clear```
* In Terminal ```chmod 664 database/database.sqlite``` (r/w database file)
* In Terminal ```php artisan migrate```

### ```Vite manifest not found```
* In Terminal ```npm install vite```
* In terminal run `npm run dev`


#### Populate Database
Option 1:
* run `php artisan migrate:reset`
* run `php artisan migrate --seed`
Option 2:
* run `php artisan tinker` <- like  shell for the database
* run `use App\Models\Ninja`
* run `Ninja::factory()->count(50)->create()` <- Will make 50 user accounts

