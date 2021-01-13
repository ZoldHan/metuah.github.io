<?php 
include 'koneksi.php';
if(isset($_POST['simpan']) && $_POST['simpan'] !="") {
	$id = $_POST['id']; 
	$ditolak = $_POST['ditolak'];
$query = mysqli_query($db, "UPDATE sp2d SET ditolak = '$ditolak' WHERE id_sp2d = '$id'");
header('location:sp2d.php');
}
?>