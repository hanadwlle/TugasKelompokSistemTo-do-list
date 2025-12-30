<?php
include "../config/koneksi.php";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // Validasi input kosong
    if (empty($username) || empty($email) || empty($password)) {
        echo "Semua field wajib diisi";
        exit;
    }

    // Cek email sudah terdaftar
    $cek = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) > 0) {
        echo "Email sudah terdaftar";
        exit;
    }

    $passHash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query(
        $conn,
        "INSERT INTO users (name, email, password) 
         VALUES ('$username', '$email', '$passHash')"
    );

    header("Location: login.php");
    exit;
}
?>

<form method="post">
    <input name="username" placeholder="Username">
    <input name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button name="register">Register</button>
</form>
