<?php
// Memulai session dan koneksi database
session_start();
include "config/koneksi.php";

// Jika belum login, arahkan ke halaman login
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}

// Ambil task berdasarkan user yang loginn
$user_id = $_SESSION['user_id'];
$data = mysqli_query(
    $conn,
    "SELECT * FROM tasks WHERE user_id='$user_id' ORDER BY id DESC"
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Todo List</h2>

    <!-- Form tambah task -->
    <form action="task/add_task.php" method="post">
        <input type="text" name="title" placeholder="Judul task" required>
        <textarea name="description" placeholder="Deskripsi"></textarea>
        <input type="date" name="due_date">
        <button type="submit">Tambah</button>
    </form>

    <h3>Daftar Task</h3>

    <ul>
    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
        <li>
            <?php if ($row['status'] == 'done'): ?>
                <s><?= htmlspecialchars($row['title']) ?></s>
            <?php else: ?>
                <?= htmlspecialchars($row['title']) ?>
            <?php endif; ?>

            | <a href="task/edit_task.php?id=<?= $row['id'] ?>">Edit</a>
            | <a href="task/update_status.php?id=<?= $row['id'] ?>">Selesai</a>
            | <a href="task/delete_task.php?id=<?= $row['id'] ?>" 
                 onclick="return confirm('Yakin hapus task?')">Hapus</a>
        </li>
    <?php endwhile; ?>
    </ul>

    <a class="link-bottom" href="auth/logout.php">Logout</a>
</div>

</body>
</html>
