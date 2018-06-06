<?php $this->load->view('header');?>
<div class="col-sm-9">
	<?php //echo form_open('Pegawai/create'); ?>
	<?php echo form_open_multipart('Aktifitas/Kegiatan/Create'); ?>
	
	<?php echo validation_errors(); ?>

	<div class="form-group">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nama">Nama :</label>
			<div class="col-sm-10">
				<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="nip">Deskripsi :</label>
			<div class="col-sm-10">
				<textarea class="form-control" placeholder="Deskripsi" rows="4" name="deskripsi"></textarea><br>
			</div>
		</div>


		<div class="form-group">
			<label class="control-label col-sm-2" for="nip">Lokasi :</label>
			<div class="col-sm-10">
				<input type="text" name="lokasi" id="nip" class="form-control" placeholder="Lokasi"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="tanggal">Tanggal :</label>
			<div class="col-sm-10">
				<input type="date" name="tanggal" id="tanggal" class="form-control"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="nip">Jumlah Donasi :</label>
			<div class="col-sm-10">
				<input type="text" name="jumlah_donasi" id="nip" class="form-control" placeholder="Jumlah Donasi"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="alamat">Penerima :</label>
			<div class="col-sm-10">
				<input type="text" name="penerima" id="alamat" class="form-control" placeholder="Penerima"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="alamat">Foto :</label>
			<div class="col-sm-10">
				<input type="file" name="userfile"><br>
			</div>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
<?php $this->load->view('footer');?>