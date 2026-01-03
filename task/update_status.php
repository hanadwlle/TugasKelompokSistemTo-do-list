<?php
session_start(); // Mulai session
include "../config/koneksi.php";  // Koneksi DB

if (!isset($_SESSION['user_id'])) { // Cek login
    die("Akses ditolak"); 
}

$id = $_GET['id']; // Ambil id task
$user_id = $_SESSION['user_id'];

mysqli_query($conn,
    "UPDATE tasks SET status='done'
     WHERE id='$id' AND user_id='$user_id'" // Update status
);

header("Location: ../dashboard.php"); // Redirect
exit; // Stop script
