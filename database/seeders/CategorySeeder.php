<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Outerwear',
                'slug' => 'outerwear',
                'icon' => 'fab fa-500px',
                'status' => '1'
            ],
            [
                'name' => 'Dresses',
                'slug' => 'dresses',
                'icon' => 'fab fa-500px ',
                'status' => '1'
            ],
            [
                'name' => 'Sportswear',
                'slug' => 'sportswear',
                'icon' => 'fab fa-500px ',
                'status' => '1'
            ]
            ]);
    }
}
