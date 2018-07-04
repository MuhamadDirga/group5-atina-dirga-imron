<?php $this->load->view('header');?>
<div class="col-sm-9">
	<a href="<?php echo base_url() ?>index.php/status/DataMuzaqi/tambah" class="btn btn-primary" style="margin-bottom: 2rem;">Tambah Data</a>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>No HP</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php foreach ($getData as $value): ?>
				<tr>
					<td><?php echo $value['id'] ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['alamat'] ?></td>
					<td><?php echo $value['kota'] ?></td>
					<td><?php echo $value['nohp'] ?></td>
					<td><?php echo $value['email'] ?></td>
					<td><?php echo $value['username'] ?></td>
					<td><?php echo $value['password'] ?></td>
					<td>
						<a href="<?php echo base_url('index.php/status/DataMuzaqi/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('index.php/status/DataMuzaqi/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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