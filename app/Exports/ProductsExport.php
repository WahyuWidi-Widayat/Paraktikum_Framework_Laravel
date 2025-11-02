<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle; // Impor untuk judul sheet

class ProductsExport implements FromCollection, WithHeadings, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select('id', 'name', 'sku', 'price', 'stock')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama Produk',
            'SKU',
            'Harga',
            'Stok',
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        // UBAH BARIS INI
        // DARI: 'Laporan Stok Bulanan'
        // MENJADI:
        return 'Laporan Stok Bulanan Toko Komuter Amir';
    }
}