# Ujian Pemrograman Framework - CodeIgniter 4

Repositori ini telah dikonfigurasi dan dipersiapkan sesuai dengan seluruh ketentuan pada panduan persiapan ujian:

---

## 📋 Ringkasan Persiapan

### 1. CodeIgniter 4
- Project CodeIgniter 4 telah terinstal dan terverifikasi.
- Cara menjalankan server lokal:
  ```bash
  php spark serve
  ```
  Akses di browser melalui: `http://localhost:8080`

### 2. Database MySQL
- Server MySQL telah berjalan di XAMPP (`3306`).
- Telah disiapkan database kosong bernama: `ujian_framework`
- Konfigurasi koneksi telah disetting pada file `.env`:
  ```ini
  CI_ENVIRONMENT = development
  app.baseURL = 'http://localhost:8080/'

  database.default.hostname = localhost
  database.default.database = ujian_framework
  database.default.username = root
  database.default.password = 
  database.default.DBDriver = MySQLi
  database.default.port = 3306
  ```
- *Catatan Ujian*: Seluruh tabel wajib dibuat menggunakan migration saat ujian berlangsung:
  ```bash
  php spark make:migration CreateNamaTabel
  php spark migrate
  ```

### 3. Ketentuan Tailwind CSS
- Menggunakan CDN resmi Tailwind CSS:
  ```html
  <script src="https://cdn.tailwindcss.com"></script>
  ```
- CDN telah dipasang di file layout utama: `app/Views/layouts/main.php`.
- Tidak memerlukan instalasi Node.js atau npm.

### 4. Ketentuan Git & GitHub
- Repository telah dihubungkan ke GitHub: `https://github.com/gaminghubindo/Ujian-Framework.git`
- Ketentuan saat ujian: **Wajib menghasilkan tepat 4 commit** sesuai tahapan pengerjaan ujian.
- Alur commit dan push:
  ```bash
  git add .
  git commit -m "Pesan commit sesuai tahap"
  git push origin main
  ```
