                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<div class="d-sm-flex align-items-center justify-content-between mb-4">
                		<h1 class="h3 mb-2 text-gray-800">Perhitungan</h1>
                	</div>

                	<!-- DataTales Example -->
                	<div class="card shadow mb-4">
                		<div class="card-header py-3">
                			<div class="row">
                				<div class="col-lg-6">
                					<h6 class="m-0 font-weight-bold text-primary">Data Kriteria</h6>
                				</div>
                				<div class="col-lg-6">
                					<a href="<?= base_url('kriteria/tambah') ?>"
                						class="btn btn-primary btn-icon-split float-right">
                						<span class="icon text-white-50">
                							<i class="fas fa-plus"></i>
                						</span>
                						<span class="text">Tambah Data</span>
                					</a>
                				</div>
                			</div>
                		</div>
                		<div class="card-body">
                			<div class="table-responsive">
                				<table class="table table-hover table-bordered" id="dataTable" width="100%"
                					cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>Alternatif</th>
                							<?php foreach($data_kriteria as $kriteria) : ?>
                							<th><?= $kriteria['nama_kriteria'] ?></th>
                							<?php endforeach; ?>
                						</tr>
                					</thead>
                					<tfoot>
                						<tr>
                							<th>No</th>
                							<th>Alternatif</th>
                							<?php foreach($data_kriteria as $kriteria) : ?>
                							<th><?= $kriteria['nama_kriteria'] ?></th>
                							<?php endforeach; ?>
                						</tr>
                					</tfoot>
                					<tbody>
                						<?php foreach($data_nilai as $key => $nilai_alternatif) : ?>
                						<tr>
											<td><?= $key+1 ?></td>
                							<td><?= $nilai_alternatif['nama_alternatif'] ?></td>
                							<?php $nilai = explode(",", $nilai_alternatif['nilai']);

											foreach($nilai as $detail_nilai) :
											?>
                							<td><?= $detail_nilai ?></td>
                							<?php endforeach; ?>
                						</tr>
                						<?php endforeach; ?>
                					</tbody>
                				</table>
                			</div>
                		</div>
                	</div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
