# Fist Mile ERP System (Laravel+Vue Crud Starter)

[![Build Status](https://dev.azure.com/anowarhossain/laravel-vue-crud-starter/_apis/build/status/AnowarCST.laravel-vue-crud-starter?branchName=master)](https://dev.azure.com/anowarhossain/laravel-vue-crud-starter/_build/latest?definitionId=6&branchName=master)
<img src="https://imgur.com/hfvEmbm.png" alt="Company Logo" width="84px" height="84px">

## About Repository

A very simple Laravel 8 + Vue 2 + AdminLTE 3 based Curd Starter template for SPA Application.

<p align="center">
<img src="https://imgur.com/iziSh2w.jpg">
<img src="https://imgur.com/aimNt19.jpg">
<img src="https://imgur.com/2D5onIP.jpg">
<img src="https://imgur.com/VZRQkrn.jpg">
<img src="https://imgur.com/Kd70r5P.jpg">
<img src="https://imgur.com/Q4ZxS1N.png">
<img src="https://imgur.com/TOGJEdX.png">
<img src="https://imgur.com/FM43YAY.png">
</p>

## Tech Specification

-   Laravel 8
-   Vue 2 + VueRouter + vue-progressbar + sweetalert2 + laravel-vue-pagination
-   Laravel Passport
-   Admin LTE 3 + Bootstrap 4 + Font Awesome 5
-   PHPUnit Test Case/Test Coverage

## Features

-   Modal based Create+Edit, List with Pagination, Delete with Sweetalert
-   Login, Register, Forget+Reset Password as default auth
-   Profile, Update Profile, Change Password, Avatar
-   Product Management
-   User Management
-   Settings: Categories, Tags
-   Frontend and Backend User ACL with Gate Policy (type: admin/user)
-   Simple Static Dashboard
-   Developer Options for OAuth Clients and Personal Access Token
-   Build with Docker

## Installation

-   `git clone https://github.com/AnowarCST/laravel-vue-crud-starter.git`
-   `cd laravel-vue-crud-starter/`
-   `composer install --ignore-platform-reqs`
-   `cp .env.example .env`
-   Update `.env` and set your database credentials
-   `php artisan key:generate`
-   `php artisan migrate`
-   `php artisan db:seed`
-   `php artisan passport:install`
-   `npm install`
-   `npm run dev`
-   `php artisan serve`

## Install with Docker

-   `docker-compose up -d`
-   `docker exec -it vue-starter /bin/bash`
-   `composer install --ignore-platform-reqs`
-   `cp .env.example .env`
-   `php artisan key:generate`
-   `php artisan migrate`
-   `php artisan db:seed`
-   `php artisan passport:install`
-   Application http://localhost:8008/
-   Adminer for Database http://localhost:8080/
-   DBhost: yourIP:3307, user: root, Password: 123456

## Unit Test

#### run PHPUnit

```bash
# run PHPUnit all test cases
vendor/bin/phpunit
# or Feature test only
vendor/bin/phpunit --testsuite Feature
```

#### Code Coverage Report

```bash
# reports is a directory name
vendor/bin/phpunit --coverage-html reports/
```

A `reports` directory has been created for code coverage report. Open the dashboard.html.

## Credit

This repository is motivated by [Hujjat/laravStart](https://github.com/Hujjat/laravStart) and his awesome video tutorial in [Youtube](https://www.youtube.com/playlist?list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE).

## License

[MIT license](https://opensource.org/licenses/MIT).
