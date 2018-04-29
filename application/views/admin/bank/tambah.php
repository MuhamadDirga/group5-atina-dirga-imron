<?php $this->load->view('header');?>
<div class="col-sm-9">
	<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/admin/bank/tambah') ?>">
		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
			</div>
		</div>
		<div class="form-group">
			<label for="norek" class="col-sm-2 control-label">No Rekening</label>
			<div class="col-sm-10">
				<input type="text" name="norek" class="form-control" id="norek" placeholder="No Rekening">
			</div>
		</div>
		<div class="form-group">
			<label for="saldo" class="col-sm-2 control-label">Saldo</label>
			<div class="col-sm-10">
				<input type="text" name="saldo" class="form-control" id="saldo" placeholder="Saldo">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('footer');?>