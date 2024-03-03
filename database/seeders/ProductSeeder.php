<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Classic Hodie',
                'slug' => 'Classic Hodie',
                'thumb_image' => 'images/products/Classic Hodie.jpg',
                'vendor_id' => '1',
                'category_id' => '1',
                'sub_category_id' => '3',
                'child_category_id' => '6',
                'brand_id' => '1',
                'qty' => '1',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'video_link' => 'https://youtu.be/vs-gfy3Pv1c?si=FWxhI8oMHQ_NbP0Q',
                'sku' => '3278946',
                'price' => '120',
                'offer_price' => '110',
                'offer_start_date' => '2024/01/01',
                'offer_end_date' => '2024/01/02',
                'product_type' => '1',
                'status' => '1',
                'is_approved' => '1',
                'seo_title' => 'Marthie',
                'seo_description' => 'marithé + francois girbaud is a brand established by marithé bacheellerie and françois girbaud in france. since it’s launce in 1972, the brand has been known for its innovation in technical processes on fabrics and new silhouettes in cluding stone washed denim, engineered jeans and baggy jeans.the brand focuses on denim and has been presenting rather experimental collections for the past 40 years.we proudly introduce to you the re-interpreted version of marithé + francois girbaud by presenting modernized versions of jeans inspired by the trends in denim during the 1990’s in korea plus other items that are casual and easy to wear.'
            ]
            ]);

    }
}
