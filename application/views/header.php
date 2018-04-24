<html>
<head>
	<meta charset="UTF-8">
	<title>Belajar CI</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Zakat</a>
			</div>
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
							<a href="<?php echo site_url('/status/DataAmil/')?>">Data Amil</a><br>
							<a href="<?php echo site_url('/status/DataMustahiq/')?>">Data Mustahiq</a><br>
							<a href="<?php echo site_url('/status/DataMuzaqi/')?>">Data Muzaqi</a>
						</div>
					</div>
					<li><a data-toggle="collapse" href="#zakat">Zakat</a></li>
					<div id="zakat" class="panel-collapse collapse">
						<div class="panel-body">
							<a href="<?php echo site_url('/zakat/PembagianZakat/')?>">Pembagian Zakat</a>
						</div>
					</div>
					<li><a data-toggle="collapse" href="#dataview">Data View</a></li>
					<div id="dataview" class="panel-collapse collapse">
						<div class="panel-body">
							<a href="<?php echo site_url('/dataview/Status/')?>">Status</a><br>
							<a href="<?php echo site_url('/dataview/Zakat/')?>">Zakat</a>
						</div>
					</div>
				</ul>
			</div>	

