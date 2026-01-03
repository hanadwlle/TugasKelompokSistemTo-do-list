<?php
// Halaman login user
session_start();
include "../config/koneksi.php";

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: ../dashboard.php");
    exit;
}

// Proses login
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Email dan password wajib diisi";
    } else {
        $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $user = mysqli_fetch_assoc($query);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../dashboard.php");
            exit;
        } else {
            $error = "Email atau password salah";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <?php if (isset($error)) : ?>
        <p style="color:red; text-align:center"><?= $error ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <a class="link-bottom" href="register.php">Belum punya akun? Register</a>
</div>

</body>
</html>
