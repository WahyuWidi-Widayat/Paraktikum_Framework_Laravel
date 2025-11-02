<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

// Impor untuk Excel
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

// Impor untuk PDF
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    /**
     * Menampilkan halaman daftar produk
     * * PASTIKAN METHOD INI ADA DAN TULISANNYA BENAR
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    /**
     * Logika untuk ekspor Excel
     */
    public function exportExcel()
    {
        // Nama file ekspor Excel yang sudah diubah
        return Excel::download(new ProductsExport, 'laporan_stok_bulanan_amir.xlsx');
    }

    /**
     * Logika untuk ekspor PDF
     */
    public function exportPdf()
    {
        $products = Product::all();

        // Data ini akan dikirim ke view PDF
        $data = [
            'date' => date('d-m-Y'),
            'products' => $products,
            'title' => 'Laporan Stok Bulanan Toko Komuter Amir' // Kirim judul
        ];

        // Load view 'products_pdf.blade.php' dan data
        $pdf = Pdf::loadView('products_pdf', $data);

        // Download file PDF dengan nama yang sudah diubah
        return $pdf->download('laporan_stok_bulanan_amir.pdf');
    }
}