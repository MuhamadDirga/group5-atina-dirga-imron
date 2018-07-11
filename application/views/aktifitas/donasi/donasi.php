<?php $this->load->view('header');?>
<div class="col-sm-9">
	<a href="<?php echo base_url() ?>index.php/aktifitas/donasi/create" class="btn btn-primary" style="margin-bottom: 2rem;">Tambah Data</a>
	<h4>Saldo Rp.<?php echo $saldo?></h4>
	<br>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<th>ID</th>
				<th>Tanggal</th>
				<th>Jumlah</th>
				<th>Muzaki</th>
				<th>Kategori</th>
				<th>Status</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php foreach ($getData as $key => $value): ?>
					<tr>
						<td><?php echo $value['id'] ?></td>
						<td><?php echo $value['tanggal'] ?></td>
						<td><?php echo $value['jumlah'] ?></td>
						<td><?php echo $value['muzaki'] ?></td>
						<td><?php echo $value['kategori'] ?></td>
						<td><a href="" class="btn btn-sm btn-success">Invoice</a></td>
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
		} );
	} );
</script>
<?php $this->load->view('footer');?>