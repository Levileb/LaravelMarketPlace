<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'riceName' => 'bugas4',
            'riceClasss' => 'Description of Product 1',
            'ricePrice' => 19.99,
            'riceStock' => 400,
            'riceImage' => 'C:\Users\USER\Downloads\download (2).jpg',
        ]);
        Product::create([
            'riceName' => 'bugas3',
            'riceClasss' => 'Description of Product 1',
            'ricePrice' => 19.99,
            'riceStock' => 400,
            'riceImage' => 'C:\Users\USER\Downloads\download (1).jpg',
        ]);
        Product::create([
            'riceName' => 'Bugas2',
            'riceClasss' => 'Description of Product 1',
            'ricePrice' => 19.99,
            'riceStock' => 400,
            'riceImage' => 'C:\Users\USER\Downloads\images (1).jpg',
        ]);
        Product::create([
            'riceName' => 'SBugas1',
            'riceClasss' => 'Description of Product 1',
            'ricePrice' => 19.99,
            'riceStock' => 400,
            'riceImage' => 'C:\Users\USER\Downloads\images (1).jpg',
        ]);
    }
}
