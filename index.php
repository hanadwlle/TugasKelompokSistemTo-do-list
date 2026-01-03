<?php
session_start(); // Memulai session

if (isset($_SESSION['user_id'])) { // Cek apakah user sudah login
    header("Location: dashboard.php"); // Arahkan ke dashboard
    exit;
} else {
    header("Location: auth/login.php"); // Arahkan ke halaman login
    exit;
}

