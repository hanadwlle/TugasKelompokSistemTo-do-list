<?php
require "../config/koneksi.php";

if (isset($_POST['register'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users VALUES (NULL,?,?,?,NOW())");
    $stmt->execute([$nama, $email, $password]);

    header("Location: login.php");
}
?>

<form method="POST">
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="register">Register</button>
</form>
