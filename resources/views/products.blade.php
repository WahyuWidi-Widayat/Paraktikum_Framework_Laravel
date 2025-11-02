<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Stok Bulanan - Toko Komputer Amir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Laporan Stok Bulanan Toko Komputer Amir</h2>

        <div class="mb-3">
            <a href="{{ route('products.export.excel') }}" class="btn btn-success">Ekspor ke Excel</a>
            <a href="{{ route('products.export.pdf') }}" class="btn btn-danger">Ekspor ke PDF</a>
            <button id="btn-export-png" class="btn btn-primary">Ekspor ke PNG</button>
        </div>

        <div id="tabel-produk">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>SKU</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>Rp {{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->stock }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data.</td>
                        </tr>
                   @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

    <script>
        document.getElementById('btn-export-png').addEventListener('click', function() {
            // Ambil elemen yang ingin di-screenshot
            const targetElement = document.getElementById('tabel-produk');

            html2canvas(targetElement).then(canvas => {
                // Buat link download
                const link = document.createElement('a');
                // Nama file PNG yang sudah diubah
                link.download = 'laporan_stok_bulanan_amir.png';
                link.href = canvas.toDataURL('image/png');
                link.click(); // Klik link secara otomatis untuk men-download
            });
        });
    </script>
</body>
</html>