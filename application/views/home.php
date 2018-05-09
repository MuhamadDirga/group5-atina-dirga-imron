<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('/aktifitas/Kegiatan/')?>">Admin</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<?php foreach ($saldo as $value) {
		$saldo_saat_ini = $value['saldo'];
	}?>
<main>
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="my-4">Donasi untuk umat
				<br>
				<small>Sisihkan sebagian hartamu</small>
				<br>
				<h4>Total dana yang terkumpul sebanyak Rp.<?php echo $saldo_saat_ini?></h4>
			</h1>
		</div>
	</section>
	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
				<?php foreach ($all_artikel as $value): ?>
					<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
						<div class="card">
							<img class="card-img-top" src=<?=base_url("assets/uploads")."/".$value['Image']?>>
							<div class="card-block">
								<h4 class="card-title"><?php echo $value['nama'] ?></h4>
								<div class="meta">
									<a>Description</a>
								</div>
								<div class="card-text">
									<?php echo $value['deskripsi'] ?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<br>
			<?php
        // $links ini berasal dari fungsi pagination
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
			if (isset($links)) {
				echo $links;
			}
			?>
		</div>
	</div>
</main>
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright@Group5CI</p>
		</div>
		<!-- /.container -->
	</footer>
</body>
</html>