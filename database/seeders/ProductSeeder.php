<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Espresso',
                'description' => 'A strong and rich coffee shot.',
                'price' => 25000,
                'category_id' => 1, // Coffee
            ],
            [
                'name' => 'Latte',
                'description' => 'A smooth blend of espresso and milk.',
                'price' => 30000,
                'category_id' => 1, // Coffee
            ],
            [
                'name' => 'Green Tea',
                'description' => 'Refreshing and healthy green tea.',
                'price' => 20000,
                'category_id' => 2, // Tea
            ],
            [
                'name' => 'Choco Muffin',
                'description' => 'Delicious chocolate muffin.',
                'price' => 15000,
                'category_id' => 3, // Snacks
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
