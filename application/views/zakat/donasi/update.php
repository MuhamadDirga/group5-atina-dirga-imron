<?php $this->load->view('header');?>
<div class="col-sm-9">
	<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/zakat/donasi/update/'.$getData['id']) ?>">
		<?php echo validation_errors(); ?>
		
		</div>
		<div class="form-group">
			<label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
			<div class="col-sm-10">
				<input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" value="<?php echo $getData['tanggal'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
			<div class="col-sm-10">
				<input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" value="<?php echo $getData['jumlah'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Ubah Data</button>
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('footer');?>