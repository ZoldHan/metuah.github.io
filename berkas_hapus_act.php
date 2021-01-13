<?php include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($db, "DELETE FROM files WHERE id = '$id'");
header('location:berkas.php');
?>