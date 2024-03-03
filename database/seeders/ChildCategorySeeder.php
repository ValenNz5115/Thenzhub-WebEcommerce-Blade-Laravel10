<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChildCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('child_categories')->insert([
            [
                'category_id' => '1',
                'sub_category_id' => '1',
                'name' => 'top',
                'slug' => 'top',
                'status' => '1'
            ],
            [
                'category_id' => '1',
                'sub category_id' => '2',
                'name' => 'tshirt',
                'slug' => 'tshirt',
                'status' => '1'
            ],
            [
                'category_id' => '1',
                'sub_category_id' => '3',
                'name' => 'hodie',
                'slug' => 'hodie',
                'status' => '1'
            ]
            ]);
    }
}
