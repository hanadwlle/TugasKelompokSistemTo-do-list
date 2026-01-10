<?php
// Memulai session dan koneksi database
session_start();
include "config/koneksi.php";

// Jika belum login, arahkan ke halaman login
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}
