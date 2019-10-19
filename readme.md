## Install
```
git clone git@github.com:dasdo/lara-quick.git
cd lara-quick
composer install
php artisan key:generate
npm install && npm run dev
cp .env.example .env
php artisan migrate
php artisan db:seed
```

## Statar

```
$ composer require laravel/ui --dev
$ php artisan ui vue --auth
$ npm install && npm run dev
$ php artisan migrate
$ php artisan db:seed
```

## code

`php artisan make:seeder UsersTableSeeder` create seeder
`php artisan db:seed` Run seed
`php artisan db:seed --class=UsersTableSeeder` Run specific seed

## template

https://www.creative-tim.com/product/material-dashboard-dark

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
