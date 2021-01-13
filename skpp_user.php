<?php 
include 'header_user.php'; 
include 'koneksi.php';?>
<main class="app-content">
	<div class="app-title">
		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Surat Keterangan Penghentian Pembayaran </h1>
				
			</div>
		</div>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Tabel SKPP</h6>
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
								<th>Ditolak</th>
								<th>Selesai</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							$query=mysqli_query($db, "SELECT * FROM skpp");
							while($data=mysqli_fetch_array($query))
								{ ?>
									<tr>
										<td> <?php echo $no++ ?> </td>
										<td> <?php echo $data ['kode_satker'] ?></td>
										<td> <?php echo $data ['nama_satker'] ?></td>
										<td> <?php echo $data ['diterima'] ?></td>
										<td> <?php echo $data ['proses'] ?></td>
										<td> <?php echo $data ['ditolak'] ?></td>
										<td> <?php echo $data ['selesai'] ?></td>
										
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