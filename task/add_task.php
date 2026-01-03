<?php
session_start(); // Memulai session supaya bisa menggunakan $_SESSION
include "../config/koneksi.php"; // Menghubungkan ke database melalui file koneksi.php

if (!isset($_SESSION['user_id'])) { // Cek apakah user sudah login
    die("Akses ditolak"); // Jika belum login, hentikan script dan tampilkan pesan
}

$user_id = $_SESSION['user_id']; // Ambil user_id dari session
$title = trim($_POST['title']); // Ambil input 'title' dari form dan hapus spasi di awal/akhir
$description = trim($_POST['description']); // Ambil input 'description' dari form dan hapus spasi
$due_date = $_POST['due_date']; // Ambil input 'description' dari form dan hapus spasi

if (empty($title)) { // Cek apakah judul kosong
    die("Judul wajib diisi"); // Jika kosong, hentikan script dan tampilkan pesan
}

mysqli_query($conn,
    "INSERT INTO tasks (user_id, title, description, due_date)
     VALUES ('$user_id', '$title', '$description', '$due_date')"
); // Menjalankan query untuk menambahkan data tugas ke database

header("Location: ../dashboard.php"); // Setelah berhasil, redirect ke halaman dashboard
exit; // Menghentikan script supaya tidak menjalankan kode lain
