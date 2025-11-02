<?php

namespace App\Models;

// 1. PASTIKAN ANDA MENG-IMPORT 'HasFactory'
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 2. TAMBAHKAN 'use HasFactory;' DI SINI
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Kita tambahkan ini agar seeder-nya bisa mengisi data
    protected $guarded = [];
}