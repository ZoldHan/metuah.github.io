<?php include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($db, "DELETE FROM spm WHERE id_spm = '$id'");
header('location:spm.php');
?>