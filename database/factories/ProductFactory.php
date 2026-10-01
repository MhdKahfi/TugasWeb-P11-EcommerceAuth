<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Membuat nama produk acak yang unik (3 kata)
        $name = $this->faker->unique()->words(3, true);

        return [
            // Otomatis membuat kategori baru jika belum ada, atau gunakan yang ada
            'category_id' => Category::factory(),
            'name' => ucwords($name),
            'slug' => Str::slug($name) . '-' . $this->faker->unique()->numberBetween(1, 99999),
            'description' => $this->faker->paragraphs(2, true),
            'price' => $this->faker->numberBetween(10000, 5000000), // Harga antara 10rb - 5jt
            'stock' => $this->faker->numberBetween(0, 100),
            'image' => 'https://picsum.photos/seed/' . Str::random(10) . '/400/400',
        ];
    }
}