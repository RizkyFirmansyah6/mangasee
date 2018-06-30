<?php $this->load->view('custom/header'); ?>

<div class="row">
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 margin_detail">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="panel-title"><?php echo $wisata[0]->judul?></h1>
				<h5>tempat : <?php echo $wisata[0]->tempat?>, <?php echo $wisata[0]->provinsi?> &nbsp |&nbsp  Post : <?php echo $wisata[0]->tanggal?>
			</div>
			<div class="panel-body">
				<center>
					<img class="img-responsive" src="<?=base_url()?>./assets/images/<?php echo $wisata[0]->gambar ?>" width="500" height="350">	
				</center>
				<br>
				<?php echo $wisata[0]->deskripsi?>
			</div>
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 margin_lastupdate">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h4>&nbsp&nbsp&nbsp&nbspLast Update</h4>
			</div>
			<div class="panel-body">
				<?php foreach ($wisata_builder_object as $key) { ?>
					<div class="row">
						<div class="col-md-offset-1">
						        <div class="col-sm-4">
						          <img class="img-responsive" src="<?=base_url()?>./assets/images/<?php echo $key->gambar ?>" >
						        </div>
						        <div class="col-sm-8">
						          <a  href="<?=site_url()?>/custom/detailWisata/<?php echo $key->id?>"><strong><?php echo $key->judul ?></strong></a>
						          <br>Lokasi : <?php echo $key->tempat ?>
						          <br>Post : <?php echo $key->tanggal ?> 

						    	</div>  
						</div>
					</div>
					<br>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('custom/footer'); ?>