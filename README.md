# 🍲 Laksa Benteng Carlendra
### Website Kuliner Khas Banten Berstandar Modern
**Ujian Praktik Pemrograman Framework — CodeIgniter 4 & Tailwind CSS CDN**

---

## 👤 Identitas Peserta Ujian
- **Nomor Urut**: 10
- **Nama Siswa**: Lionel Carlendra
- **Provinsi**: Banten
- **Makanan Khas**: Laksa Benteng
- **Warna Utama**: `#0EA5E9` (Sky 500 / Cyan Modern)
- **Warna Aksen**: `#F8FAFC` (Slate 50 / Snow Off-White)
- **Fitur Wajib 1**: Multi-Filter (Kategori Menu & Tingkat Kepedasan)
- **Fitur Wajib 2**: Sorting Interaktif (Populer, Harga Terendah, Harga Tertinggi, Nama A-Z)
- **Nama Restoran**: **Laksa Benteng Carlendra** (diambil dari nama belakang *Carlendra*)
- **Target Form Pengumpulan**: `bit.ly/UjianPFW`

---

## 🚀 Fitur & Keunggulan Aplikasi

### 1. Landing Page Publik Modern & Responsif
- **Hero Section Premium**: Banner hidangan khas Banten dengan aksen warna `#0EA5E9` dan `#F8FAFC`, tipografi modern Google Fonts (*Plus Jakarta Sans* & *Outfit*), serta badge identitas ujian resmi.
- **Sejarah & Filosofi Kuliner**: Kisah otentik Laksa Benteng khas kawasan Pasar Lama Tangerang, Banten, keunikan mie tepung beras segar, santan kelapa sangrai, dan daun kesum.
- **Statistik & Testimonial Pelanggan**: Indikator kepuasan pelanggan, variasi menu, dan jaminan 100% rempah alami nusantara.

### 2. Fitur Interaktif Publik
- **Fitur 1 (Filter Interaktif)**:
  - Filter kategori makanan (`Semua`, `Laksa Original`, `Laksa Spesial`, `Minuman Tradisional`).
  - Filter tingkat kepedasan (`Semua Level`, `Level 0-1 Gurih Lembut`, `Level 2-3 Pedas Sedang`, `Level 4-5 Super Pedas`).
  - Fitur pencarian instan nama & deskripsi hidangan.
- **Fitur 2 (Sorting Interaktif)**:
  - Rekomendasi / Menu Favorit
  - Harga: Termurah ke Termahal
  - Harga: Termahal ke Termurah
  - Nama Hidangan: A - Z
- **Halaman Detail Menu (`/menu/(:id)`)**:
  - Tampilan visual hidangan beresolusi tinggi (AI-generated imagery).
  - Informasi komposisi rempah & tingkat kepedasan.
  - **Kalkulator Pemesanan Interaktif**: Penyesuaian jumlah porsi dengan kalkulasi total harga otomatis secara *real-time*.
  - **Integrasi Pesan via WhatsApp**: Tautan langsung pemesanan ke WhatsApp dengan pesan pra-format otomatis.

### 3. Panel Administrasi & CRUD Menu (Admin Panel)
- **Autentikasi Session**: Proteksi rute `/admin/*` via filter autentikasi CodeIgniter 4 (`AdminAuth.php`).
- **Dashboard Statistik**: Monitoring jumlah menu, jumlah menu favorit, rata-rata harga, dan jumlah kategori.
- **CRUD Lengkap (Minimal 8 Menu - Tersedia 10 Menu Autentik)**:
  - **Create**: Tambah menu baru dengan validasi data dan pilihan gambar hidangan.
  - **Read**: Tabel daftar menu terstruktur dengan status ketersediaan dan badge level pedas.
  - **Update**: Edit rincian harga, kategori, tingkat kepedasan, komposisi, dan status menu.
  - **Delete**: Hapus menu dengan konfirmasi proteksi data.

---

## 📌 4 Tahapan Git Commit (Sesuai Ketentuan Ujian)

| Tahap | Waktu | Pesan Commit | Status |
|---|---|---|---|
| **Tahap 1** | Menit ke-15 | `Setup database & migration Laksa Benteng` | ✅ Selesai |
| **Tahap 2** | Menit ke-30 | `CRUD dasar + tampilan Tailwind Laksa Benteng` | ✅ Selesai |
| **Tahap 3** | Menit ke-45 | `Halaman detail + fitur tambahan + gambar AI Laksa Benteng` | ✅ Selesai |
| **Tahap 4** | Menit ke-60 | `Finalisasi Laksa Benteng` | ✅ Selesai (Final Push) |

---

## 🔑 Kredensial Login Admin
- **URL Login**: `http://localhost:8085/admin/login`
- **Username**: `admin`
- **Password**: `admin123`

---

## 🛠️ Panduan Menjalankan Aplikasi

### 1. Prasyarat Sistem
- PHP >= 8.1 dengan ekstensi `mysqli`, `intl`, `mbstring`.
- MySQL / MariaDB (XAMPP).

### 2. Konfigurasi Database
1. Buat database baru bernama `ujian_framework` di phpMyAdmin / MySQL CLI:
   ```sql
   CREATE DATABASE ujian_framework;
   ```
2. Pastikan file `.env` memiliki konfigurasi database:
   ```ini
   database.default.hostname = localhost
   database.default.database = ujian_framework
   database.default.username = root
   database.default.password = 
   database.default.DBDriver = MySQLi
   database.default.port = 3306
   ```

### 3. Eksekusi Migration & Seeder
Jalankan perintah Spark untuk migrasi struktur tabel dan seeding 10 variasi menu autentik:
```bash
php spark migrate:refresh
php spark db:seed DatabaseSeeder
```

### 4. Menjalankan Server Development
```bash
php spark serve --port 8085
```
Akses aplikasi melalui browser:
- **Publik**: `http://localhost:8085/`
- **Admin**: `http://localhost:8085/admin/login`

---

## 💻 Tech Stack
- **Framework**: CodeIgniter 4 (v4.7.4)
- **Styling**: Tailwind CSS via Official CDN (sesuai ketentuan tanpa npm build)
- **Icons & Font**: Google Fonts (*Plus Jakarta Sans*, *Outfit*), Heroicons
- **Database**: MySQL / MariaDB
- **Version Control**: Git & GitHub Repository
