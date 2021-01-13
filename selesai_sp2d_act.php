<?php include 'koneksi.php';
ini_set('date.timezone', 'Asia/Jakarta');
$id = $_GET['id'];
$selesai = date("Y-m-d H:i:s");
$query = mysqli_query($db, "UPDATE sp2d SET selesai = '$selesai' WHERE id_sp2d = '$id'");
header('location:sp2d.php');
?>