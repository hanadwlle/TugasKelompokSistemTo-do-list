<?php
// Commit test: login validation improved by Hanad
session_start();
include "../config/koneksi.php";

// Validasi dan proses login user
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $pass  = $_POST['password'];

    // Validasi input kosong
    if (empty($email) || empty($pass)) {
        echo "Email dan password wajib diisi";
        exit;
    }

    $q = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($q);

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../dashboard.php");
        exit;
    } else {
        echo "Login gagal. Email atau password salah.";
    }
}
?>

<form method="post">
    <input name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="login">Login</button>
</form>
