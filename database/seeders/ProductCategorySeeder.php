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
        $laptop = ProductCategory::create(['name' => 'LapTop', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => null]);
        ProductCategory::create(['name' => 'HP', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);
        ProductCategory::create(['name' => 'Asus', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);
        ProductCategory::create(['name' => 'Apple', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);
        ProductCategory::create(['name' => 'Dell ', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);
        ProductCategory::create(['name' => 'Lenovo', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);
        ProductCategory::create(['name' => 'Acer', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);
        ProductCategory::create(['name' => 'MSI', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);
        ProductCategory::create(['name' => 'Razer', 'cover' => 'laptop.jpg', 'status' => true, 'parent_id' => $laptop->id]);

        $phone = ProductCategory::create(['name' => 'Phone', 'cover' => 'phone.jpg', 'status' => true]);
        ProductCategory::create(['name' => 'Apple', 'cover' => 'phone.jpg', 'status' => true, 'parent_id' => $phone->id]);
        ProductCategory::create(['name' => 'Samsung', 'cover' => 'phone.jpg', 'status' => true, 'parent_id' => $phone->id]);
        ProductCategory::create(['name' => 'Huawei', 'cover' => 'phone.jpg', 'status' => true, 'parent_id' => $phone->id]);
        ProductCategory::create(['name' => 'Oppo', 'cover' => 'phone.jpg', 'status' => true, 'parent_id' => $phone->id]);
        ProductCategory::create(['name' => 'Xiaomi', 'cover' => 'phone.jpg', 'status' => true, 'parent_id' => $phone->id]);
        ProductCategory::create(['name' => 'Nokia', 'cover' => 'phone.jpg', 'status' => true, 'parent_id' => $phone->id]);

        $hardware = ProductCategory::create(['name' => 'Hardware', 'cover' => 'phone.jpg', 'status' => true]);
        ProductCategory::create(['name' => 'Motherboards', 'cover' => 'hardware.jpg', 'status' => true, 'parent_id' => $hardware->id]);
        ProductCategory::create(['name' => 'CPU', 'cover' => 'hardware.jpg', 'status' => true, 'parent_id' => $hardware->id]);
        ProductCategory::create(['name' => 'RAM', 'cover' => 'hardware.jpg', 'status' => true, 'parent_id' => $hardware->id]);
        ProductCategory::create(['name' => 'Graphics Cards', 'cover' => 'hardware.jpg', 'status' => true, 'parent_id' => $hardware->id]);
        ProductCategory::create(['name' => 'Monitors', 'cover' => 'hardware.jpg', 'status' => true, 'parent_id' => $hardware->id]);
        ProductCategory::create(['name' => 'DeskTops', 'cover' => 'hardware.jpg', 'status' => true, 'parent_id' => $hardware->id]);


        $electronics = ProductCategory::create(['name' => 'Electronics', 'cover' => 'electronics.jpg', 'status' => true]);
        ProductCategory::create(['name' => 'Electronics', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'USB Flash drives', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Headphones', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Portable speakers', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Cell Phone bluetooth headsets', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);
        ProductCategory::create(['name' => 'Keyboards', 'cover' => 'electronics.jpg', 'status' => true, 'parent_id' => $electronics->id]);

    }
}
