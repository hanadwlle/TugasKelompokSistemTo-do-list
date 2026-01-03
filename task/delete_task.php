<?php
session_start(); // Memulai session
include "../config/koneksi.php"; // Koneksi database

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    die("Akses ditolak");
}

// Ambil id tugas dan id user
$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// Hapus tugas sesuai user yang login
mysqli_query($conn,
    "DELETE FROM tasks WHERE id='$id' AND user_id='$user_id'"
);

// Kembali ke halaman dashboard
header("Location: ../dashboard.php");
exit;
