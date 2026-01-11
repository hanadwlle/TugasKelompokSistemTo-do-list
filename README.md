# Aplikasi Login dan Manajemen Tugas

## Deskripsi Singkat
Aplikasi To-Do List berbasis web merupakan sistem yang dirancang untuk membantu pengguna dalam mengelola dan mencatat tugas sehari-hari secara terstruktur dan efisien. Aplikasi ini dilengkapi dengan sistem autentikasi sehingga setiap pengguna memiliki akun dan hanya dapat mengakses serta mengelola data tugas miliknya sendiri. Pengguna dapat menambahkan tugas baru, melihat daftar tugas, mengedit informasi tugas, menghapus tugas, serta menandai tugas sebagai selesai, lengkap dengan pengaturan deadline. Aplikasi dikembangkan menggunakan PHP dan MySQL dengan penerapan konsep CRUD untuk pengelolaan data, serta struktur kode yang modular agar mudah dipahami dan dikembangkan. Dari sisi antarmuka, aplikasi menggunakan HTML dan CSS dengan tampilan sederhana dan mudah digunakan, serta JavaScript native untuk interaksi dasar, sehingga sistem ini dapat berfungsi secara optimal sebagai alat bantu produktivitas sekaligus media pembelajaran pengembangan aplikasi web.

---

## Daftar Anggota
| No | Nama Lengkap               | NIM        | Username GitHub        | Peran / Tugas                                       |
|----|----------------------------|------------|------------------------|-----------------------------------------------------|
| 1  | Ni Putu Listya Aprianti    | 240030023  | listyaaprianti         | Berperan dalam penataan tampilan aplikasi menggunakan CSS, penyesuaian halaman utama index.php, pengembangan dan pengaturan tampilan pada halaman dashboard.php, serta pembaruan dokumentasi pada README.md.                                                  |
| 2  | Putu Nadia Christiani      | 240030037  | christianinadia94-lgtm | Berperan dalam pengembangan modul Task yang mencakup fitur Create, Read, Update, dan Delete (CRUD) melalui implementasi file add_task.php, edit_task.php, delete_task.php, dan update_status.php untuk pengelolaan data tugas, serta penyusunan dan pembaruan dokumentasi proyek pada file README.md.         |
| 3  | Ni Ketut Mandarini Xioshin | 240030038  | mandarinixioshin       | Berperan dalam pembuatan konfigurasi (config) sistem, pengelolaan database, pembaruan pada halaman dashboard, serta pembaruan dokumentasi pada README.md.                                                   |
| 4  | Kadek Hana Dwi Lestari     | 240020043  | hanadwlle              | Mengembangkan fitur login dan register pengguna, Mengelola session autentikasi menggunakan PHP, Menambahkan validasi input dan keamanan password, Mengimplementasikan fitur logout pengguna          

---

## Lingkungan Pengembangan
- Sistem Operasi : Windows  
- Web Server : Apache (XAMPP)  
- Bahasa Pemrograman : PHP (Native)
- Database : MySQL  
- Frontend : HTML & CSS
- Text Editor / IDE: Visual Studio Code
- Browser: Google Chrome 

---

## Struktur Folder
TugasKelompokSistemTo-do-list

auth
- login.php          # Proses login
- register.php       # Proses registrasi
- logout.php         # Proses logout

config
- koneksi.php          # File konfigurasi dan koneksi database

task
- add_task.php        # Menambah tugas baru
- edit_task.php       # Mengedit data tugas
- delete_task.php     # Menghapus tugas
- update_status.php   # Memperbarui status tugas


dashboard.php      # Halaman utama setelah login

index.php          # Halaman awal aplikasi

style.css          # Styling tampilan aplikasi

database.sql       # Struktur dan data awal database

README.md          # Dokumentasi project

---
## Hasil Pengembangan (Implementasi Modul & Fitur)
1. Modul Autentikasi (Authentication)
   - Register pengguna baru
   - Login pengguna
   - Logout
   - Proteksi halaman agar hanya bisa diakses setelah login
2. Modul Manajemen Tugas (Task Management)
   - Menambahkan tugas baru
   - Menampilkan daftar tugas berdasarkan user login
   - Mengedit tugas
   - Menghapus tugas
   - Menandai tugas sebagai selesai (done)
3. Modul Dashboard
   - Menampilkan form input tugas
   - Menampilkan daftar tugas milik pengguna
   - Menampilkan status tugas (pending / done)
   - Menampilkan deadline tugas
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


































