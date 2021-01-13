<?php include 'koneksi.php';
ini_set('date.timezone', 'Asia/Jakarta');
$id = $_GET['id'];
$selesai = date("Y-m-d H:i:s");
$query = mysqli_query($db, "UPDATE spm SET selesai = '$selesai' WHERE id_spm = '$id'");
header('location:spm.php');
?>