##Simple todo application with admin and users


#P#rerequisites:

Docker 

or
 
 PHP 7.1, MySQL client (xampp), Composer,
 
##installation

```
cd server
```

```$xslt
composer install
```

```$xslt
cp .example.env .env (fix connection to mysql)
```

```$xslt
php artisan key:generate
```

```$xslt
php artisan migrate --seed
```

```$xslt
php artisan serve
```

With Docker:

```$xslt
docker-compose up
```

```$xslt
docker-compose exec php-fpm bash
```

```$xslt
composer install
```

```$xslt
cp .example.env .env
```

```$xslt
php artisan key:generate
```

```$xslt
php artisan migrate --seed
```
##Done
http://localhost/8081