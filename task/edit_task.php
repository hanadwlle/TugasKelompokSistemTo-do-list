<?php
// Halaman edit task
session_start();
include "../config/koneksi.php";

// Proteksi login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}


$id = $_GET['id'] ?? null;

// Ambil data task berdasarkan id & user
$query = mysqli_query(
    $conn,
    "SELECT * FROM tasks 
     WHERE id='$id' AND user_id='{$_SESSION['user_id']}'"
);

$task = mysqli_fetch_assoc($query);

if (!$task) {
    echo "Task tidak ditemukan";
    exit;
}

// Proses update task
if (isset($_POST['update'])) {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);

    if (empty($title)) {
        $error = "Judul tidak boleh kosong";
    } else {
        mysqli_query(
            $conn,
            "UPDATE tasks 
             SET title='$title', description='$description'
             WHERE id='$id'"
        );
        header("Location: ../dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Edit Task</h2>

    <?php if (isset($error)) : ?>
        <p style="color:red; text-align:center"><?= $error ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
        <textarea name="description"><?= htmlspecialchars($task['description']) ?></textarea>
        <button type="submit" name="update">Simpan Perubahan</button>
    </form>

    <a class="link-bottom" href="../dashboard.php">← Kembali</a>
</div>

</body>
</html>
