<?php $this->load->view('header');?>
<div class="col-sm-9">
	<legend> Edit Data Pegawai</legend>

		<!-- <?php var_dump($getData) ?> -->
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('aktifitas/Kegiatan/Update/'.$this->uri->segment(4)); ?>

		<div class="form-group">
			<label class="control-label col-sm-2" for="nama">Nama :</label>
			<div class="col-sm-10">
				<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $getData[0]->nama?>" placeholder="Nama"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="nip">Deskripsi :</label>
			<div class="col-sm-10">
				<input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?php echo $getData[0]->deskripsi?>" placeholder="Nip"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="nip">Lokasi :</label>
			<div class="col-sm-10">
				<input type="text" name="lokasi" id="lokasi" class="form-control" value="<?php echo $getData[0]->lokasi?>" placeholder="Nip"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="tanggal">Tanggal :</label>
			<div class="col-sm-10">
				<input type="date" name="tanggal" id="tanggal" class="form-control tanggal1" value="<?php echo $getData[0]->tanggal?>""><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="alamat">jumlah donasi :</label>
			<div class="col-sm-10">
				<input type="text" name="jumlah_donasi" id="alamat" class="form-control" value="<?php echo $getData[0]->jumlah_donasi?>" placeholder="Alamat"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="alamat">penerima :</label>
			<div class="col-sm-10">
				<input type="text" name="penerima" id="alamat" class="form-control" value="<?php echo $getData[0]->penerima?>" placeholder="Alamat"><br>
			</div>
		</div>
			
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="alamat">Foto :</label>
			<div class="col-sm-10">
				<input type="file" name="userfile"><br>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
			</div>
		</div>
</div>
<?php $this->load->view('footer');?>