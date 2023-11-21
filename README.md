# LittleLeaf_Backend
Backend BTL môn Các vấn đề hiện đại CNTT

1. Config in  ```.env```
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3307
DB_DATABASE=littleleaf
DB_USERNAME=root
DB_PASSWORD=duyanh
```

2. Install package.json (via `composer`)
```
composer install
```
or
```
composer install --ignore-platform-req=ext-fileinfo
```

3. Generate key for Laravel project
```
php artisan key:generate
```

4. Run following commands to use JWT-Auth lib
```
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
```

5. Create database and fake data
```
php artisan migrate:fresh --seed
```

6. Create symbolic link
```
php artisan storage:link
```

7. Run project
```
php artisan serve
```
