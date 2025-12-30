<?php
session_start();
include "../config/koneksi.php";

$title = $_POST['title'];
$desc  = $_POST['desc'];
$date  = $_POST['date'];

mysqli_query($conn,
    "INSERT INTO todos VALUES (NULL, '{$_SESSION['user_id']}', '$title', '$desc', '$date', 'pending')"
);
header("Location: ../dashboard.php");
header("Location: ../dashboard.php");
