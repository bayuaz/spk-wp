                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<div class="d-sm-flex align-items-center justify-content-between mb-4">
                		<h1 class="h3 mb-0 text-gray-800">Alternatif</h1>
                	</div>

                	<!-- Content Row -->
                	<div class="row">
                		<div class="col-lg-9 mb-4">
                			<div class="card shadow mb-4">
                				<div class="card-body ">
                					<table class="table table-hover table-bordered">
                						<thead>
                							<tr>
                								<th>No.</th>
                								<th>Kriteria</th>
                								<th>Nilai</th>
                							</tr>
                						</thead>
                						<tbody>
                							<form action="<?= base_url('alternatif/nilai_act') ?>" method="post"
                								class="form-horizontal">
                								<input type="hidden" name="id" value="<?= $id ?>">
                								<?php foreach($data_kriteria as $key => $kriteria) : ?>
                								<tr>
                									<td><?= empty($kriteria['id_kriteria']) ? '' : $key+1 ?></td>
                									<td><?= empty($kriteria['id_kriteria']) ? '' : $kriteria['kode_kriteria'] . " - " . $kriteria['nama_kriteria'] ?>
                									</td>
                									<td>
                										<input type="number" class="form-control"
                											name="nilai[]"
                											autocomplete="off"
                											value="<?= (in_array($kriteria['id_kriteria'], array_column($data_nilai_alternatif, 'id_kriteria'))) ? $data_nilai_alternatif[$key]['nilai_nilai'] : '' ?>" required>
                									</td>
                								</tr>
                								<?php endforeach; ?>
                						</tbody>
                					</table>
                				</div>
                			</div>
                		</div>
                		<div class=" col-lg-3 mb-4">
                			<div class="card card-primary">
                				<div class="card-body">
                					<h3 class="text-center">
                						<?= empty($detail_alternatif['id_alternatif']) ? '' : $detail_alternatif['kode_alternatif'] ?>
                					</h3>

                					<p class="text-muted text-center">
                						<?= empty($detail_alternatif['id_alternatif']) ? '' : $detail_alternatif['nama_alternatif'] ?>
                					</p>

                					<button href="" class="btn btn-primary btn-block btn-sm"><b>Simpan</b></button>

                					<a href="<?= base_url('alternatif') ?>"
                						class="btn btn-default btn-block btn-sm"><b>Kembali
                							ke Alternatif</b></a>
                					</form>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
