# The Nz Hub E-commerce

Proyek ini adalah contoh aplikasi e-commerce menggunakan framework Laravel, yang bertujuan untuk menyediakan platform belanja online yang responsif dan mudah digunakan. Dengan fokus pada produk-produk dari Selandia Baru, The Nz Hub E-commerce memberikan pengalaman berbelanja yang memikat dengan berbagai fitur menarik.

## Fitur Utama

- **Katalog Produk**: Tampilkan berbagai produk dari Selandia Baru dengan detail produk, gambar, dan informasi terkait.
- **Keranjang Belanja**: Pengguna dapat menambahkan produk ke keranjang belanja, melihat ringkasan pesanan, dan melakukan check-out dengan mudah.
- **Opsi Pembayaran**: Dukung berbagai opsi pembayaran, termasuk kartu kredit, transfer bank, dan opsi pembayaran digital.
- **Pelacakan Pesanan**: Pengguna dapat melacak status pesanan mereka dan menerima pembaruan secara real-time.
- **Manajemen Produk**: Bagi pemilik toko, ada panel admin untuk mengelola produk, inventaris, dan melihat statistik penjualan.

## Prasyarat

Sebelum memulai, pastikan Anda telah menginstal [Composer](https://getcomposer.org/download/) dan [PHP](https://www.php.net/manual/en/install.php) pada sistem Anda.

## Langkah-langkah Instalasi

1. **Clone Repository:**

    ```bash
    git clone https://github.com/your-username/nama-proyek.git
    ```

2. **Masuk ke Direktori Proyek:**

    ```bash
    cd nama-proyek
    ```

3. **Install Dependensi menggunakan Composer:**

    ```bash
    composer install
    ```

4. **Salin Berkas Env dan Konfigurasikan:**

    ```bash
    cp .env.example .env
    ```

    Buka `.env` dan sesuaikan pengaturan database dan konfigurasi lainnya sesuai kebutuhan.

5. **Generate Kunci Aplikasi:**

    ```bash
    php artisan key:generate
    ```

6. **Jalankan Migrasi Database:**

    ```bash
    php artisan migrate
    ```

7. **Jalankan Server Pembangunan:**

    ```bash
    php artisan serve
    ```

    Aplikasi akan dapat diakses di `http://localhost:8000`.

## Penggunaan

Sesuaikan aplikasi ini sesuai kebutuhan proyek Anda. Tambahkan rute, kontroler, model, dan tampilan sesuai kebutuhan.

## Kontribusi

Jika Anda menemui masalah atau memiliki saran perbaikan, harap buka masalah atau ajukan permintaan tarik.

Selamat mengoding!


# Laravel Toastr

Laravel Toastr is a Laravel package that simplifies the integration of Toastr.js, a JavaScript library designed to create responsive and visually appealing notifications. Toastr.js is commonly used to provide feedback to users after specific actions, such as submitting forms or completing AJAX operations.

## Installation

Install the package using Composer:

```bash
composer require yoeunes/toastr

```

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