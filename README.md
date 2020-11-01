## About TrainCRUD
TrainCRUD is a web application built by Joshua Stocks (u1757754) for Assignment 1 of the module Advanced Web Programming (CHT2520).

## Set up
To set up and run TrainCRUD do as follows:
- Clone this repo using the following command: `git clone git@github.com:advanced-web/crud-application-J-Stocks.git`. Or download the files from this repo as a .zip and extract them.
- Install the project dependencies using [composer](https://getcomposer.org/): `composer install`
- Create the .env file: `cp .env.example .env`
- Set up a database, [MariaDB](https://mariadb.org/) via [XAMPP](https://www.apachefriends.org/index.html) is recommended.
- Add the connection details for the database to the .env file, all the properties prefixed with "DB_" are required.
- Seed the database: `php artisan migrate:fresh --seed`
- Install and build the [npm](https://www.npmjs.com/get-npm) packages: `npm install && npm run dev`
- Generate an App Key: `php artisan key:generate`

## Tools
This app was built using the following tools: 
- [Laravel 8](https://laravel.com/).
- [Tailwind CSS](https://tailwindcss.com/) via the associated [Laravel Frontend Preset](https://github.com/laravel-frontend-presets/tailwindcss).
