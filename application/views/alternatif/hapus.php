                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<div class="d-sm-flex align-items-center justify-content-between mb-4">
                		<h1 class="h3 mb-0 text-gray-800">Alternatif</h1>
                	</div>

                	<!-- Content Row -->
                	<div class="row">

                		<!-- Content Column -->
                		<div class="col-lg-12 mb-4">
                			<!-- Approach -->
                			<div class="card shadow mb-4">
                				<div class="card-header py-3">
                					<h6 class="m-0 font-weight-bold text-primary">Hapus Data</h6>
                				</div>
                				<form class="form-horizontal" method="post"
                					action="<?= base_url('alternatif/hapus_act') ?>">
                					<div class="card-body">
                                        <input type="hidden" name="id" value="<?= $detail_alternatif['id_alternatif'] ?>">
                						<div class="form-group row">
                							<label for="kode" class="col-sm-2 col-form-label">Kode
                								Alternatif</label>
                							<div class="col-sm-4">
                								<input type="text" class="form-control " id="kode"
                									name="kode" value="<?= $detail_alternatif['kode_alternatif'] ?>" autocomplete="off" required disabled>
                							</div>
                						</div>
                						<div class="form-group row">
                							<label for="nama" class="col-sm-2 col-form-label">Nama
                								Alternatif</label>
                							<div class="col-sm-4">
                								<input type="text" class="form-control " id="nama"
                									name="nama" value="<?= $detail_alternatif['nama_alternatif'] ?>" autocomplete="off" required disabled>
                							</div>
                						</div>
                					</div>
                					<div class="card-footer">
                						<div class="col-sm-6 offset-sm-2">
                							<button type="submit" class="btn btn-danger">Hapus</button>
                							<a class="btn btn-secondary" href="<?= base_url('alternatif') ?>">Batal</a>
                						</div>
                					</div>
                				</form>
                			</div>

                		</div>
                	</div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
