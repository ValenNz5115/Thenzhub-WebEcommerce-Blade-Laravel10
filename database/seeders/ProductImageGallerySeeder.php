<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductImageGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_image_galleries')->insert([
            [
                'image' => 'images/products/productsImage/Classic Hodie.jpg',
                'product_id' => '1',
            ],
            [
                'image' => 'images/products/productsImage/Classic Hodie.jpg',
                'product_id' => '1',
            ],
            [
                'image' => 'images/products/productsImage/Classic Hodie.jpg',
                'product_id' => '1',
            ]
            ]);

    }
}
