<?php
require "../config/koneksi.php";

// Cek login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

// Ambil ID task
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID task tidak ditemukan");
}

// Ambil data task milik user
$stmt = $pdo->prepare(
    "SELECT * FROM tasks WHERE id = ? AND user_id = ?"
);
$stmt->execute([$id, $_SESSION['user_id']]);
$task = $stmt->fetch();

if (!$task) {
    die("Task tidak ditemukan");
}

// Jika form disubmit
if (isset($_POST['update'])) {
    $judul = htmlspecialchars($_POST['judul']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $deadline = $_POST['deadline'];

    $update = $pdo->prepare(
        "UPDATE tasks 
         SET judul = ?, deskripsi = ?, deadline = ?
         WHERE id = ? AND user_id = ?"
    );
    $update->execute([
        $judul,
        $deskripsi,
        $deadline,
        $id,
        $_SESSION['user_id']
    ]);

    header("Location: ../dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h2>Edit Task</h2>

<form method="POST">
    <label>Judul</label><br>
    <input type="text" name="judul"
           value="<?= htmlspecialchars($task['judul']); ?>" required><br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi"><?= htmlspecialchars($task['deskripsi']); ?></textarea><br><br>

    <label>Deadline</label><br>
    <input type="date" name="deadline"
           value="<?= $task['deadline']; ?>" required><br><br>

    <button type="submit" name="update">Simpan Perubahan</button>
</form>

<br>
<a href="../dashboard.php">⬅ Kembali</a>

</body>
</html>
