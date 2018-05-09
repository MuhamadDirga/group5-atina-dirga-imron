<?php $this->load->view('header');?>
<div class="col-sm-9">
	<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/status/DataMuzaqi/update/'.$getData['id']) ?>">
		<?php echo validation_errors(); ?>
		<input type="hidden" name="id" class="form-control" id="nama" placeholder="Nama">
		<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php echo $getData['nama'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="norek" class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="norek" placeholder="No Rekening" value="<?php echo $getData['alamat'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="saldo" class="col-sm-2 control-label">Kota</label>
			<div class="col-sm-10">
				<input type="text" name="kota" class="form-control" id="saldo" placeholder="Saldo" value="<?php echo $getData['kota'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="saldo" class="col-sm-2 control-label">No Hp</label>
			<div class="col-sm-10">
				<input type="text" name="nohp" class="form-control" id="saldo" placeholder="Saldo" value="<?php echo $getData['nohp'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="saldo" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="saldo" placeholder="Saldo" value="<?php echo $getData['email'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="saldo" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="saldo" placeholder="Saldo" value="<?php echo $getData['username'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="saldo" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control" id="saldo" placeholder="Saldo" value="<?php echo $getData['password'] ?>">
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