# Kobe Coding Challenge 


## About
An ecommerce store where a user can make an order and see it's status
An admin can manage the order, Change the status of the order and view all users

## Sources
- https://blog.pusher.com/ecommerce-laravel-vue-part-1/
- https://laravel.com/docs/5.8
- https://vuejs.org/v2/guide/routing.html

### Trouble 
I couldn't figure out a method for an Admin to delete a product or edit it. 
I used Laravel instead of Lumen 


### Install
Clone the git repository on your computer

``` git clone https://github.com/rmit-s3660270-shahd-sideek/coding-challenge.git```


```
 cd coding-challenge
 curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
 composer global require laravel/valet
 composer global require "laravel/installer"
 composer install
```


### Setup
-After the installation, in  the `.env` file , please change the path of  DB_DATABASE to your absolute path of database/store_database.sqlite



### Run the application
```
npm install
php artisan key:generate
php artisan passport:install
npm run prod
php artisan serve
```

## Logins
User=
email: sideekshahd@gmail.com
pass: 123456

Admin=
email: admin@devtest.com
pass: secret
