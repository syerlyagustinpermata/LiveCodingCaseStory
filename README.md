# Aplikasi Manajemen Inventaris

Aplikasi web manajemen inventaris toko perlengkapan komputer yang dikembangkan menggunakan Laravel dan MySQL/MariaDB.

## Fitur

- Login dan logout.
- Perlindungan halaman menggunakan middleware authentication.
- CRUD kategori.
- CRUD barang.
- Relasi one-to-many antara kategori dan barang.
- Validasi input nama, harga, stok, dan kategori.
- Seeder akun pengguna, tiga kategori, dan lima barang.

## Teknologi

- PHP
- Laravel
- MySQL/MariaDB
- Blade
- Composer

## Persyaratan

Pastikan PHP yang kompatibel dengan versi Laravel proyek, Composer, dan MySQL/MariaDB sudah terpasang.

## Instalasi

1. Clone repository:

   ```bash
   git clone https://github.com/USERNAME/inventaris-uts.git
   cd inventaris-uts
   ```

2. Instal dependensi:

   ```bash
   composer install
   ```

3. Salin `.env.example` menjadi `.env`, kemudian sesuaikan konfigurasi database.

4. Buat database bernama `inventaris_uts` pada MySQL/MariaDB.

5. Buat application key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan migration dan seeder pada database pengembangan yang sesuai:

   ```bash
   php artisan migrate --seed
   ```

7. Jalankan aplikasi:

   ```bash
   php artisan serve
   ```

8. Buka alamat lokal yang ditampilkan oleh Laravel.

## Akun Pengujian Lokal

Email: `admin@inventaris.test`

Password: `Admin12345!`

Akun tersebut dibuat oleh seeder untuk pengujian lokal. Jangan menggunakan kredensial ini sebagai akun produksi.

## Struktur Database

- `categories`: menyimpan nama kategori.
- `items`: menyimpan barang, harga, stok, dan foreign key `category_id`.
- `users`: menyimpan akun pengguna untuk authentication.

Relasi kategori dan barang menggunakan Eloquent `hasMany()` dan `belongsTo()`.

## Catatan Keamanan

- Jangan mengunggah file `.env`.
- Jangan menyimpan password pengguna dalam bentuk teks biasa.
- Gunakan akun dan konfigurasi yang aman untuk lingkungan produksi.