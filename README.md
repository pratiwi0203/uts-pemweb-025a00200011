
# Kantin Kita — Katalog Menu Kantin/Kafe

## 1. Identitas

- **Nama:** Pratiwi Dwi Eriyani
- **NIM:** 025A00200011
- **Kelas:** A2-3A
- **Program Studi:** Informatika
- **Mata Kuliah:** Pemrograman Web

## 2. Deskripsi Proyek

Kantin Kita merupakan website sederhana yang menampilkan informasi kantin dan katalog menu berupa makanan, camilan, dan minuman. Website ini dibuat menggunakan HTML, CSS, dan PHP untuk menampilkan daftar menu, harga, kategori, serta status ketersediaan menu secara dinamis tanpa menggunakan database.

## 3. Cara Menjalankan di Localhost

1. Pastikan aplikasi Laragon sudah terpasang.
2. Salin folder proyek `uts-pemweb-kantin` ke dalam folder `www`, biasanya berada di `C:\xampp\htdocs`.
3. Buka Laragon, kemudian jalankan Apache.
4. Buka browser dan akses alamat berikut:

   `http://localhost/uts-pemweb-kantin/index.php`

5. Pada halaman beranda, klik menu **Menu** untuk melihat katalog.
6. Pastikan halaman beranda dan katalog dapat dibuka tanpa error.

## 4. Daftar Fitur

| Fitur | File | Fungsi atau Kode |
|---|---|---|
| Menampilkan halaman beranda | `index.php` | Menampilkan informasi Kantin Kita dan tautan katalog |
| Menampilkan daftar menu | `katalog.php` | `foreach` untuk menampilkan data menu dari array $menu |
| Menampilkan dan memfilter kategori menu | `katalog.php` | `if` dan `array_filter()` untuk menyaring menu berdasarkan kategori |
| Menampilkan status ketersediaan | `katalog.php`, `functions.php` |Percabangan `if` dan `else` untuk membedakan status tersedia dan habis |
| Mengubah harga ke format Rupiah | `functions.php` | `formatRupiah()` |
| Menghitung total menu | `katalog.php` | `count($menu)` |
| Menampilkan harga termurah | `katalog.php` | `array_column() dan min()` |
| Menyimpan data menu | `data.php` | Array multidimensi `$menu` |
| Mengamankan teks sebelum ditampilkan | `functions.php` | `e()` dengan `htmlspecialchars()` |
| Mengatur tampilan website | `style.css` | CSS dan media query responsif di laptop, tablet, dan HP |

## 5. Fungsi Array Bawaan yang Digunakan

| Fungsi | Kegunaan |
|---|---|
| `count()` | Menghitung jumlah elemen dalam array, seperti total menu dan hasil penyaringan. |
| `array_filter()` | Menyeleksi menu berdasarkan kondisi, misalnya hanya menu yang tersedia atau kategori tertentu. |
| `array_column()` | Mengambil seluruh nilai dari kolom tertentu dalam array multidimensi, seperti kolom harga. |
| `min()` | Mencari nilai paling kecil dari daftar harga untuk menentukan harga menu termurah. |

## 6. Tangkapan Layar Website

### A. Halaman Beranda

Simpan tangkapan layar halaman beranda dengan nama `beranda.png` di folder `screenshots`.

![Halaman Beranda](screenshots/beranda.png)

### B. Halaman Katalog Menu

Simpan tangkapan layar halaman katalog dengan nama `katalog.png` di folder `screenshots`.

![Halaman Katalog](screenshots/katalog.png)

## 7. Sumber Referensi dan Catatan Penggunaan AI

### Sumber Referensi
- Dokumentasi PHP: https://www.php.net/manual/en/
- Dokumentasi fungsi `foreach`: https://www.php.net/manual/en/control-structures.foreach.php
- Dokumentasi `htmlspecialchars()`: https://www.php.net/manual/en/function.htmlspecialchars.php

### Catatan Penggunaan AI
Pengembangan proyek ini dibantu oleh AI untuk memperoleh penjelasan konsep PHP, menyusun struktur kode, dan memperbaiki tampilan website. Kode kemudian dipelajari, disesuaikan, dan diuji kembali agar sesuai dengan kebutuhan tugas.

---

**Catatan:** README ini dibuat untuk dokumentasi proyek UTS Pemrograman Web. Seluruh fitur dan isi dokumentasi perlu disesuaikan dengan implementasi akhir website.
