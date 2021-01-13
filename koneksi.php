<?php 
$db = mysqli_connect("localhost","root","","kppn");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>