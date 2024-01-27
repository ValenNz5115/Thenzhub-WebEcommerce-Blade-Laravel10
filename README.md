composer create-project laravel/laravel example-app

php artisan breeze:install

php artisan migrate
npm install
npm run dev

http://127.0.0.1:8000

# Laravel Toastr

Laravel Toastr is a Laravel package that simplifies the integration of Toastr.js, a JavaScript library designed to create responsive and visually appealing notifications. Toastr.js is commonly used to provide feedback to users after specific actions, such as submitting forms or completing AJAX operations.

## Installation

Install the package using Composer:

```bash
composer require yoeunes/toastr

Include Toastr.js in your project by adding the following lines to your HTML file, typically located just before the closing </body> tag:

<script src="path/to/toastr.min.js"></script>
<link rel="stylesheet" href="path/to/toastr.min.css">

Usage
You can use Toastr.js in your JavaScript code to display notifications. Here are some examples:

// Example of a success notification
toastr.success('Operation successfully completed!');

// Example of an error notification
toastr.error('An error occurred.');

// Example of an information notification
toastr.info('Additional information.');

// Example of a warning notification
toastr.warning('Warning: The process will start shortly.');


mailtrap

$ composer require yajra/laravel-datatables

php artisan datatables:make Users

http://victor-valencia.github.io/bootstrap-iconpicker/

change in composer.json :
"autoload": {
        "files":[
            "App/Helper/helpers.php"
        ],
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },
    "autoload-

composer dump-autoload