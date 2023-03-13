<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'image' => 'dist/img/products/product-samsung-galaxy.jpg',
                'price' => 100
            ],
            [
                'name' => 'LED Amoled Display Curve',
                'description' => 'TCL Brand',
                'image' => 'dist/img/products/product-curve-led.jpg',
                'price' => 300
            ],
            [
                'name' => 'Antique Piece Of Royal',
                'description' => 'Rolex Brand',
                'image' => 'dist/img/products/product-watch.jpg',
                'price' => 150
            ],
            [
                'name' => 'Laptop P780',
                'description' => 'HP Brand',
                'image' => 'dist/img/products/product-hp-laptop.jpg',
                'price' => 500
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
