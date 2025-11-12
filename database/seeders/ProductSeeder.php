<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product 1',
            'detail' => 'This is the detail of Sample Product 1.',
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'detail' => 'This is the detail of Sample Product 2.',
        ]);

        Product::create([
            'name' => 'Sample Product 3',
            'detail' => 'This is the detail of Sample Product 3.',
        ]);

        Product::create([
            'name' => 'Sample Product 4',
            'detail' => 'This is the detail of Sample Product 4.',
        ]);

        Product::create([
            'name' => 'Sample Product 5',
            'detail' => 'This is the detail of Sample Product 5.',
        ]);
    }
}
