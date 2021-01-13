<?php 
include 'koneksi.php';

if(isset($_POST['simpan']) && $_POST['simpan'] !="") {
	$kode = $_POST ['kode'];
	$nama = $_POST['nama'];


	$query = mysqli_query($db, "INSERT INTO sp2d (kode_satker, nama_satker) VALUES ('$kode', '$nama');");

	header('location:sp2d.php');
	}

	else{
		header('location:tambah_satker_sp2d.php');
	}?>