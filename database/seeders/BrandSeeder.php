<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'logo' => 'images/brands/marithe.png',
                'name' => 'Marithe',
                'slug' => 'marithe',
                'is_featured' => '1',
                'status' => '1'
            ]
            ]);
    }
}
