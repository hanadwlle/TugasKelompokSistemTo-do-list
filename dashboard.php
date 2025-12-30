<?php
session_start();
include "config/koneksi.php";
if (!isset($_SESSION['user_id'])) header("Location: auth/login.php");

$data = mysqli_query($conn,
    "SELECT * FROM todos WHERE user_id='{$_SESSION['user_id']}'"
);
?>
<h2>Todo List</h2>

<form action="task/add_task.php" method="post">
    <input name="title">
    <input name="desc">
    <input type="date" name="date">
    <button>Tambah</button>
</form>

<ul>
<?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <li>
        <?= $row['title'] ?>
        <a href="task/delete_task.php?id=<?= $row['id'] ?>">Hapus</a>
    </li>
<?php endwhile ?>
</ul>


<a href="auth/logout.php">Logout</a>
<a href="auth/logout.php">Logout</a>

