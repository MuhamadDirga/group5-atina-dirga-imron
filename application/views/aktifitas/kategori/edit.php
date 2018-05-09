<?php $this->load->view('header');?>
<div class="col-sm-9">
	<?php //echo form_open('Pegawai/create'); ?>
	<?php echo form_open('Aktifitas/Kategori/Update/'.$this->uri->segment(4)); ?>
	
	<?php echo validation_errors(); ?>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama :</label>
		<div class="col-sm-10">
			<input type="text" name="nama" value="<?php echo $getData[0]->nama?>" id="nama" class="form-control" placeholder="Nama"><br>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
<?php $this->load->view('footer');?>