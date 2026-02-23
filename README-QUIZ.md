
# README QUIZ - Project `quis5`

## Deskripsi Singkat
Project ini adalah latihan Laravel untuk materi:
- Routing dasar
- Controller
- View Blade
- Parameter URL
- Resource route

Implementasi utama ada di:
- `routes/web.php`
- `app/Http/Controllers/InfoController.php`
- `app/Http/Controllers/ProdukController.php`
- `app/Http/Controllers/BukuController.php`
- `resources/views/info_dosen.blade.php`
- `resources/views/detail_mahasiswa.blade.php`
- `resources/views/perpus_index.blade.php`

## Requirement
- PHP 8.x
- Composer
- Laravel (sesuai project ini)
- Web server lokal (XAMPP/Apache) atau `php artisan serve`

## Cara Menjalankan Project
1. Masuk ke folder project:
```bash
cd C:\xampp\htdocs\quis5
```

2. Install dependency (jika belum):
```bash
composer install
```

3. Siapkan file environment (jika belum ada):
```bash
copy .env.example .env
php artisan key:generate
```

4. Jalankan aplikasi (pilih salah satu):
- Dengan Laravel dev server:
```bash
php artisan serve
```
Lalu akses `http://127.0.0.1:8000`

- Dengan XAMPP (Apache):
Akses `http://localhost/quis5/public`

## Penjelasan Fitur dan Endpoint

### 1) Route Dasar dari `InfoController`
File route: `routes/web.php`

- `GET /halo`  
  Menampilkan teks:  
  `Halo! Ini adalah respon dari InfoController.`

- `GET /kampus`  
  Menampilkan teks:  
  `Saya kuliah di STMIK IKMI Cirebon.`

- `GET /dosen`  
  Menampilkan view `info_dosen` berisi:
  - Nama dosen
  - Mata kuliah
  - Tahun ajaran
  - List mahasiswa (ditampilkan dengan `@foreach`)

- `GET /mahasiswa/{nama}/{nim}`  
  Menampilkan view `detail_mahasiswa` berdasarkan parameter URL `nama` dan `nim`.

### 2) Resource Route `produk`
File route: `routes/web.php` dengan:
```php
Route::resource('produk', ProdukController::class);
```

Contoh endpoint yang sudah diisi:
- `GET /produk` -> daftar produk (`index`)
- `GET /produk/create` -> form tambah (`create`)
- `GET /produk/{id}` -> detail produk (`show`)
- `GET /produk/{id}/edit` -> edit produk (`edit`)

### 3) Resource Route `koleksi` (Buku)
File route: `routes/web.php` dengan:
```php
Route::resource('koleksi', BukuController::class);
```

Implementasi penting di `BukuController`:

- `index(): View`  
  Menyiapkan variabel:
  ```php
  $data_buku = [
      'Pemrograman Web Lanjut dengan Laravel',
      'Belajar Laravel untuk Pemula',
      'Framework Laravel: Panduan Lengkap',
  ];
  ```
  Lalu mengirim ke view:
  ```php
  return view('perpus_index', compact('data_buku'));
  ```

- `show(string $id): string`  
  Menangkap parameter ID dari URL dan menampilkan:
  `Anda sedang melihat detail buku dengan Kode: {id}`

## Hasil Soal yang Dikerjakan

### Soal 2 - Logika dan View
Sudah dikerjakan:
- Data buku disiapkan di `BukuController@index`
- Data dikirim ke `perpus_index.blade.php`
- Data ditampilkan dengan `@foreach`

File terkait:
- `app/Http/Controllers/BukuController.php`
- `resources/views/perpus_index.blade.php`

### Soal 3 - Parameter URL
Sudah dikerjakan:
- Method `show($id)` menangkap parameter URL
- Return teks detail berdasarkan ID
- Bisa diuji dengan membuka:
  - `http://localhost/quis5/public/koleksi/101` (XAMPP)
  - atau `http://127.0.0.1:8000/koleksi/101` (artisan serve)

### Bonus Point
Type hint `View` sudah digunakan pada method yang mengembalikan view, khususnya:
- `BukuController@index(): View`
- `InfoController@dosen(): View`
- `InfoController@detailMahasiswa(...): View`

## Ringkasan Uji Cepat
Lakukan pengecekan manual di browser:
1. `/halo`
2. `/kampus`
3. `/dosen`
4. `/mahasiswa/Andi/12345`
5. `/produk`
6. `/produk/10`
7. `/koleksi`
8. `/koleksi/101`

Jika semua URL di atas merespons sesuai deskripsi, maka tugas sudah berjalan dengan benar.
