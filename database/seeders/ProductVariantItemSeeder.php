<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductVariantItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_variant_items')->insert([
            [
                'product_variant_id' => '1',
                'name' => 'Classic Hodie',
                'price' => '100',
                'is_default' => '1',
                'status' => '1'
            ],
            [
                'product_variant_id' => '1',
                'name' => 'Classic Hodie',
                'price' => '100',
                'is_default' => '1',
                'status' => '1'
            ],
            [
                'product_variant_id' => '1',
                'name' => 'Classic Hodie',
                'price' => '100',
                'is_default' => '1',
                'status' => '1'
            ]
            ]);

    }
}
