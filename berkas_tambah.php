<?php 
include 'header.php'; 
include 'filesLogic.php';?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-pencil"></i> Form Tambah Berkas Satker</h1>
    </div>
  </div>

  <div class="row" style="margin-left: 23%">
    <div class="col-md-8">
      <div class="tile">
        
        <div class="tile-body">
          <form action="berkas_tambah.php" method="post" enctype="multipart/form-data" >
            <br><br>
            <div class="form-group">
              <label class="pull-left">Kode Satker</label>
              <input type="text" name="kode" class="form-control">
            </div>
            <div class="form-group">
              <label class="pull-left">Nama Satker</label>
              <input type="text" name="nama" class="form-control">
            </div>
            <input type="file" name="myfile"> <br><br>
            <button class="btn btn-primary" type="submit" name="save"><i class="fa fa-fw fa-lg fa-check-circle"></i>upload</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include 'footer.php'; ?>