<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Laptops']);
        Category::create(['name' => 'Accessories']);
        Category::create(['name' => 'Software']);
    }
}
