<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clothes = ProductCategory::create(['name' => 'LapTop', 'cover' => 'clothes.jpg', 'status' => true, 'parent_id' => null]);
        ProductCategory::create(['name' => 'HP', 'cover' => 'clothes.jpg', 'status' => true, 'parent_id' => $clothes->id]);
        ProductCategory::create(['name' => 'Asus', 'cover' => 'clothes.jpg', 'status' => true, 'parent_id' => $clothes->id]);
        ProductCategory::create(['name' => 'Dresses', 'cover' => 'clothes.jpg', 'status' => true, 'parent_id' => $clothes->id]);
        ProductCategory::create(['name' => 'Novelty ', 'cover' => 'clothes.jpg', 'status' => true, 'parent_id' => $clothes->id]);
        ProductCategory::create(['name' => 'Women', 'cover' => 'clothes.jpg', 'status' => true, 'parent_id' => $clothes->id]);
        ProductCategory::create(['name' => 'Men', 'cover' => 'clothes.jpg', 'status' => true, 'parent_id' => $clothes->id]);

        $shoes = ProductCategory::create(['name' => 'Phone', 'cover' => 'shoes.jpg', 'status' => true]);
        ProductCategory::create(['name' => 'Women', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $shoes->id]);
        ProductCategory::create(['name' => 'Men', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $shoes->id]);
        ProductCategory::create(['name' => 'Boy', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $shoes->id]);
        ProductCategory::create(['name' => 'Girls', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $shoes->id]);

        $watches = ProductCategory::create(['name' => 'Watches', 'cover' => 'watches.jpg', 'status' => true]);
        ProductCategory::create(['name' => 'Women', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $watches->id]);
        ProductCategory::create(['name' => 'Men', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $watches->id]);
        ProductCategory::create(['name' => 'Boy', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $watches->id]);
        ProductCategory::create(['name' => 'Girls', 'cover' => 'shoes.jpg', 'status' => true, 'parent_id' => $watches->id]);

        $electronics = ProductCategory::create(['name' => 'Electronics', 'cover' => 'electronics.jpg', 'status' => true]);
        ProductCategory::create(['name' => 'Electronics', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'USB Flash drives', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Headphones', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Portable speakers', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Cell Phone bluetooth headsets', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Keyboards', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);

    }
}
