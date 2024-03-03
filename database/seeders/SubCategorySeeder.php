<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            [
                'category_id' => '1',
                'name' => 'coats',
                'slug' => 'coats',
                'status' => '1'
            ],
            [
                'category_id' => '1',
                'name' => 'suits',
                'slug' => 'suits',
                'status' => '1'
            ],
            [
                'category_id' => '1',
                'name' => 'jackets',
                'slug' => 'jackets',
                'status' => '1'
            ]
            ]);
    }
}
