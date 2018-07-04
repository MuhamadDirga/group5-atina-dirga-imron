<?php $this->load->view('header');?>
<div class="col-sm-9">
	<a href="<?php echo base_url() ?>index.php/aktifitas/kategori/create" class="btn btn-primary" style="margin-bottom: 2rem;">Tambah Data</a>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<th>ID</th>
				<th>Nama</th>
				<th>Status</th>
			</thead>
			<tbody>
				<?php foreach ($getData as $key => $value): ?>
					<tr>
						<td><?php echo $value['id'] ?></td>
						<td><?php echo $value['nama'] ?></td>
						<td>
							<a href="<?php echo base_url('index.php/aktifitas/kategori/Update/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
							<a href="<?php echo base_url('index.php/aktifitas/kategori/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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