# BEM FIKTI Gunadarma

Sistem Informasi untuk BEM FIKTI Universitas Gunadarma, dibangun menggunakan framework [Laravel](https://laravel.com/).

## Persyaratan Sistem

Sebelum menjalankan proyek ini, pastikan Anda telah menginstal:
- [Docker](https://www.docker.com/products/docker-desktop/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Panduan Instalasi dan Menjalankan Proyek

Proyek ini telah dikonfigurasi menggunakan Docker Compose agar mudah dijalankan tanpa perlu menginstal PHP atau MySQL secara manual di komputer Anda.

1. **Clone repositori**
   ```bash
   git clone https://github.com/Imamabdulfatah/bemfiktigunadarma.git
   cd bemfiktigunadarma
   ```

2. **Jalankan Docker Compose**
   Gunakan perintah berikut untuk menjalankan container aplikasi dan database:
   ```bash
   docker-compose up -d
   ```
   *Catatan: Saat pertama kali dijalankan, proses ini akan memakan waktu beberapa saat karena Docker akan mengunduh image PHP dan MySQL, menginstal dependensi PHP via Composer, generate APP_KEY, dan mengimpor struktur database.*

3. **Akses Aplikasi**
   Setelah proses selesai dan container berjalan stabil, aplikasi dapat diakses melalui browser pada alamat:
   [http://localhost:8000](http://localhost:8000)

## Konfigurasi Environment & Keamanan Token

File konfigurasi `.env` telah disiapkan untuk menyesuaikan kredensial koneksi database Docker. **Key, token, dan kredensial sensitif diamankan di dalam file `.env`**. File `.env` ini secara otomatis diabaikan oleh Git (melalui konfigurasi `.gitignore`), sehingga kunci rahasia tidak akan bocor ke public repository.

Jika Anda perlu mengubah kredensial atau menambahkan token API baru, Anda dapat menambahkan dan mengeditnya langsung di file `.env`.

## Database

Proyek ini terintegrasi dengan file `laravel_final.sql` yang berisi skema dan data default database. File ini akan otomatis diimpor saat container MySQL pertama kali dijalankan. 
Kredensial database di dalam container adalah:
- **Host**: `db`
- **Port**: `3306`
- **Database**: `laravel`
- **Username**: `laraveluser`
- **Password**: `laravelpassword`

## Perintah Bermanfaat

- **Menghentikan aplikasi:**
  ```bash
  docker-compose down
  ```
- **Melihat log aplikasi:**
  ```bash
  docker-compose logs -f app
  ```
- **Masuk ke dalam container aplikasi (untuk menjalankan perintah artisan dll):**
  ```bash
  docker-compose exec app bash
  ```
