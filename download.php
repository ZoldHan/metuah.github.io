
<?php
include "koneksi.php";
  
// membaca nilai ID file yang berasal dari link download.php?id=...
$id      = $_GET['id'];
   
// query untuk membaca data file berdasarkan ID
$query   = "SELECT * FROM spm WHERE id_spm = $id";
  $hasil = mysqli_query($db, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[name]</b> <br>"; 
    echo "<a href=\"simpan.php?file=$r[name]\">Download File</a><hr><br>";
  }
?>
