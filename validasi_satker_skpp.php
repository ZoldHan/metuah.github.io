<?php 
include 'header.php'; 
include 'koneksi.php';
?>

<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-pencil"></i> Pesan </h1>
		</div>
	</div>

	<div class="row" style="margin-left: 23%">
		<div class="col-md-8">
			<div class="tile">
				<h3 class="tile-title">Form</h3>
				<div class="tile-body">
					<?php 
					$id = $_GET['id'];
					$query = mysqli_query($db,"SELECT * FROM skpp WHERE id_skpp = '$id'");
					while ($data = mysqli_fetch_array($query)) { 
						?>  
						<form method="post" action="validasi_satker_skpp_act.php" >
							<fieldset>

								<input type="hidden" name="id" value="<?php echo $data['id_skpp'] ?>" />

								<fieldset>

									<div class="form-group">
										<label class="control-label">Pesan Ditolak</label>
										<input class="form-control" type="text" name="ditolak" value="<?php echo $data['ditolak']; ?>">
									</div>
									<div class="tile-footer">
										<button class="btn btn-primary" name="simpan" type="submit" value="simpan"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
									</div>
								</form>
							<?php } ?>

						</div>
					</div>
				</div>
			</main>

			<?php include 'footer.php'; ?>