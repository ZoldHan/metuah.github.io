<?php include 'koneksi.php';
ini_set('date.timezone', 'Asia/Jakarta');
$id = $_GET['id'];
$proses = date("Y-m-d H:i:s");
$query = mysqli_query($db, "UPDATE skpp SET proses = '$proses' WHERE id_skpp = '$id'");
header('location:skpp.php');
?>