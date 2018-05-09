<?php $this->load->view('header');?>
<div class="col-sm-9">
	<a href="<?php echo base_url() ?>index.php/aktifitas/donasi/create" class="btn btn-primary" style="margin-bottom: 2rem;">Tambah Data</a>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<th>ID</th>
				<th>Tanggal</th>
				<th>Jumlah</th>
				<th>Muzaki</th>
				<th>Kategori</th>
				<th>Bank</th>
				<th>Status</th>
			</thead>
			<tbody>
				<?php foreach ($getData as $key => $value): ?>
					<tr>
						<td><?php echo $value['id'] ?></td>
						<td><?php echo $value['tanggal'] ?></td>
						<td><?php echo $value['jumlah'] ?></td>
						<td><?php echo $value['nama'] ?></td>
						<td><?php echo $value['nama2'] ?></td>
						<td><?php echo $value['nama3'] ?></td>
						<td>
							<a href="<?php echo base_url('index.php/aktifitas/donasi/Update/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
							<a href="<?php echo base_url('index.php/aktifitas/donasi/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#example').dataTable( {        
			"pageLength": 2 
		} );
	} );
</script>
<?php $this->load->view('footer');?>