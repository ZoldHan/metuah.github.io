<?php include 'koneksi.php';
ini_set('date.timezone', 'Asia/Jakarta');
$id = $_GET['id'];
$diterima = date("Y-m-d H:i:s");
$query = mysqli_query($db, "UPDATE skpp SET diterima = '$diterima' WHERE id_skpp = '$id'");
header('location:skpp.php');
?>