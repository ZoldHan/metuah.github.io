<?php 
include 'header.php'; 
include 'koneksi.php';?>
<main class="app-content">
	<div class="app-title">
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Surat Perintah Membayar</h1>
				<a href="tambah_satker_skpp.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Tambah Satker</a>
			</div>
		</div>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Tabel SPM</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Satker</th>
								<th>Nama Satker</th>
								<th>Diterima</th>
								<th>Diproses</th>
								<th>Alasan</th>
								<th>Menu</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							$query=mysqli_query($db, "SELECT * FROM spm");
							while($data=mysqli_fetch_array($query))
								{ ?>
									<tr>
										<td> <?php echo $no++ ?> </td>
										<td> <?php echo $data ['kode_satker'] ?></td>
										<td> <?php echo $data ['nama_satker'] ?></td>
										<td> <?php echo $data ['diterima'] ?></td>
										<td> <?php echo $data ['proses'] ?></td>
										<td> <?php echo $data ['ditolak'] ?></td>
										<td>
											<?php ini_set('date.timezone', 'Asia/Jakarta');?>
											<a href="diterima_spm_act.php?id=<?php echo $data['id_spm']; ?>" class="btn btn-circle btn-primary"
												onclick="return confirm('apakah anda yakin untuk diterima data ini?')"
												><i class="fas fa-sticky-note"></i></a>
												<a href="diproses_spm_act.php?id=<?php echo $data['id_spm']; ?>" class="btn btn-circle btn-info"
													onclick="return confirm('apakah anda yakin untuk diproses data ini?')"
													><i class="fas fa-spinner"></i></a>
													<a href="validasi_satker_spm.php?id=<?php echo $data['id_spm']; ?>" class="btn btn-circle btn-warning"
														onclick="return confirm('apakah anda yakin untuk Memberi Alasan data ini?')"
														><i class="fas fa-pen"></i></a>
														
														<a href="hapus_satker_spm_act.php?id=<?php echo $data['id_spm']; ?>" class="btn btn-circle btn-danger"
															onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
															><i class="fas fa-trash"></i></a>
														</td>
													</tr>
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