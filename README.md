# Tugas Templating CodeIgniter 4 (Project: aliffadlan)

> Proyek ini adalah tugas mata kuliah Pemrograman Framework (CodeIgniter 4) yang menerapkan konsep Templating. Proyek ini dibangun berdasarkan modul praktikum (Pertemuan 5) dan dimodifikasi secara ekstensif menggunakan template Bootstrap "Small Business".

---

## 📸 Tampilan Website

Tampilan Halaman Utama (Home) dengan Hero Section dan Card Interaktif.
![Tampilan Homepage Proyek](https://github.com/user-attachments/assets/01c7443d-4b71-46c4-a810-467a5be1653d)

---

## 📋 Tentang Proyek

Proyek ini dibuat untuk memenuhi tugas mata kuliah **Pemrograman Framework** di **Politeknik LP3I Jakarta**.

Tujuan utamanya adalah mengimplementasikan konsep _templating_ (Praktikum 3 dari PDF), di mana _layout_ website (header, footer, navbar) dipisahkan dari kontennya. Proyek ini kemudian dikembangkan lebih lanjut dengan fitur-fitur modern untuk menunjukkan pemahaman penuh tentang _framework_ CodeIgniter 4.

---

## ✨ Fitur Utama

Proyek ini memiliki fitur-fitur berikut:

- **Arsitektur MVC:** Pemisahan yang jelas antara Logic (Controller `Page.php`), Tampilan (Folder Views `layout/` dan `pages/`), dan Konfigurasi Rute (`Routes.php`).
- **Layout Templating:** Menggunakan sistem _templating_ CodeIgniter (`$this->extend`, `$this->section`, `$this->include`) untuk menciptakan _layout_ utama yang konsisten.
- **Template Bootstrap Kustom:** Mengganti tampilan standar dengan template **"Small Business"** dari StartBootstrap agar _layout_ lebih modern dan profesional.
- **Navigasi Aktif (Active State):** Menu di _navbar_ akan menyala (_highlight_) secara dinamis sesuai dengan halaman yang sedang dibuka (misal: "About" akan aktif saat di halaman About).
- **Hero Section:** Halaman Home memiliki _banner_ sambutan besar dengan tombol _Call to Action_ (CTA).
- **Konten Dinamis dari Controller:** Halaman "Profile" menampilkan data (Nama, NIM, Jurusan) yang dikirim langsung dari `Page.php` (Controller), menggabungkan konsep Praktikum 2 dan 3.
- **Form Kontak Fungsional:**
  - Halaman "Contact" memiliki form HTML yang fungsional.
  - **Validasi Sisi Server:** Menggunakan _Validation Service_ CodeIgniter untuk mengecek input (`required`, `min_length`, `valid_email`).
  - **Pesan Sukses (Flashdata):** Menampilkan pesan "Berhasil terkirim" di halaman yang sama (tanpa pindah halaman) setelah form berhasil di-submit.
  - **Pesan Error:** Menampilkan daftar _error_ validasi jika _form_ gagal di-submit.
- **Card Interaktif:** Halaman Home memiliki _card_ dengan tombol yang mengarah ke halaman lain dan ke repositori GitHub ini.
- **Bootstrap Icons:** Menggunakan ikon (seperti ikon GitHub) yang dimuat dari CDN.

---

## 🛠️ Teknologi yang Digunakan

- **Framework:** CodeIgniter 4
- **Bahasa:** PHP (v8.x)
- **Frontend:** HTML, Bootstrap 5 (dari template Small Business), Bootstrap Icons
- **Server Lokal:** XAMPP / Laragon (dijalankan menggunakan `php spark serve`)

---

## 🚀 Cara Menjalankan Lokal

1.  **Clone repositori ini:**

    ```bash
    git clone [https://github.com/NAMA_USER_GITHUB_KAMU/aliffadlan.git](https://github.com/NAMA_USER_GITHUB_KAMU/aliffadlan.git)
    ```

    _(Ganti `NAMA_USER_GITHUB_KAMU` dengan username GitHub kamu)_

2.  **Masuk ke folder proyek:**

    ```bash
    cd aliffadlan
    ```

3.  **Install dependensi Composer:**

    ```bash
    composer install
    ```

4.  **Salin file `env`:**

    - Salin file `env` (tanpa titik) menjadi `.env`.
    - Buka file `.env` dan hapus tanda `#` di baris `app.baseURL`. Biarkan kosong atau atur ke `http://localhost:8080` (meskipun proyek ini sudah disesuaikan untuk _link_ relatif).

5.  **Jalankan server:**

    ```bash
    php spark serve
    ```

6.  **Buka di browser:**
    - Buka `http://localhost:8080` (atau port yang diberikan oleh _spark_).

---

## 👨‍💻 Dibuat Oleh

- **Nama:** M Alif Fadlan
- **NIM:** 240444150007
- **Kelas:** Rekayasa Perangkat Lunak
- **Kampus:** Politeknik LP3I Jakarta
