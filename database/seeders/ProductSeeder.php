<?php

// database/seeders/ProductSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan ini di-import

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate(); // Hapus data lama jika ada

        // Gunakan factory untuk membuat 50 produk dummy
        Product::factory(50)->create();
    }
}