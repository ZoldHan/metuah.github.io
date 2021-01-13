<?php 
include 'koneksi.php';
if(isset($_POST['simpan']) && $_POST['simpan'] !="") {
	$id = $_POST['id']; 
	$ditolak = $_POST['ditolak'];
$query = mysqli_query($db, "UPDATE spm SET ditolak = '$ditolak' WHERE id_spm = '$id'");
header('location:spm.php');
}
?>