<?php
session_start();
require_once "../config/koneksi.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

$id = $_POST['id'];
$title = htmlspecialchars($_POST['title']);
$description = htmlspecialchars($_POST['description']);
$due_date = $_POST['due_date'];
$status = $_POST['status'];
$user_id = $_SESSION['user_id'];

$sql = "UPDATE tasks 
        SET title=?, description=?, due_date=?, status=? 
        WHERE id=? AND user_id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssii", $title, $description, $due_date, $status, $id, $user_id);
$stmt->execute();

header("Location: ../dashboard.php");
