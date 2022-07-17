1. download the portwest-test repository.
Install composer
copy .env.example to .env
configure .env file
create database name:portwest_test in localhost/phpmyadmin
database-name:portwest_test
username:root
php artisan migrate 
php artisan config:cache
php artisan config:clear
php artisan route:cache
php artisan route:clear
composer dumpautoload
php artisan db:seed 
login panel:
username:shofique
or email:mislam629@gmail.com
password:1234567
department: Air way
