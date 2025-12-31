<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Aplikasi Todo List</h2>
        <a href="auth/login.php" class="btn login">Login</a>
        <a href="auth/register.php" class="btn register">Register</a>
    </div>
</body>