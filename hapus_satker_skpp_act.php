<?php include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($db, "DELETE FROM skpp WHERE id_skpp = '$id'");
header('location:skpp.php');
?>