                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<div class="d-sm-flex align-items-center justify-content-between mb-4">
                		<h1 class="h3 mb-2 text-gray-800">Perhitungan</h1>
                	</div>

                	<!-- DataTales Example -->
                	<div class="card shadow mb-4">
                		<div class="card-body">
                			<div class="table-responsive">
                				<table class="table table-hover table-bordered" width="100%" cellspacing="0">
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
                			<hr>
                			<h1 class="h3 mb-2 text-gray-800">Tahap 1 : Mencari Nilai W</h1>
                			<hr>
                			Bobot Tiap Kriteria : <br>
							<?php $jumlah_kriteria = count($data_kriteria); ?>
							W = [<?php foreach($data_kriteria as $key => $kriteria) : 
                			echo $key == $jumlah_kriteria-1 ? $kriteria['bobot_kriteria'] :  $kriteria['bobot_kriteria'].", ";
							endforeach ?>]
                			<hr>
                			Normalisasi Bobot W : <br>
							<?php foreach($data_kriteria as $key => $kriteria) :
							$no = $key+1;
							echo "W" . $no . " = " . $kriteria['bobot_kriteria'] . "/" . $jumlah_bobot . " = " . $kriteria['bobot_kriteria']/$jumlah_bobot . '<br>';
							endforeach;
							?>
                			<hr>
                			Normalisasi Berdasarkan Keuntungan &amp; Biaya : <br>
							<?php foreach($data_kriteria as $key => $kriteria) :
							$no = $key+1;
							$hasil_normalisasi = $kriteria['bobot_kriteria']/$jumlah_bobot;
							$normalisasi_bk = $kriteria['jenis_kriteria'] == 'Biaya' ? ($hasil_normalisasi * -1) : $hasil_normalisasi;
							echo "W" . $no . " = " . $normalisasi_bk . " " . " (" . $kriteria['jenis_kriteria'] . ")" . '<br>';
							endforeach;
							?>
							<hr>
                			<h3 class="page-header">Tahap 2: Mencari Nilai S</h3>
                			<hr>
                			S1 =
                			(2 <sup>0.208</sup>)&nbsp;
                			(3 <sup>0.167</sup>)&nbsp;
                			(5 <sup>0.25</sup>)&nbsp;
                			(3.5 <sup>0.208</sup>)&nbsp;
                			(3 <sup>0.167</sup>)&nbsp;
                			&nbsp;&nbsp; = 3.235
                			<br>
                			S2 =
                			(4 <sup>0.208</sup>)&nbsp;
                			(5 <sup>0.167</sup>)&nbsp;
                			(2 <sup>0.25</sup>)&nbsp;
                			(3.6 <sup>0.208</sup>)&nbsp;
                			(3 <sup>0.167</sup>)&nbsp;
                			&nbsp;&nbsp; = 3.255
                			<br>
                			S3 =
                			(2 <sup>0.208</sup>)&nbsp;
                			(3 <sup>0.167</sup>)&nbsp;
                			(3 <sup>0.25</sup>)&nbsp;
                			(3.21 <sup>0.208</sup>)&nbsp;
                			(2 <sup>0.167</sup>)&nbsp;
                			&nbsp;&nbsp; = 2.613
                			<br>
                			S4 =
                			(3 <sup>0.208</sup>)&nbsp;
                			(4 <sup>0.167</sup>)&nbsp;
                			(2 <sup>0.25</sup>)&nbsp;
                			(3.15 <sup>0.208</sup>)&nbsp;
                			(2 <sup>0.167</sup>)&nbsp;
                			&nbsp;&nbsp; = 2.685
                			<br>

                			<div class="m-5"></div>

                			<h3 class="page-header">Tahap 3: Mencari Nilai V</h3>
                			<hr>
                			V1 =
                			3.235/11.789
                			= 0.274
                			<br>
                			V2 =
                			3.255/11.789
                			= 0.276
                			<br>
                			V3 =
                			2.613/11.789
                			= 0.222
                			<br>
                			V4 =
                			2.685/11.789
                			= 0.228
                			<br>

                			<div class="m-5"></div>

                			<h3 class="page-header">Hasil</h3>
                			<hr>
                		</div>
                	</div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
