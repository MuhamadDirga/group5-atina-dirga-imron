<?php $this->load->view('header');?>
<div class="col-sm-9">
	<?php //echo form_open('Pegawai/create'); ?>
	<?php echo form_open('Aktifitas/Donasi/Create'); ?>
	
	<?php echo validation_errors(); ?>

	<div class="form-group">
		<label class="control-label col-sm-2" for="tanggal">Tanggal :</label>
		<div class="col-sm-10">
			<input type="date" name="tanggal" id="tanggal" class="form-control"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Jumlah :</label>
		<div class="col-sm-10">
			<input type="text" name="jumlah" id="nama" class="form-control" placeholder="Jumlah"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Muzaki :</label>
		<div class="col-sm-10">
			<select name="muzaki" class="form-control" id="sel1">
				<?php foreach ($getDataMuzaki as $key): ?>
				<option value="<?php echo $key->id?>"><?php echo $key->nama?></option>
				<?php endforeach ?>
			</select><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Kategori :</label>
		<div class="col-sm-10">
			<select name="kategori" class="form-control" id="sel1">
				<?php foreach ($getDataKategori as $key): ?>
				<option value="<?php echo $key->id?>"><?php echo $key->nama?></option>
				<?php endforeach ?>
			</select><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Bank :</label>
		<div class="col-sm-10">
			<select name="bank" class="form-control" id="sel1">
				<?php foreach ($getDataBank as $key): ?>
				<option value="<?php echo $key->id?>"><?php echo $key->nama?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
<?php $this->load->view('footer');?>