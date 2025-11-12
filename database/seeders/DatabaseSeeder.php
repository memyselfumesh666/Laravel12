<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Register the factory 'productFactory' and call it here

        Product::factory()->count(50)->create();

        // Register the seeder 'productSeeder' and call it here

        // $this->call([
        //     ProductSeeder::class,
        // ]);
    }
}
