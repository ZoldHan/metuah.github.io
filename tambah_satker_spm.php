<?php 
include 'header.php'; 
?>

<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-pencil"></i> Tambah Satker</h1>
		</div>
	</div>

	<div class="row" style="margin-left: 23%">
		<div class="col-md-8">
			<div class="tile">
				<h3 class="tile-title">Form Tambah Satker</h3>
				<div class="tile-body">
					<form method="post" action="tambah_satker_spm_act.php" enctype="multipart/form-data">
						<div class="form-group">
							<label class="pull-left">Kode Satker</label>
							<input type="text" name="kode" class="form-control">
						</div>
						<div class="form-group">
							<label class="pull-left">Nama Satker</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="tile-footer">
							<button class="btn btn-primary" name="simpan" type="submit" value="simpan"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>