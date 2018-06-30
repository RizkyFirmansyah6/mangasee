<?php $this->load->view('custom/header'); ?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"> Daftar Wisata</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Judul</th>
						<th>Tempat</th>
						<th>Provinsi</th>
						<th>Tanggal</th>
						<th>Gambar</th>
						<th>Deskripsi</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($wisata as $key) { ?>
					<tr>
						<td><?php echo $key->judul ?></td>
						<td><?php echo $key->tempat ?></td>
						<td><?php echo $key->provinsi ?></td>
						<td><?php echo $key->tanggal ?></td>
						<td><img src="<?php echo base_url().'assets/images/'?><?php echo $key->gambar ?>" alt="" class="img-responsive"></td>
						<td><?php echo $key->deskripsi ?></td>
						
						<td><a href="<?php echo site_url(); ?>/custom/Update/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>

						<td><a href="<?php echo site_url(); ?>/custom/delete/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>

					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('custom/footer'); ?>