<link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom/css/card.ios.css') ?>">
<link href="<?= base_url('assets') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

<!-- PNotify -->
<link href="<?= base_url('assets') ?>/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="<?= base_url('assets') ?>/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					<div class="row">
						<div class="col-md-6">
							<?= form_open_multipart('home/rank', ['class' => 'form-horizontal form-label-left']) ?>
								<span class="section">Cari Ruko</span>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="biaya_sewa">Range Biaya Sewa</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select id="biaya_sewa" name="biaya_sewa" class="form-control col-md-7 col-xs-12">
											<option value="">Pilih..</option>
											<?php foreach ($config['biaya_sewa']['values'] as $option): ?>
												<option value="<?= $option['value'] ?>">
													<?php  
														if ($option['min'] === null)
														{
															echo '< ' . 'Rp. ' . number_format($option['max'], 2, ',', '.'); 
														}
														else if ($option['max'] === null)
														{
															echo '> ' . 'Rp. ' . number_format($option['min'], 2, ',', '.');
														}
														else
														{
															echo 'Rp. ' . number_format($option['min'], 2, ',', '.') . ' - ' . 'Rp. ' . number_format($option['max'], 2, ',', '.');
														}
													?>
												</option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="luas_bangunan">Luas Bangunan</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select id="luas_bangunan" name="luas_bangunan" class="form-control col-md-7 col-xs-12">
											<option value="">Pilih..</option>
											<?php foreach ($config['luas_bangunan']['values'] as $option): ?>
												<option value="<?= $option['value'] ?>">
													<?php  
														if ($option['min'] === null)
														{
															echo '< ' . $option['max'] . ' m²'; 
														}
														else if ($option['max'] === null)
														{
															echo '> ' . $option['min'] . ' m²';
														}
														else
														{
															echo  $option['min'] . ' m²' . ' - ' . $option['max'] . ' m²';
														}
													?>
												</option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="akses_menuju_lokasi">Akses Menuju Lokasi</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<p style="padding: 5px;">
											<div class="row">
												<div class="col-md-4">
													<input type="checkbox" name="akses_menuju_lokasi[]" id="akses_menuju_lokasi1" value="Pejalan Kaki" data-parsley-mincheck="1" class="flat" /> Pejalan Kaki
							                        <br/><br/>

							                        <input type="checkbox" name="akses_menuju_lokasi[]" id="akses_menuju_lokasi2" value="Angkutan Umum" class="flat" /> Angkutan Umum
							                        <br/><br/>

							                        <input type="checkbox" name="akses_menuju_lokasi[]" id="akses_menuju_lokasi3" value="Kendaraan Mobil" class="flat" /> Kendaraan Mobil
							                        <br/><br/>
												</div>
												<div class="col-md-4">
													<input type="checkbox" name="akses_menuju_lokasi[]" id="akses_menuju_lokasi4" value="Kendaraan Motor" class="flat" /> Kendaraan Motor
							                        <br/><br/>

							                        <input type="checkbox" name="akses_menuju_lokasi[]" id="akses_menuju_lokasi5" value="Semuanya" class="flat" /> Semuanya
							                        <br/><br/>
												</div>
											</div>
					                    </p>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pusat_keramaian">Pusat Keramaian</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<p style="padding: 5px;">
											<div class="row">
												<div class="col-md-4">
													<input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian1" value="Kantor" data-parsley-mincheck="1" class="flat" /> Kantor
							                        <br/><br/>

							                        <input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian2" value="Mall" class="flat" /> Mall
							                        <br/><br/>

							                        <input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian3" value="Pasar" class="flat" /> Pasar
							                        <br/><br/>

							                        <input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian4" value="Rumah Sakit" class="flat" /> Rumah Sakit
					                        		<br/><br/>
												</div>
												<div class="col-md-4">
													<input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian5" value="Sekolah" class="flat" /> Sekolah
							                        <br/><br/>

							                        <input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian6" value="Kampus" class="flat" /> Kampus
							                        <br/><br/>

							                        <input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian7" value="Tidak Ada" class="flat" /> Tidak Ada
							                        <br/><br/>
												</div>
											</div>
					                    </p>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="zona_parkir">Zona Parkir</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select id="zona_parkir" name="zona_parkir" class="form-control col-md-7 col-xs-12">
											<option value="">Pilih..</option>
											<?php foreach ($config['zona_parkir']['values'] as $option): ?>
												<option value="<?= $option['value'] ?>">
													<?php  
														if ($option['min'] === null)
														{
															echo '< ' . $option['max'] . ' M'; 
														}
														else if ($option['max'] === null)
														{
															echo '> ' . $option['min'] . ' M';
														}
														else
														{
															echo  $option['min'] . ' M' . ' - ' . $option['max'] . ' M';
														}
													?>
												</option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah_pesaing_serupa">Jumlah Pesaing Serupa</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select id="jumlah_pesaing_serupa" name="jumlah_pesaing_serupa" class="form-control col-md-7 col-xs-12">
											<option value="">Pilih..</option>
											<option value="4">Tidak Ada</option>
											<option value="5">1 - 2 Pesaing</option>
											<option value="2">3 - 4 Pesaing</option>
											<option value="1">5 - 6 Pesaing</option>
											<option value="3">&gt; 6 Pesaing</option>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tingkat_konsumtif_masyarakat">Tingkat Konsumtif Masyarakat</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select type="select" id="tingkat_konsumtif_masyarakat" name="tingkat_konsumtif_masyarakat" class="form-control col-md-7 col-xs-12">
											<option value="">Pilih..</option>
											<option value="Sangat Tinggi">Sangat Tinggi</option>
											<option value="Tinggi">Tinggi</option>
											<option value="Cukup Tinggi">Cukup Tinggi</option>
											<option value="Rendah">Rendah</option>
											<option value="Sangat Rendah">Sangat Rendah</option>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lingkungan_lokasi_ruko">Lingkungan Lokasi Ruko</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select type="select" id="lingkungan_lokasi_ruko" name="lingkungan_lokasi_ruko" class="form-control col-md-7 col-xs-12">
											<option value="">Pilih..</option>
											<option value="Pertengahan Kota">Pertengahan Kota</option>
											<option value="Lingkungan Perkampungan">Lingkungan Perkampungan</option>
											<option value="Lingkungan Perumahan">Lingkungan Perumahan</option>
											<option value="Jalan Utama">Jalan Utama</option>
											<option value="Jalan Raya Kota">Jalan Raya Kota</option>
											<option value="Jalan Lintas Kota">Jalan Lintas Kota</option>
										</select>
									</div>
								</div>
		                      
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-6 col-md-offset-3">
										<button type="button" onclick="cari(); return false;" class="btn btn-success">
											<i class="fa fa-search"></i> Cari
										</button>
									</div>
								</div>
		                    <?= form_close() ?>
						</div>
						<div class="col-md-6">
							<div class="promotion-section">
							    <div class="w-container promotion-container">
									<div class="promo-flex" style="margin: 0 !important; overflow-y: scroll; height: 700px;">
										<?php foreach ($ruko as $row): ?>
											<?php  
												$path = 'assets/foto/ruko-' . $row['id_ruko'];
												$foto = scandir(FCPATH . $path);
												$foto = array_values(array_diff($foto, ['.', '..']));
											?>
											<div class="w-clearfix w-preserve-3d promo-card">
												<img width="100%" src="<?= isset($foto[0]) ? base_url($path . '/' . $foto[0]) : 'http://placehold.it/313x313' ?>">
												<div class="blog-bar color-pink"></div>
												<div class="blog-post-text">
													<?= $row['ruko'] ?>
													<div class="blog-description pink-text"><?= 'Rp. ' . number_format($row['biaya_sewa'], 2, ',', '.') ?></div>
												</div>
											</div>
										<?php endforeach; ?>
							      	</div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- PNotify -->
<script src="<?= base_url('assets') ?>/vendors/pnotify/dist/pnotify.js"></script>
<script src="<?= base_url('assets') ?>/vendors/pnotify/dist/pnotify.buttons.js"></script>

<script src="<?= base_url('assets') ?>/vendors/iCheck/icheck.min.js"></script>

<script type="text/javascript">
	function cari() {
		$.ajax({
			url: '<?= base_url('home/rank') ?>',
			type: 'POST',
			data: {},
			beforeSend: function() {

			},
			success: function(response) {

			},
			error: function(error) { console.log(error); }
		});
	}
</script>