<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';

if(isset($_POST['ubah'])) {
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['file']['tmp_name'];
$name   = $_FILES['file']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$name";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  //echo "Nama File : <b>$nama_file</b> sukses di upload";
  
  // Masukkan informasi file ke database
  $db = mysqli_connect("localhost","root","","kppn");

  $query = "INSERT INTO spm (name, tgl_upload)
            VALUES('$name', '$tgl_upload')";
            
  mysqli_query($db, $query);
}
else{
  echo "File gagal di upload";
}
?><?php
    }
?>