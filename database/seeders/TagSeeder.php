<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'lapTop hp omen', 'status' => true]);
        Tag::create(['name' => 'lapTop hp pavilion', 'status' => true]);
        Tag::create(['name' => ' lapTop msi raider', 'status' => true]);
        Tag::create(['name' => 'lapTop msi vector ', 'status' => true]);
        Tag::create(['name' => 'NVIDIA GPU', 'status' => true]);
        Tag::create(['name' => 'Controllers', 'status' => true]);
        Tag::create(['name' => 'Mice', 'status' => true]);
        Tag::create(['name' => 'Audio', 'status' => true]);

    }
}
