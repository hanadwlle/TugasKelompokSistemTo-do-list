<?php
// Memulai session dan koneksi database
session_start();
include "config/koneksi.php";

// Jika belum login, arahkan ke halaman login
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}
// Ambil task berdasarkan user yang loginn
$user_id = $_SESSION['user_id'];
$data = mysqli_query(
    $conn,
    "SELECT * FROM tasks WHERE user_id='$user_id' ORDER BY id DESC"
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Todo List</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?= time() ?>">
</head>
<body>
<div class="container">
    <h2>To-do List</h2>
<ul>
    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <li>
    <!-- Judul Task -->
    <strong>
    <?php if ($row['status'] == 'done'): ?>
        <s><?= htmlspecialchars($row['title']) ?></s>
    <?php else: ?>
        <?= htmlspecialchars($row['title']) ?>
    <?php endif; ?>
    </strong>
    <!-- Deskripsi Task -->
    <?php if (!empty($row['description'])) : ?>
        <small class="task-desc">
            Deskripsi : <?= htmlspecialchars($row['description']) ?>
        </small>
    <?php endif; ?>
   
