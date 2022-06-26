                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<div class="d-sm-flex align-items-center justify-content-between mb-4">
                		<h1 class="h3 mb-2 text-gray-800">Alternatif</h1>
                	</div>

                	<!-- DataTales Example -->
                	<div class="card shadow mb-4">
                		<div class="card-header py-3">
                			<div class="row">
                				<div class="col-lg-6">
                					<h6 class="m-0 font-weight-bold text-primary">Data Alternatif</h6>
                				</div>
                				<div class="col-lg-6">
                					<a href="<?= base_url('alternatif/tambah') ?>" class="btn btn-primary btn-icon-split float-right">
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
                				<table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>Kode Alternatif</th>
                							<th>Nama Alternatif</th>
                							<th>Nilai</th>
                							<th>Aksi</th>
                						</tr>
                					</thead>
                					<tfoot>
                						<tr>
                							<th>No</th>
                							<th>Kode Alternatif</th>
                							<th>Nama Alternatif</th>
                							<th>Nilai</th>
                							<th>Aksi</th>
                						</tr>
                					</tfoot>
                					<tbody>
										<?php foreach($data_alternatif as $key => $alternatif) : ?>
                						<tr>
                							<td><?= $key+1 ?></td>
                							<td><?= $alternatif['kode_alternatif'] ?></td>
                							<td><?= $alternatif['nama_alternatif'] ?></td>
                							<td>
                                            <a href="<?= base_url('alternatif/nilai/'.$alternatif['id_alternatif']) ?>" class="btn btn-primary btn-sm btn-icon-split">
												<span class="icon text-white-50">
													<i class="fas fa-book"></i>
												</span>
												<span class="text">Isi</span>
											</a>
                                            </td>
                							<td>
											<a href="<?= base_url('alternatif/ubah/'.$alternatif['id_alternatif']) ?>" class="btn btn-success btn-sm btn-icon-split">
												<span class="icon text-white-50">
													<i class="fas fa-pen"></i>
												</span>
												<span class="text">Ubah</span>
											</a>
											<a href="<?= base_url('alternatif/hapus/'.$alternatif['id_alternatif']) ?>" class="btn btn-danger btn-sm btn-icon-split" onclick="anchorDeleteWithConfirmation(event, this)">
											<span class="icon text-white-50">
													<i class="fas fa-trash"></i>
												</span>
												<span class="text">Hapus</span>
											</a>
											</td>
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
