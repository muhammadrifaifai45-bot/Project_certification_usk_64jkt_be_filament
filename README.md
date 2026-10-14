# Aplikasi Sistem Sertifikasi & Daftar Peserta (Uji Sertifikasi Kompetensi)

Sistem informasi berbasis web ini dirancang untuk mengelola pendaftaran peserta sertifikasi profesi. Aplikasi ini dibangun menggunakan framework **Laravel** dan panel admin **Filament PHP v3** untuk memberikan antarmuka manajemen data yang efisien, aman, dan responsif.

## Fitur Utama

- **Autentikasi & Multi-Role**: Pemisahan hak akses antara akun `Admin` (akses penuh ke Filament panel) dan `User` (pendaftar/peserta).
validation Password Mengandung character tertentu
- **Otomatisasi Registrasi (User Observer)**: Setiap kali user baru melakukan registrasi akun di aplikasi web, sistem akan otomatis membuatkan baris data profil kosong di tabel `daftar_pesertas`.
- **Manajemen Sertifikasi (Filament Panel)**: Admin dapat melihat, mengubah, menambahkan, dan mengelola seluruh data sertifikasi (`Certification List` & `Certification Code`).

- **Validasi Data Ketat**:
  - Kolom **NIK** menggunakan pembatasan otomatis 16 digit angka (`numeric`, `minLength`, `maxLength`).
 

---

## Spesifikasi Teknologi

- **Backend Framework**: Laravel 12.x / 11.x
- **Admin Panel**: Filament PHP v5
- **Database**: MySQL / MariaDB
- **Bahasa Pemrograman**: PHP >= 8.3

---

##  Struktur Basis Data Utama

### 1. Tabel `users`
Menyimpan informasi akun pengguna untuk proses login.
- `id` (Primary Key)
- `name` (String)
- `email` (String, Unique)
- `password` (String)
- `role` (Enum ['admin', 'user'])

### 2. Tabel `daftarpesertas`
Menyimpan informasi detail profil peserta yang terikat dengan user.
- `id` (Primary Key)
- `user_id` (Foreign Key -> `users`, Cascade on Delete)
- `certification_list_id` (Foreign Key -> `certification_lists`, Nullable)
- `nama_peserta` (String)
- `nik` (String, 16 Digit, Unique, Nullable)
- `gender` (Enum: 'pria', 'perempuan', Nullable)
- `alamat` (Text, Nullable)
- `surat_image` (String, Nullable)

---

## Panduan Instalasi & Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Klon Repositori
```bash
git clone https://github.com/muhammadrifaifai45-bot/Project_certification_usk_64jkt_be_filament.git
cd <Project_certification_usk_64jkt_be_filament>
```

### 2. Instalasi Dependensi (Composer & NPM)
```bash
composer install
npm install && npm run dev
```

### 3. Konfigurasi Environment File
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Buka file `.env` dan sesuaikan pengaturan database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_usk_anda
DB_USERNAME=root
DB_PASSWORD=

APP_LOCALE=id
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Jalankan Migrasi Database & Seeder
```bash
php artisan migrate --seed
```

### 6. Bersihkan Cache Sistem
```bash
php artisan optimize:clear
```

### 7. Jalankan Server Lokal
```bash
php artisan serve
```
Aplikasi dapat diakses melalui browser di alamat: `http://127.0.0.1:8000`

---

# Alur Kerja Kode

- **Pendaftaran Otomatis**: Logika pembuat data peserta diatur pada `App\Observers\UserObserver::class` yang memantau *event* `created` dari model `User`.
- **Otorisasi Keamanan**: Kebijakan akses menu (siapa saja yang boleh melihat, mengedit, atau menghapus) dikontrol menggunakan Laravel Policy pada file `App\Policies\DaftarPesertaPolicy.php`.
- **Modul Form**: Aturan form NIK unik dan validasi panjang karakter dikonfigurasi langsung pada form skema di dalam file `App\Filament\Resources\DaftarPesertaResource.php`.

---
*Proyek ini diajukan sebagai syarat pemenuhan tugas Uji Sertifikasi Kompetensi (USK).*
