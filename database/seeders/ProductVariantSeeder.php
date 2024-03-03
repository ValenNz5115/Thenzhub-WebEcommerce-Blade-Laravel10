<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_variants')->insert([
            [
                'product_id' => '1',
                'name' => 'Classic Hodie',
                'status' => '1'
            ],
            [
                'product_id' => '1',
                'name' => 'Classic Hodie',
                'status' => '1'
            ],
            [
                'product_id' => '1',
                'name' => 'Classic Hodie',
                'status' => '1'
            ],
            ]);

    }
}
