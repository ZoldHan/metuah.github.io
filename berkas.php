<?php 
include 'header.php'; 
include 'filesLogic.php';?>
<main class="app-content">
	<div class="app-title">
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Berkas Surat Perintah Membayar</h1>
				<a href="berkas_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Tambah Berkas</a>
			</div>
		</div>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Tabel Berkas SPM</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Satker</th>
								<th>Nama Satker</th>
								<th>Filename</th>
								<th>size (in mb)</th>
								<th>Downloads</th>
								<th>Menu</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							$conn = mysqli_connect('localhost', 'root', '', 'kppn');
							$sql = "SELECT * FROM files";
							$result = mysqli_query($conn, $sql);
							{ ?>
								<?php foreach ($files as $data): ?>
									<tr>
										<td> <?php echo $no++ ?> </td>
										<td><?php echo $data['kode_satker']; ?></td>
										<td><?php echo $data['nama_satker']; ?></td>
										<td><?php echo $data['name']; ?></td>
										<td><?php echo floor($data['size'] / 1000) . ' KB'; ?></td>
										<td><?php echo $data['downloads']; ?></td>
										<td><a href="downloads.php?data_id=<?php echo $data['id'] ?>"class="btn btn-circle btn-primary"
											onclick="return confirm('apakah anda yakin untuk mendownload data ini?')"><i class="fas fa-arrow-alt-circle-down"></i></a>
											<a href="berkas_hapus_act.php?id=<?php echo $data['id']; ?>" class="btn btn-circle btn-danger"
												onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
												><i class="fas fa-trash"></i></a>
											</td>
										</tr>
									<?php endforeach;?>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>
	</main>

	<?php include 'footer.php' ?>