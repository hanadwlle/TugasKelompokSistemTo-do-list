<?php
include "../config/koneksi.php";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        echo "Semua field wajib diisi";
        exit;
    }

    $cek = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) > 0) {
        echo "Email sudah terdaftar";
        exit;
    }

    $passHash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query(
        $conn,
        "INSERT INTO users (name, email, password)
         VALUES ('$username','$email','$passHash')"
    );

    header("Location: login.php");
    exit;
}
?>

<form method="post">
    <input name="username" placeholder="Username" required>
    <input name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="register">Register</button>
</form>
