<?php
session_start(); // Memulai session
include "../config/koneksi.php";  // Menghubungkan ke database

if (!isset($_SESSION['user_id'])) { // Mengecek apakah user sudah login
    die("Akses ditolak"); 
}

$id = $_GET['id']; // Mengambil id task
$user_id = $_SESSION['user_id']; // Mengambil id user

mysqli_query($conn,
    "UPDATE tasks SET status='done'
     WHERE id='$id' AND user_id='$user_id'" // Mengubah status task menjadi selesai
);

header("Location: ../dashboard.php"); // Kembali ke dashboard
exit; // Menghentikan eksekusi script
