<?php $this->load->view('custom/header'); ?>

<div class="container">
	<div class="row">
		<legend> Edit Data wisata</legend>
		<!-- var_dump untuk mengecek isi dari $custom apa saja -->
		<?php 
		//echo "<pre>";
		//var_dump($custom); ?>
		<?php //echo validation_errors(); ?>
		<!-- echo form_open('custom/update/'.$this->url->segment(3)) artinya adalah menjalankan controler custom,function update
		dan segment ke tiga -->
		<!-- penjelasan segment
		url segment ci yang  dikatakan
		1.segment pertama adalah class atau controller
		2.segment kedua adalah nama method atau function
		3.segment ketiga adalah berupa data berbentuk id yang dikirim
		jadi segment ci itu dihitung dari index.php -->
		<?php //echo form_open('custom/update/'.$this->uri->segment(3)); ?>
		<form class="form-horizontal" id="update">
		<div class="form-group">
			<label class="control-label col-sm-2" for="judul">Judul :</label>
			<div class="col-sm-10">
				<!-- PENJELASAN DARI =
				1.Nama pada value adalah nama dari field tablemu sesuaikan huruf besar atau kecil
				2.$custom[0]= dikarenakan data yang diambil dari model berupa data berbentuk array of object dan mengambil array pertama yaitu [0] -->
				<input type="text" name="judul" class="form-control" id="judul" value="<?php echo $wisata[0]->judul ?>" placeholder="Judul"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="tempat">Tempat :</label>
			<div class="col-sm-10">
				<input type="text" name="tempat" class="form-control" id="tempat" value="<?php echo $wisata[0]->tempat ?>" placeholder="Tempat"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="provinsi">Provinsi :</label>
			<div class="col-sm-10">
				<input type="text" name="provinsi" class="form-control" id="provinsi" value="<?php echo $wisata[0]->provinsi ?>" placeholder="Provinsi"><br>
			</div>
		</div>

		<div class="form-group">
		 		<input type="hidden" name="foto_lama" class="form-control" id="foto_lama" value="<?php echo $wisata[0]->gambar ?>"><br>
		 </div>

		 <div class="form-group">
		 		<input type="hidden" name="key" class="form-control" id="key" value="edit"><br>
		 </div>

		 <div class="form-group">
		 		<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $wisata[0]->id ?>"><br>
		 </div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="foto">Foto :</label>
			<div class="col-sm-10">
				<input type="file" name="file" id="foto"><br>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="deskripsi">Deskripsi :</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $wisata[0]->deskripsi ?></textarea><br>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Update</button>
				<?php //echo form_close(); ?>
			</div>
		</div>
		</form>>
	</div>
</div>

<?php $this->load->view('custom/footer'); ?>