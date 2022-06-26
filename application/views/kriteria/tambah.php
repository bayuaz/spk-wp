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
                					<h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                				</div>
                				<form class="form-horizontal" method="post"
                					action="<?= base_url('kriteria/tambah_act') ?>">
                					<div class="card-body">
                						<div class="form-group row">
                							<label for="kode" class="col-sm-2 col-form-label">Kode
                								Kriteria</label>
                							<div class="col-sm-4">
                								<input type="text" class="form-control " id="kode"
                									name="kode" value="<?= set_value('kode') ?>" placeholder="Contoh: K1, K2, C3, dll" autocomplete="off" required>
                							</div>
                						</div>
                						<div class="form-group row">
                							<label for="nama" class="col-sm-2 col-form-label">Nama
                								Kriteria</label>
                							<div class="col-sm-4">
                								<input type="text" class="form-control " id="nama"
                									name="nama" value="<?= set_value('nama') ?>" placeholder="Contoh: IPK, Usia, dll" autocomplete="off" required>
                							</div>
                						</div>
                						<div class="form-group row">
                							<label for="jenis" class="col-sm-2 col-form-label">Jenis Kriteria</label>
                							<div class="col-sm-4">
                								<select name="jenis" id="jenis" class="form-control" autocomplete="off" required>
                									<option value="" selected="selected" disabled>Pilih</option>
                									<option value="Keuntungan" <?= set_select('jenis', 'Keuntungan'); ?>>Keuntungan</option>
                									<option value="biaya" <?= set_select('jenis', 'Biaya'); ?>>Biaya</option>
                								</select>
                							</div>
                						</div>
                						<div class="form-group row">
                							<label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                							<div class="col-sm-4">
                								<input type="number" class="form-control " id="bobot" name="bobot"
                									value="<?= set_value('bobot') ?>" placeholder="Isi dengan angka" autocomplete="off" required>
                							</div>
                						</div>
                					</div>
                					<div class="card-footer">
                						<div class="col-sm-6 offset-sm-2">
                							<button type="submit" class="btn btn-primary">Simpan</button>
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
