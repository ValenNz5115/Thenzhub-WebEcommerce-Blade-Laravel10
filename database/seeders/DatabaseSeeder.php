<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\SliderSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\AdminProfileSeeder;
use Database\Seeders\ChildCategorySeeder;
use Database\Seeders\ProductVariantSeeder;
use Database\Seeders\VendorShopProfileSeeder;
use Database\Seeders\ProductVariantItemSeeder;
use Database\Seeders\ProductImageGallerySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(VendorShopProfileSeeder::class);
        $this->call(AdminProfileSeeder::class);

        $this->call(SliderSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(ChildCategorySeeder::class);

        $this->call(BrandSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductImageGallerySeeder::class);
        $this->call(ProductVariantSeeder::class);
        $this->call(ProductVariantItemSeeder::class);

    }
}
