<?php $this->load->view('header');?>
<div class="col-sm-9">
	<a href="<?php echo base_url() ?>index.php/admin/bank/tambah" class="btn btn-primary" style="margin-bottom: 2rem;">Tambah Data</a>
	<h4>Saldo Rp.<?php echo $saldo?></h4>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<th>#</th>
			<th>Nama</th>
			<th>No Rek</th>
			<th>Saldo</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?> 
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['norek'] ?></td>
					<td><?php echo $value['saldo'] ?></td>
					<td>
						<a href="<?php echo base_url('index.php/admin/bank/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('index.php/admin/bank/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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