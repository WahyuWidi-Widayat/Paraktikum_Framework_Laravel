<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ringkasan Laravel 12 (2025)</title>
  <style>
    :root { --bg:#0f172a; --card:#111827; --accent:#22d3ee; --txt:#e5e7eb; --muted:#9ca3af; }
    *{box-sizing:border-box}
    body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Helvetica,Arial,sans-serif;background:linear-gradient(180deg,#0b1022,#0f172a 40%,#0b1022);color:var(--txt);line-height:1.6}
    .wrap{max-width:960px;margin:40px auto;padding:0 20px}
    header{display:flex;align-items:center;gap:14px;margin-bottom:28px}
    .badge{font-size:12px;background:rgba(34,211,238,.15);color:#67e8f9;padding:4px 10px;border:1px solid rgba(34,211,238,.35);border-radius:999px}
    h1{font-size:34px;line-height:1.2;margin:0}
    .card{background:rgba(17,24,39,.6);border:1px solid rgba(255,255,255,.08);backdrop-filter:blur(6px);padding:22px;border-radius:16px;margin:18px 0}
    h2{font-size:22px;margin:0 0 10px}
    h3{font-size:18px;margin:16px 0 8px}
    code,kbd{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.1);padding:2px 6px;border-radius:8px}
    pre{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);padding:14px;border-radius:12px;overflow:auto}
    ul{margin:10px 0 0 20px}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:14px}
    .muted{color:var(--muted)}
    a{color:var(--accent);text-decoration:none}
    a:hover{text-decoration:underline}
    footer{margin:28px 0;color:var(--muted);font-size:14px}
  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <span class="badge">Laravel 12 • Rilis: 24 Feb 2025</span>
      <h1>Ringkasan & Panduan Singkat Laravel 12</h1>
    </header>

    <div class="card">
      <h2>Gambaran Umum</h2>
      <p>Laravel 12 adalah rilis besar tahunan yang berfokus pada stabilitas &amp; pemeliharaan. Intinya memperbarui <em>upstream dependencies</em> dan menghadirkan <strong>starter kit</strong> baru untuk React, Vue, dan Livewire (termasuk opsi autentikasi WorkOS dengan SSO, social login, dan passkeys). Perubahan yang bersifat <em>breaking</em> dibuat serendah mungkin agar proses upgrade mulus.</p>
    </div>

    <div class="grid">
      <div class="card">
        <h2>Persyaratan Sistem</h2>
        <ul>
          <li><strong>PHP</strong> 8.2 atau lebih tinggi (8.2 / 8.3 / 8.4 didukung).</li>
          <li><strong>Composer</strong> terbaru.</li>
          <li>Ekstensi PHP umum (OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath).</li>
        </ul>
        <p class="muted">Catatan: Pastikan versi Node.js &amp; NPM/Yarn/Pnpm sesuai kebutuhan frontend Anda.</p>
      </div>

      <div class="card">
        <h2>Siklus Dukungan</h2>
        <ul>
          <li>Perbaikan bug hingga <strong>13 Agustus 2026</strong>.</li>
          <li>Perbaikan keamanan hingga <strong>4 Februari 2027</strong>.</li>
        </ul>
        <p class="muted">Ikuti kebijakan rilis tahunan Laravel untuk perencanaan upgrade jangka panjang.</p>
      </div>
    </div>

    <div class="card">
      <h2>Perubahan Penting saat Upgrade</h2>
      <ul>
        <li><strong>Carbon 3</strong> wajib (dukungan Carbon 2 dihapus).</li>
        <li>Pembaruan dev dependencies yang umum: <code>phpunit/phpunit:^11</code>, <code>pestphp/pest:^3</code>.</li>
        <li>Naikkan versi framework ke <code>laravel/framework:^12.0</code>.</li>
      </ul>
      <h3>Langkah Upgrade Singkat</h3>
      <pre><code># 1) Perbarui PHP ke >= 8.2
# 2) Perbarui composer.json
composer require laravel/framework:^12.0 --update-with-all-dependencies

# (Opsional) Jika pakai Pest atau PHPUnit
composer require --dev pestphp/pest:^3 phpunit/phpunit:^11

# 3) Pastikan Carbon v3
composer require nesbot/carbon:^3

# 4) Jalankan migrasi & uji
php artisan migrate --pretend
php artisan test</code></pre>
      <p class="muted">Selalu baca panduan upgrade resmi untuk perubahan kecil lain pada paket ekosistem.</p>
    </div>

    <div class="card">
      <h2>Starter Kit Baru</h2>
      <ul>
        <li><strong>React, Vue, Livewire</strong> starter kits yang disegarkan.</li>
        <li>Varian <strong>WorkOS AuthKit</strong> (opsional) dengan SSO, social auth, dan <em>passkeys</em>.</li>
      </ul>
      <h3>Contoh Memulai Proyek</h3>
      <pre><code># Instalasi via Composer (butuh PHP & Composer terpasang)
composer create-project laravel/laravel example-app "^12.0"
cd example-app

# Pasang starter kit (contoh: React)
php artisan install:react

# Jalankan server pengembangan
php artisan serve</code></pre>
    </div>

    <div class="card">
      <h2>Kenapa Upgrade ke 12?</h2>
      <ul>
        <li>Kompatibilitas <em>stack</em> terbaru (PHP 8.2–8.4) &amp; dependency yang diperbarui.</li>
        <li>Upgrade minim hambatan karena fokus pemeliharaan.</li>
        <li>Pengalaman pengembangan lebih halus dengan starter kits modern.</li>
      </ul>
      <p class="muted">Jika aplikasi Anda sudah di Laravel 11 dan memenuhi syarat PHP, upgrade biasanya berjalan lancar.</p>
    </div>

    <footer>
      <p>Dokumen ini ringkas dan tidak menggantikan dokumentasi resmi. Selalu rujuk dokumentasi Laravel 12 untuk detail lengkap.</p>
    </footer>
  </div>
</body>
</html>
