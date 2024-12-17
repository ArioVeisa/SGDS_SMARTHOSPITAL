# SDGs Kesehatan Web Project

## Deskripsi Proyek

Web ini dikembangkan sebagai platform untuk mendukung pencapaian **Sustainable Development Goals (SDGs) - Tujuan 3: Kesehatan dan Kesejahteraan**. Fokus utama adalah menampilkan data indikator kesehatan, edukasi masyarakat, dan monitoring capaian target SDGs berbasis teknologi web menggunakan **Laravel Framework**.

## Fitur Utama

1. **Dashboard Indikator Kesehatan**

    - Visualisasi progres capaian SDGs menggunakan grafik dan tabel.
    - Filter data berdasarkan wilayah dan periode waktu.

2. **Manajemen Data Kesehatan**

    - Input, validasi, dan manajemen data oleh kontributor.
    - Integrasi API dari sumber eksternal (WHO, BPS).

3. **Artikel dan Edukasi Kesehatan**

    - Penyajian artikel dan informasi edukasi tentang kesehatan.
    - Fitur pencarian dan kategori topik.

4. **Laporan dan Monitoring**

    - Generate laporan dalam format PDF/Excel.
    - Perbandingan data antar periode atau wilayah.

5. **Manajemen Pengguna**

    - Role-based access control (RBAC): Admin, Kontributor, Pengguna Umum.
    - Autentikasi pengguna menggunakan Laravel Breeze/Jetstream.

6. **Forum Kolaborasi**
    - Ruang diskusi untuk stakeholder dan tenaga kesehatan.
    - Upload file dan komentar interaktif.

## Teknologi yang Digunakan

### Backend:

-   **Laravel 10/11** - Framework utama.
-   **Composer** - Dependency management.
-   **Laravel Sanctum/Passport** - API Authentication.

### Frontend:

-   **Blade Template** - Template engine Laravel.
-   **Tailwind CSS** / **Bootstrap** - Styling UI.
-   **Chart.js** / **ApexCharts** - Visualisasi data kesehatan.

### Database:

-   **MySQL** / **PostgreSQL** - Database utama.
-   **Eloquent ORM** - Query builder.

### File Handling:

-   **Intervention Image** - Manipulasi gambar.
-   **Laravel Storage** - Upload file.

### Lainnya:

-   **Laravel DomPDF** - Generate laporan PDF.
-   **Spatie Laravel Permission** - Role-based access control.
-   **Guzzle HTTP** - Integrasi API eksternal.

## Instalasi Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek secara lokal:

### 1. Clone Repository

```bash
git clone <repository-url>
cd <nama-folder-proyek>
```

### 2. Install Dependency

```bash
composer install
npm install
```

### 3. Konfigurasi Environment

Buat file `.env` dari template:

```bash
cp .env.example .env
```

Atur konfigurasi database, mail, dan storage di file `.env`.

### 4. Generate Key dan Migration

```bash
php artisan key:generate
php artisan migrate --seed
```

### 5. Run Server

Jalankan server lokal:

```bash
php artisan serve
```

Akses proyek melalui [http://localhost:8000](http://localhost:8000).

### 6. Build Frontend Assets

Jika menggunakan Tailwind atau JS:

```bash
npm run dev
```

## Deployment

Untuk deployment ke production:

1. Konfigurasi file `.env` di server.
2. Run perintah berikut:
    ```bash
    composer install --optimize-autoloader --no-dev
    npm run build
    php artisan config:cache
    php artisan route:cache
    php artisan migrate --force
    ```

## Dokumentasi API

Endpoint API untuk manajemen data kesehatan menggunakan format **RESTful**.

### Contoh Endpoint:

-   **GET** `/api/indikator` - Menampilkan semua data indikator kesehatan.
-   **POST** `/api/indikator` - Menambahkan data indikator (Role: Kontributor/Admin).
-   **PUT** `/api/indikator/{id}` - Update data indikator.
-   **DELETE** `/api/indikator/{id}` - Hapus data indikator.

Untuk autentikasi API gunakan token melalui Laravel Sanctum/Passport.

## Kontribusi

Jika ingin berkontribusi:

1. Fork repository ini.
2. Buat branch fitur: `git checkout -b feature-nama-fitur`.
3. Commit perubahan: `git commit -m "Deskripsi perubahan"`.
4. Push ke branch Anda: `git push origin feature-nama-fitur`.
5. Ajukan Pull Request.

## License

Proyek ini menggunakan lisensi **MIT License**.

---

**Dibuat oleh**: FUTURES TEAM
**Tujuan Proyek**: Mendukung pencapaian SDGs 3 - Kesehatan yang Baik dan Kesejahteraan.
yey ini vivi
