<?php $this->load->view('header');?>
<div class="col-sm-9">
	<div>DONASI</div>
	<a href="<?php echo base_url() ?>index.php/zakat/donasi/tambah" class="btn btn-primary" style="margin-bottom: 2rem;">Tambah Data</a>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<th>#</th>
			<th>Id</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $value['id'] ?></td>
					<td><?php echo $value['tanggal'] ?></td>
					<td><?php echo $value['jumlah'] ?></td>
					<td>
						<a href="<?php echo base_url('index.php/zakat/donasi/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('index.php/zakat/donasi/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer');?>