# Aplikasi Login dan Manajemen Tugas

## Deskripsi Singkat
Aplikasi Login dan Manajemen Tugas adalah aplikasi web berbasis PHP dan MySQL
yang menyediakan fitur autentikasi pengguna serta manajemen data tugas.
Pengguna harus login terlebih dahulu untuk mengakses sistem.
Jika belum memiliki akun, pengguna dapat melakukan registrasi.
Aplikasi ini memungkinkan pengguna menambah, melihat, dan menghapus tugas
sesuai dengan akun yang sedang login.  
Setelah login, pengguna dapat :
- Menambahkan tugas
- Mengedit tugas
- Menghapus tugas
- Memperbarui status tugas (selesai/belum selesai)
- Logout dari sistem
  

Aplikasi menggunakan **session** untuk membatasi akses pengguna.

---

## Daftar Anggota
| No | Nama Lengkap               | NIM        | Username GitHub        | Peran / Tugas                                       |
|----|----------------------------|------------|------------------------|-----------------------------------------------------|
| 1  | Ni Putu Listya Aprianti    | 240030023  | listyaaprianti         | Berperan dalam penataan tampilan aplikasi menggunakan CSS, penyesuaian halaman utama index.php, serta pembaruan dokumentasi pada README.md.                                                  |
| 2  | Putu Nadia Christiani      | 240030037  | christianinadia94-lgtm | update add task, update status, update style.css, menambahkan README, menambahkan keterangan di add task dan update status                                               |
| 3  | Ni Ketut Mandarini Xioshin | 240030038  | mandarinixioshin       | Mengupdate config (koneksi), Update Database sql, Update add taks, Update style.css,  Update delete teks, dan Menambahkan README.                                                    |
| 4  | Kadek Hana Dwi Lestari     | 240020043  | hanadwlle              | Mengembangkan fitur login dan register pengguna, Mengelola session autentikasi menggunakan PHP, Menambahkan validasi input dan keamanan password, Mengimplementasikan fitur logout pengguna          

---

## Lingkungan Pengembangan
- Sistem Operasi : Windows  
- Web Server : Apache (XAMPP)  
- Bahasa Pemrograman : PHP  
- Database : MySQL  
- Frontend : HTML & CSS  
- Tools :
  - Visual Studio Code
  - phpMyAdmin
  - Google Chrome

---

## Hasil Pengembangan
Fitur utama aplikasi :
- Registrasi pengguna  
- Login & logout pengguna  
- Autentikasi dengan session  
- Manajemen tugas (tambah, edit, hapus, update status)  
- Koneksi database MySQL  

---

## Struktur Folder
TugasKelompokSistemTo-do-list/
- index.php          # Halaman awal aplikasi
- login.php          # Proses login
- register.php       # Proses registrasi
- logout.php         # Proses logout
- dashboard.php      # Halaman utama setelah login
- koneksi.php        # File konfigurasi dan koneksi database
- add_task.php       # Menambah tugas baru
- edit_task.php      # Mengedit data tugas
- delete_task.php    # Menghapus tugas
- update_status.php  # Memperbarui status tugas
- style.css          # Styling tampilan aplikasi
- database.sql       # Struktur dan data awal database
- README.md          # Dokumentasi project

---

## Cara Instalasi dan Menjalankan Aplikasi
1. Install **XAMPP** di komputer  
2. Jalankan **Apache dan MySQL** melalui XAMPP Control Panel  
3. Buka browser dan akses : http://localhost/phpmyadmin
4. ⁠Buat database baru : todo_db
5. ⁠Import file database : database.sql
6. ⁠Salin folder project ke direktori : C:\xampp\htdocs\TugasKelompokSistemTo-do-list
7. ⁠Jalankan aplikasi melalui browser : http://localhost/TugasKelompokSistemTo-do-list/auth/login.php
8. ⁠Registrasi akun baru, kemudian login untuk menggunakan seluruh fitur aplikasi

---

## Catatan Teknis
- Setiap halaman manajemen tugas hanya dapat diakses setelah login  
- Sistem menggunakan **session PHP** untuk autentikasi  
- Jika session tidak ditemukan, pengguna akan diarahkan ke halaman login






















