# Simple Membership Signup Portal with Laravel 5.4
This membership portal was created using Laravel 5.4

- Author: David Tekwie <tekwie.david@gmail.com>
- Date: 15/03/2017

## Disclaimer
This membership portal was created with the sole intent for public sharing. No part of this code-base is harmful to anyone, nor designed with malicious intent. You are therefore free to copy, contribute to and / or share as you please at your own risk. The original author will not be resposible for any software, system, personal damages or loss of business damages that may occur from choosing to copy this code.
As long as you are having fun with Laravel, enjoy!!

## Installation
- Install `LAMP stack` to run your application locally.
- Install `composer` by following the instructions here: [Download & Install Composer](https://getcomposer.org/download/)
- Use composer to install Laravel 5.4 as per the documentation here: [Laravel 5.4 Installation](https://laravel.com/docs/5.4/installation)
- Run `composer update --no-scripts` to force composer to skip the execution of scripts defined in the composer.json file.
- Run `php artisan key:generate` to generate an authentication key for the application.
- Run `php artisan make:auth` to create the login fascility
- Create the `Post` model by running this code which creates the `controller`, the database `migrations` and the `resource` section: `php artisan make:model Post --controller --migration --resource`
- Go to the migration file and update the schema accordingly.
- Edit the `.env` file in the document root to correctly reflect your database connection details:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=#yourDatabaseName#
DB_USERNAME=#username#
DB_PASSWORD=#password#
```
- Run `php artisan migrate` to carry out the migration and build the tables.
- Run `php artisan serve` to serve up the application.
- Enjoy!

## Portal Features

### Guest users:
- Can sign up
- Can view existing members
  - Can only view limited info of members
- Can register for an admin account (Note: You can place restriction on this functionality as you please)

### Admin / Logged-in Users:
- Can do all the above.
- Can view **All** membership details of all members
- Can *manage members*. They have the rights to:
  - **Edit** member's details
  - **Delete** a member

This simple project was initially created for a church youth group. The expanded / extra functionality(ies) were removed to allow you to have a go at this yourself and tailor it to your liking.

Enjoy!
