<?php include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($db, "DELETE FROM sp2d WHERE id_sp2d = '$id'");
header('location:sp2d.php');
?>