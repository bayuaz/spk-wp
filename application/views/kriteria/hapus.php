                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<div class="d-sm-flex align-items-center justify-content-between mb-4">
                		<h1 class="h3 mb-0 text-gray-800">Kriteria</h1>
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
                					action="<?= base_url('kriteria/hapus_act') ?>">
                					<div class="card-body">
                                        <input type="hidden" name="id" value="<?= $detail_kriteria['id_kriteria'] ?>">
                						<div class="form-group row">
                							<label for="kode" class="col-sm-2 col-form-label">Kode
                								Kriteria</label>
                							<div class="col-sm-4">
                								<input type="text" class="form-control " id="kode"
                									name="kode" value="<?= $detail_kriteria['kode_kriteria'] ?>" autocomplete="off" required disabled>
                							</div>
                						</div>
                						<div class="form-group row">
                							<label for="nama" class="col-sm-2 col-form-label">Nama
                								Kriteria</label>
                							<div class="col-sm-4">
                								<input type="text" class="form-control " id="nama"
                									name="nama" value="<?= $detail_kriteria['nama_kriteria'] ?>" autocomplete="off" required disabled>
                							</div>
                						</div>
                						<div class="form-group row">
                							<label for="jenis" class="col-sm-2 col-form-label">Jenis Kriteria</label>
                							<div class="col-sm-4">
                								<select name="jenis" id="jenis" class="form-control" autocomplete="off" required disabled>
                									<option value="" selected="selected" disabled>Pilih</option>
                									<option value="Keuntungan" <?= $detail_kriteria['jenis_kriteria'] == 'Keuntungan' ? 'selected' : ''; ?>>Keuntungan</option>
                									<option value="Biaya" <?= $detail_kriteria['jenis_kriteria'] == 'Biaya' ? 'selected' : ''; ?>>Biaya</option>
                								</select>
                							</div>
                						</div>
                						<div class="form-group row">
                							<label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                							<div class="col-sm-4">
                								<input type="number" class="form-control " id="bobot" name="bobot"
                									value="<?= $detail_kriteria['bobot_kriteria'] ?>" autocomplete="off" required disabled>
                							</div>
                						</div>
                					</div>
                					<div class="card-footer">
                						<div class="col-sm-6 offset-sm-2">
                							<button type="submit" class="btn btn-danger">Hapus</button>
                							<a class="btn btn-secondary" href="<?= base_url('kriteria') ?>">Batal</a>
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
