<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['user_id'])) {
    die("Akses ditolak");
}

$user_id = $_SESSION['user_id'];
$title = trim($_POST['title']);
$description = trim($_POST['description']);
$due_date = $_POST['due_date'];

if (empty($title)) {
    die("Judul wajib diisi");
}

mysqli_query($conn,
    "INSERT INTO tasks (user_id, title, description, due_date)
     VALUES ('$user_id', '$title', '$description', '$due_date')"
);

header("Location: ../dashboard.php");
exit;
