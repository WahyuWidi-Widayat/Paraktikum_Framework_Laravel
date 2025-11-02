<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            // INI YANG KITA UBAH
            'name' => $this->faker->words(3, true), 
            
            // Baris lain biarkan sama
            'sku' => $this->faker->unique()->ean8, 
            'price' => $this->faker->randomFloat(2, 50, 3000), 
            'stock' => $this->faker->numberBetween(0, 200),
        ];
    }
}