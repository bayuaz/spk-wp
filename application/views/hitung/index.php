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
								echo "W" . $no . " = " . $kriteria['bobot_kriteria'] . "/" . $jumlah_bobot . " = " . round($kriteria['bobot_kriteria']/$jumlah_bobot, 3) . '<br>';
							endforeach;
							?>
                			<hr>
                			Normalisasi Berdasarkan Keuntungan &amp; Biaya : <br>
							<?php foreach($data_kriteria as $key => $kriteria) :
								$no = $key+1;
								$hasil_normalisasi = $kriteria['bobot_kriteria']/$jumlah_bobot;
								$normalisasi_bk = $kriteria['jenis_kriteria'] == 'Biaya' ? ($hasil_normalisasi * -1) : $hasil_normalisasi;
								echo "W" . $no . " = " . round($normalisasi_bk, 3) . " " . " (" . $kriteria['jenis_kriteria'] . ")" . '<br>';
							endforeach;
							?>
							<hr>
                			<h3>Tahap 2 : Mencari Nilai S</h3>
                			<hr>
							<?php $hasil_kali = [];
							foreach($data_nilai as $key => $nilai) :
								$hasil_pangkat = [];
								$no = $key+1;
								$detail_nilai = explode(",", $nilai['nilai']);
								$jumlah_nilai = count($detail_nilai);
								echo "S" . $no . " = ";

								foreach($detail_nilai as $key_detail => $detail) :
									$hasil_normalisasi = $data_kriteria[$key_detail]['bobot_kriteria']/$jumlah_bobot;
									$normalisasi_bk = $data_kriteria[$key_detail]['jenis_kriteria'] == 'Biaya' ? ($hasil_normalisasi * -1) : $hasil_normalisasi;
									$hasil_pangkat[$key_detail] = round(pow($detail, round($normalisasi_bk, 3)), 3);
									echo "(" . $detail. " <sup>" . round($normalisasi_bk, 3) . "</sup>";
									echo $key_detail == $jumlah_nilai-1 ? ") = " : ") * ";
								endforeach;
								
								$hasil_kali[$key] =  round(array_product($hasil_pangkat), 3);
								echo round(array_product($hasil_pangkat), 3) . '<br>';
							endforeach; ?>
							<hr>
                			<h3>Tahap 3 : Mencari Nilai V</h3>
                			<hr>
							<?php  $jumlah_s = array_sum($hasil_kali);
							$hasil_akhir = [];
							foreach($hasil_kali as $key => $hasil) :
								$no = $key+1;
								$hasil_akhir[$key]['nama'] = $data_alternatif[$key]['nama_alternatif'];
								$hasil_akhir[$key]['nilai'] = round($hasil/$jumlah_s, 3);
								echo "V" . $no . " = " . $hasil . "/" . $jumlah_s . " = " . round($hasil/$jumlah_s, 3) . "<br>";
							endforeach;
							?>
							<hr>
                			<h3>Hasil</h3>
                			<hr>
							<?php
							function cmp($a, $b) {
								if ($a['nilai'] == $b['nilai']) {
									return 0;
								}
								return ($a['nilai'] < $b['nilai']) ? 1 :- 1;
							} 
							
							uasort($hasil_akhir, 'cmp');
							?>
							
							<div class="table-responsive">
                				<table class="table table-hover table-bordered" width="100%" cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>Alternatif</th>
                							<th>Nilai</th>
                						</tr>
                					</thead>
                					<tfoot>
                						<tr>
                							<th>No</th>
                							<th>Alternatif</th>
                							<th>Nilai</th>
                						</tr>
                					</tfoot>
                					<tbody>
                						<?php $no = 0;
										foreach($hasil_akhir as $key => $nilai_akhir) :?>
                						<tr>
                							<td <?= $no == 0 ? 'class="text-success"' : '' ?>><?= ++$no ?></td>
                							<td <?= $no == 1 ? 'class="text-success"' : '' ?>><?= $no == 1 ? $hasil_akhir[$key]['nama'] . " <small>(alternatif terbaik)</small><i class='fas fa-check pl-2'></i>" : $hasil_akhir[$key]['nama'] ?></td>
                							<td <?= $no == 1 ? 'class="text-success"' : '' ?>><?= $hasil_akhir[$key]['nilai'] ?></td>
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
