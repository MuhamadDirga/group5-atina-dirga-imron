<?php $this->load->view('header');?>
<div class="col-sm-9">
	<a href="<?php echo base_url() ?>index.php/aktifitas/kegiatan/create" class="btn btn-primary" style="margin-bottom: 2rem;">Tambah Data</a>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<th>ID</th>
				<th>Nama</th>
				<th>Deskripsi</th>
				<th>Lokasi</th>
				<th>Tanggal</th>
				<th>Jumlah Donasi</th>
				<th>Penerima</th>
				<th>Gambar</th>
				<th>Status</th>
			</thead>
			<tbody>
				<?php foreach ($getData as $key => $value): ?>
					<tr>
						<td><?php echo $value['id'] ?></td>
						<td><?php echo $value['nama'] ?></td>
						<td><?php echo $value['deskripsi'] ?></td>
						<td><?php echo $value['lokasi'] ?></td>
						<td><?php echo $value['tanggal'] ?></td>
						<td><?php echo $value['jumlah_donasi'] ?></td>
						<td><?php echo $value['penerima'] ?></td>
						<td><img height="100" width="100" src=<?=base_url("assets/uploads")."/".$value['Image']?>></td>
						<td>
							<a href="<?php echo base_url('index.php/aktifitas/Kegiatan/Update/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
							<a href="<?php echo base_url('index.php/aktifitas/kegiatan/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer');?>