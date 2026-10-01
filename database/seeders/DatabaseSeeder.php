<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat 10 kategori terlebih dahulu, simpan ke dalam variabel
        $categories = Category::factory(10)->create();

        // 2. Buat 60 produk, lalu assign kategori secara acak dari 10 kategori yang sudah dibuat
        Product::factory(60)->create()->each(function ($product) use ($categories) {
            $product->update(['category_id' => $categories->random()->id]);
        });

        // 3. Buat user Admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 4. Buat user biasa untuk testing role
        User::factory()->create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}