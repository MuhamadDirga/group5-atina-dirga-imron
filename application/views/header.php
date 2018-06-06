<html>
<head>
	<meta charset="UTF-8">
	<title>Belajar CI</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">

	<!-- datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Amil Zakat</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('Home')?>"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Menu</a>
				<ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
					<li><a data-toggle="collapse" href="#status">Status</a></li>
					<div id="status" class="panel-collapse collapse">
						<div class="panel-body">
							<a href="<?php echo site_url('/status/DataMuzaqi/')?>">Data Muzaqi</a><br>
						</div>
					</div>
					<li><a data-toggle="collapse" href="#zakat">Aktivitas</a></li>
					<div id="zakat" class="panel-collapse collapse">
						<div class="panel-body">
							<a href="<?php echo site_url('/aktifitas/Kegiatan/')?>">Kegiatan</a><br>
							<a href="<?php echo site_url('/aktifitas/Kategori/')?>">Kategori</a><br>
							<a href="<?php echo site_url('/aktifitas/Donasi/')?>">Donasi</a>
						</div>
					</div>
					<li><a href="<?php echo site_url('/admin/Bank')?>">Bank</a></li>
				</ul>
			</div>	

