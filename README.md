# NEORON - Platform Bimbingan Belajar Online

NEORON adalah platform teknologi pendidikan (edtech) dan pencipta platform belajar terkemuka. Proyek ini adalah implementasi web dinamis dari platform tersebut, yang berisi video pembelajaran, kuis, paket belajar, dan profil mentor.

Proyek ini dibuat sebagai Proyek Akhir mata kuliah Pengembangan Web Dinamis.

## Fitur Utama

* **Autentikasi Pengguna:**
    * Registrasi pengguna baru (siswa) dengan verifikasi.
    * Login dan Logout pengguna.
    * Sistem sesi untuk membedakan tampilan *guest* (mis. `home.php`) dan *user* (mis. `home-login.php`).
* **Manajemen Profil:**
    * Dashboard pengguna untuk melihat data diri dan data orang tua.
    * Fitur untuk mengedit profil pengguna.
* **Konten Edukasi:**
    * **Halaman Beranda:** Menampilkan keunggulan platform, testimoni, dan daftar mentor.
    * **Paket Belajar:** Menampilkan berbagai paket yang tersedia (SMA, UTBK, Diamonds).
    * **Halaman Mentor:** Menampilkan daftar mentor profesional untuk SMA dan UTBK.
    * **Tentang Kami:** Menampilkan informasi perusahaan, partner, dan profil *founder*.
* **Interaksi Pengguna:**
    * Sistem Ulasan (Testimoni) interaktif.
    * Pengguna yang telah login dapat memposting ulasan baru.
    * Pengguna dapat menghapus ulasan yang telah mereka buat.

## Teknologi yang Digunakan

* **Backend:** PHP
* **Frontend:** HTML, CSS, Bootstrap 5
* **Database:** MySQL / MariaDB
* **Server (Lokal):** XAMPP (Apache)

## Prasyarat

Sebelum memulai, pastikan Anda memiliki server lokal yang terinstal, seperti [XAMPP](https://www.apachefriends.org/index.html) (termasuk Apache, MySQL, dan PHP).

## Instalasi dan Setup Lokal

Untuk menjalankan proyek ini di komputer lokal Anda, ikuti langkah-langkah berikut:

1.  **Salin File Proyek:**
    * Salin atau *clone* seluruh folder proyek ini ke dalam direktori `htdocs` di dalam instalasi XAMPP Anda.
    * **PENTING:** Berdasarkan struktur *link* di dalam kode (mis. `/ProjekAkhir/home.php`), Anda **harus** menamai folder proyek ini `ProjekAkhir`.
    * Struktur direktori seharusnya terlihat seperti: `C:\xampp\htdocs\ProjekAkhir\`

2.  **Setup Database:**
    * Buka XAMPP Control Panel dan jalankan modul **Apache** dan **MySQL**.
    * Buka `phpMyAdmin` melalui browser Anda (biasanya di `http://localhost/phpmyadmin`).
    * Buat database baru dengan nama `project_bimbel`.
    * Buka database `project_bimbel` yang baru saja dibuat, lalu pilih tab **Import**.
    * Klik **Choose File** dan pilih file `database/project_bimbel.sql` dari dalam folder proyek.
    * Klik **Import** (atau **Go**) di bagian bawah halaman untuk mengimpor struktur tabel dan data.

3.  **Konfigurasi Koneksi Database:**
    * Koneksi database diatur dalam file `koneksi.php`.
    * Secara *default*, konfigurasi sudah diatur untuk lingkungan XAMPP standar:
        ```php
        $hostname   = "localhost";
        $username   = "root";
        $password   = "";
        $database   = "project_bimbel";
        ```
    * Jika pengaturan MySQL Anda berbeda (misalnya, Anda menggunakan *password*), perbarui file `koneksi.php` sesuai kebutuhan.

4.  **Jalankan Proyek:**
    * Buka browser web Anda dan navigasikan ke `http://localhost/ProjekAkhir/home.php`.
    * Situs web sekarang seharusnya sudah berjalan di server lokal Anda.

## Struktur Database

Proyek ini menggunakan dua tabel utama dalam database `project_bimbel`:

1.  **`datadiri`**:
    * Menyimpan semua informasi pengguna (siswa), termasuk data login (username, password yang di-*hash*), data pribadi (nama, email, kelas, sekolah), dan data orang tua.
2.  **`ulasan`**:
    * Menyimpan ulasan atau testimoni yang dikirim oleh pengguna.
    * Tabel ini terhubung ke `datadiri` menggunakan *foreign key* `id_siswa`.

## Pembuat Proyek

Proyek ini dibuat oleh:

* **Ghaitsya Faradiba** (SI-A / 124230002) - *CEO & Co-Founder*
* **Sania Dinara Safina** (SI-A / 124230020) - *COO & Co-Founder*
