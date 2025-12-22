<?php
include "../config/koneksi.php";
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM todos WHERE id=$id");
header("Location: ../dashboard.php");
