<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>

# Laravel GraphQL Server :rocket:
 
>  How to Use:

#### Run in the command:
- Step 1: 
```
composer install
```
- Step 2: 
```
copy .env.example .env
```
- Step 3: Generate Artisan key to start
```
php artisan key:generate
```

- Step 4: Run in the command to migrate database:
```
php artisan migrate --seed
```
- Step 5: Pop up message will apppear
> The SQLite database does not exist: C:\Users\rjohn\OneDrive\Desktop\laravel-vue-apollo\database\database.sqlite.

> Would you like to create it? (yes/no) [yes]
```
type 'yes'
```

- Step 6:  After that, you may now start laravel by running in the command
```
php artisan serve
```

``` You can visit the graphql playground in laravel using /graphiql route to make some queries. ```
> All made by John Jimwell Rabino :wink: :v:
