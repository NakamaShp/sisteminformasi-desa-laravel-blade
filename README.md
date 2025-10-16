# Sistem Informasi Desa Air Senggeris

Sistem Informasi Desa Air Senggeris merupakan aplikasi berbasis web yang dikembangkan untuk membantu digitalisasi layanan publik di Desa Air Senggeris.
Aplikasi ini mempermudah proses pengaduan masyarakat, pengelolaan berita, pengiriman surat-menyurat, serta pengaturan konten halaman utama secara daring melalui panel admin.

---

Deployment (Process)
[airsenggeris.com](airsenggeris.com)

---

![Tampilan Landing Page](https://github.com/NakamaShp/sisteminformasi-desa-laravel-blade/blob/main/landingpage.jpg)

---

![Tampilan Landing Page](https://github.com/NakamaShp/sisteminformasi-desa-laravel-blade/blob/main/adminpanel.jpg)

## Fitur Utama

* **Pengaduan Online**
  Masyarakat dapat mengirim pengaduan secara langsung melalui website. Setiap pengaduan akan terkirim ke email admin desa dan memiliki status proses seperti *Pending*, *Diproses*, dan *Selesai*.

* **Manajemen Berita**
  Berita dan informasi desa dapat dikelola melalui panel admin dengan tampilan yang mudah digunakan.

* **Kontak dan Surat-Menyurat Digital**
  Formulir kontak terhubung dengan email desa untuk mempermudah komunikasi antara warga dan pihak desa.

* **Landing Page Dinamis**
  Halaman utama website dapat diatur dan diperbarui melalui dashboard admin sesuai kebutuhan informasi desa.

* **Panel Admin Modern**
  Menggunakan **Filament v4** yang memudahkan pengelolaan data dan konten website.

---

## Teknologi yang Digunakan

* **Framework:** Laravel 12 (Blade, Vite)
* **Panel Admin:** Filament v4
* **Tampilan:** Blade Template, SweetAlert
* **Database:** MySQL
* **Pengiriman Email:** SMTP
* **Bahasa Pemrograman:** PHP 8+, JavaScript (Vite)

---

## Panduan Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/NakamaShp/sisteminformasi-desa-laravel-blade.git
cd sisteminformasi-desa-laravel-blade
```

### 2. Instal Dependensi

```bash
composer install
npm install
npm run build
```

### 3. Konfigurasi File `.env`

Salin file contoh environment:

```bash
cp .env.example .env
```

Lalu sesuaikan konfigurasi berikut:

```
APP_NAME="Sistem Informasi Desa Air Senggeris"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webdesa
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=email_desa@example.com
MAIL_PASSWORD=kata_sandi_email
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=email_desa@example.com
MAIL_FROM_NAME="Website Desa Air Senggeris"
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Migrasi dan Seed Database

```bash
php artisan migrate --seed
```

### 6. Jalankan Server

```bash
php artisan serve
npm run dev
```

Akses proyek melalui:
[http://localhost:8000](http://localhost:8000)

---

## Lisensi

Proyek ini dikembangkan untuk kebutuhan internal Desa Air Senggeris.
Seluruh hak cipta dilindungi dan tidak untuk penggunaan komersial tanpa izin.

---

## Pengembang

**Khalifa Alhasan & M. Raffi Ashidiqie**
Pengembang Web & Mahasiswa Sistem Informasi

Instagram : [@aal.psd](https://www.instagram.com/aal.psd/?hl=id)
             [@rafi_f18](https://www.instagram.com/raffi_f18/?hl=id)
