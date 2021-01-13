<?php 
include 'koneksi.php';
if(isset($_POST['simpan']) && $_POST['simpan'] !="") {
	$id = $_POST['id']; 
	$ditolak = $_POST['ditolak'];
$query = mysqli_query($db, "UPDATE skpp SET ditolak = '$ditolak' WHERE id_skpp = '$id'");
header('location:skpp.php');
}
?>