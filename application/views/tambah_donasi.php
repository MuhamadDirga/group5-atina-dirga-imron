<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link">Home</a>
					</li>
					<?php if ($this->session->userdata('login')['user_login'] == 'muzaki'): ?>
					<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/aktifitas/Donasi/create_user')?>">Donasi</a>
					</li>
				<?php else: ?>	
					<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/aktifitas/Kegiatan/')?>">Admin</a>
					</li>
					<?php endif ?>
					<li class="nav-item">
						<?php if ($this->session->userdata('login') == null): ?>
							<a class="nav-link" href="<?php echo site_url('Login')?>">Login</a>
						<?php else: ?>	
							
							<a class="nav-link" href="<?php echo site_url('Login/logout')?>">Logout</a>		
						<?php endif ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<br>	<br>	<br>	
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
<?php echo form_open('aktifitas/Donasi/create_user') ?>
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
			<input type="hidden" name="muzaki" value="<?php echo $this->session->userdata('login')['id'] ?>">
			<input type="text" class="form-control" disabled value="<?php echo $this->session->userdata('login')['nama'] ?>"><br>
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
</div>
</div>
	<?php $this->load->view('footer');?>