# About This Project 

# Laravel Toastr

Laravel Toastr is a Laravel package that simplifies the integration of Toastr.js, a JavaScript library designed to create responsive and visually appealing notifications. Toastr.js is commonly used to provide feedback to users after specific actions, such as submitting forms or completing AJAX ope  rations.

## Installation

Install the package using Composer:

```bash
composer require yoeunes/toastr
```

Include Toastr.js in your project by adding the following lines to your HTML file, typically located just before the closing </body> tag:

```bash
    <script src="path/to/toastr.min.js"></script>
    <link rel="stylesheet" href="path/to/toastr.min.css">
```

Usage
You can use Toastr.js in your JavaScript code to display notifications. Here are some examples:

// Example of a success notification
```bash
    # fill toastr for notification in controller 
        toastr('Updated Successfully!', 'success');
```





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

Kode yang diberikan adalah bagian dari Blade view dalam Laravel. Mari kita jelaskan baris per baris:

1. `@push('scripts')`: Ini adalah direktif Blade yang digunakan untuk menambahkan konten ke stack bernama 'scripts'. Stacks dapat digunakan untuk menyusun dan menyimpan konten seperti script JavaScript.

2. `{{ $dataTable->scripts(attributes: ['type' => 'module']) }}`: Ini adalah metode dari objek `$dataTable`, yang kemungkinan besar adalah instance dari DataTables. Metode `scripts()` ini digunakan untuk menghasilkan dan menambahkan script JavaScript yang diperlukan oleh DataTables. Pada contoh ini, juga disertakan atribut HTML `type='module'` untuk mendukung modul JavaScript.

3. `<script>`: Ini adalah tag HTML `<script>` yang berisi kode JavaScript. Kode ini akan dijalankan setelah konten dari `$dataTable->scripts` dieksekusi.

4. `$(document).ready(function(){ ... })`: Ini adalah cara yang umum digunakan untuk memastikan bahwa kode JavaScript hanya dijalankan setelah seluruh dokumen HTML telah dimuat.

5. `$('body').on('click', '.change-status', function(){ ... })`: Ini adalah event listener yang menangkap klik pada elemen dengan kelas CSS 'change-status' yang berada di dalam elemen `<body>`. Ini menggunakan konsep "event delegation" di mana event listener tidak langsung diterapkan pada elemen target, tetapi pada elemen yang lebih tinggi dalam struktur dokumen.

6. `let isChecked = $(this).is(':checked');`: Ini mendapatkan nilai boolean apakah elemen yang dipilih (checkbox) sedang dicentang atau tidak.

7. `let id = $(this).data('id');`: Ini mendapatkan nilai data atribut 'id' dari elemen yang dipilih (dalam hal ini, dari elemen checkbox).

8. `$.ajax({ ... })`: Ini adalah penggunaan jQuery untuk membuat request AJAX. Pada contoh ini, request AJAX digunakan untuk mengirim data (status dan id) ke URL yang ditentukan dengan metode PUT.

9. `url: "{{route('admin.category.change-status')}}",`: Ini adalah penggunaan fungsi `route` untuk mendapatkan URL dengan nama rute 'admin.category.change-status'.

10. `toastr.success(data.message)`: Jika request AJAX berhasil, notifikasi sukses menggunakan plugin Toastr.js akan ditampilkan dengan pesan yang dikembalikan dari server.

11. `error: function(xhr, status, error){ ... }`: Jika terjadi kesalahan dalam request AJAX, pesan kesalahan akan dicetak pada konsol browser.

12. `@endpush`: Ini mengakhiri stack 'scripts'. Saat view ini di-render, konten dalam stack 'scripts' akan dimasukkan pada bagian bawah halaman HTML, umumnya sebelum penutup tag `<body>`.

Kode ini memberikan integrasi antara DataTables, JavaScript, dan Laravel untuk mengelola perubahan status pada kategori dengan menggunakan AJAX.


composer require anayarojo/shoppingcart

php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="config"

composer require barryvdh/laravel-debugbar --dev

composer require srmklive/paypal:~3.0



composer require stripe/stripe-php

composer require razorpay/razorpay:2.*


php artisan make:mail Contact


composer require pusher/pusher-php-server

