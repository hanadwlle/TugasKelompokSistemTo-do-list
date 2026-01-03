<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['user_id'])) {
    die("Akses ditolak");
}

$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

mysqli_query($conn,
    "DELETE FROM tasks WHERE id='$id' AND user_id='$user_id'"
);

header("Location: ../dashboard.php");
exit;
