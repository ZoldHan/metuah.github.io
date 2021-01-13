<?php 
include 'header.php'; 
include 'koneksi.php';?>

<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i></i> UPLOAD</h1>
		</div>
	</div>

	<div class="row" style="margin-left: 23%">
		<div class="col-md-8">
			<div class="tile">
				<h3 class="tile-title">Form UPLOAD</h3>

				<div class="tile-body">
					<?php 
					$id = $_GET['id'];
					$query = mysqli_query($db,"SELECT * FROM spm WHERE id_spm = '$id'");
					while ($data = mysqli_fetch_array($query)) { 
						?> 
						<form enctype="multipart/form-data" method="POST" action="proses.php">
							<input type="hidden" name="id" class="form-control" value="<?php echo $data['id_spm']; ?>">
							<div class="form-group">
								<label>Pilih File</label>
								<input type="file" class="form-control" name="file" >
							</div>
							<button type="submit" name="ubah" class="btn btn-primary">Upload</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>
	<?php
    }
?>