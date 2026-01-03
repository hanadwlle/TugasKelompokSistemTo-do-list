<?php
// Halaman registrasi user
session_start();
include "../config/koneksi.php";

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: ../dashboard.php");
    exit;
}

// Proses register
if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        $error = "Semua field wajib diisi";
    } else {
        // Cek email sudah terdaftar
        $cek = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
        if (mysqli_num_rows($cek) > 0) {
            $error = "Email sudah terdaftar";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query(
                $conn,
                "INSERT INTO users (name, email, password)
                 VALUES ('$name', '$email', '$hash')"
            );
            header("Location: login.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <?php if (isset($error)) : ?>
        <p style="color:red; text-align:center"><?= $error ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>

    <a class="link-bottom" href="login.php">Sudah punya akun? Login</a>
</div>

</body>
</html>
