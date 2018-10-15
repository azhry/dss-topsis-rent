<link href="<?= base_url('assets') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					<?= form_open('pemilik/tambah-ruko', ['class' => 'form-horizontal form-label-left']) ?>
						<span class="section">Informasi Ruko</span>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ruko">Alamat Ruko  <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="ruko" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" name="ruko" placeholder="Contoh: Jl. Mangkunegara" required="required" type="text"/>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="biaya_sewa">Biaya Sewa <span class="required">*</span></label>
							<div class="col-md-3 col-sm-3 col-xs-12 input-group" style="padding-left: 10px;">
								<span class="input-group-addon" aria-hidden="true">Rp.</span>
								<input type="number" id="biaya_sewa" name="biaya_sewa" required="required" min="1" class="form-control">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="luas_bangunan">Luas Bangunan <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12 input-group" style="padding-left: 10px;">
								<input type="number" id="luas_bangunan" name="luas_bangunan" required="required" min="1" class="form-control col-md-7 col-xs-12">
								<span class="input-group-addon" aria-hidden="true">m²</span>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="akses_menuju_lokasi">Akses Menuju Lokasi <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<p style="padding: 5px;">
									<div class="row">
										<div class="col-md-4">
											<input type="checkbox" name="akses_menuju_lokasi[]" id="akses_menuju_lokasi1" value="Pejalan Kaki" data-parsley-mincheck="1" required class="flat" /> Pejalan Kaki
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pusat_keramaian">Pusat Keramaian <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<p style="padding: 5px;">
									<div class="row">
										<div class="col-md-4">
											<input type="checkbox" name="pusat_keramaian[]" id="pusat_keramaian1" value="Kantor" data-parsley-mincheck="1" required class="flat" /> Kantor
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="zona_parkir">Zona Parkir <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12 input-group" style="padding-left: 10px;">
								<input type="number" id="zona_parkir" name="zona_parkir" required="required" min="1" class="form-control col-md-7 col-xs-12">
								<span class="input-group-addon" aria-hidden="true">m²</span>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah_pesaing_serupa">Jumlah Pesaing Serupa <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="number" id="jumlah_pesaing_serupa" name="jumlah_pesaing_serupa" required="required" min="0" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tingkat_konsumtif_masyarakat">Tingkat Konsumtif Masyarakat <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select type="select" id="tingkat_konsumtif_masyarakat" name="tingkat_konsumtif_masyarakat" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" required="required">
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lingkungan_lokasi_ruko">Lingkungan Lokasi Ruko <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select type="select" id="lingkungan_lokasi_ruko" name="lingkungan_lokasi_ruko" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" required="required">
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
								<button type="reset" class="btn btn-primary">Reset</button>
								<input id="submit" type="submit" class="btn btn-success" value="Submit"/>
							</div>
						</div>
                    <?= form_close() ?>
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- validator -->
<script src="<?= base_url('assets') ?>/custom/js/validator.js"></script>

<script src="<?= base_url('assets') ?>/vendors/iCheck/icheck.min.js"></script>
