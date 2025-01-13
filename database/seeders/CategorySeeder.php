<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Coffee'],
            ['name' => 'Tea'],
            ['name' => 'Snacks'],
            ['name' => 'Merchandise'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
