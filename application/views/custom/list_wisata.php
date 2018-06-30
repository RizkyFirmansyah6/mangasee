<?php $this->load->view('custom/header'); ?>

<?php 	$rows=1;?>
<style>
	.row-bordered:after {
	  content: "";
	  display: block;
	  border-bottom: 2px solid #ccc;
	  margin: 0 15px;
	}
</style>

<div class="container">
	<div class="row-bordered">
		<h1 align="center">List Daftar Wisata</h1>
	</div>
	<br><br>

	<?php
	if ($wisata_builder_object==null) { ?>
			<div class="jumbotron">
				<div class="container">
					<h1>Data Kosong</h1>
				</div>
			</div>
	<?php }else{
	foreach ($wisata_builder_object as $key) { 

		if($rows%4 == 1){  ?>
			<div class="row">
<?php   } ?>
			
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			        <div class="thumbnail">
			          <img class="img-responsive" src="<?=base_url()?>./assets/images/<?php echo $key->gambar ?>">
			          <h4 align="center"><a  href="<?=site_url()?>/custom/detailWisata/<?php echo $key->id?>"><strong><?php echo $key->judul ?></strong></a></h4>
			          <p align="center"><?php echo $key->tempat ?></p>
			          <center>
				          <a href="<?=site_url()?>/custom/detailWisata/<?php echo $key->id?>"><button type="button" class="btn btn-default">
					   		  <span class="glyphicon glyphicon-search"></span> Detail
						  </button></a>
					  </center>
			    	</div>  
			</div>

<?php	if($rows%4 == 0){  ?>
			</div>
<?php   } $rows++; 
	}
	} ?>  

</div>

	<ul class="pager">
		<li><a href="#">Previous</a></li>
		<?php 
			echo $this->pagination->create_links();
		?>
  		<li><a href="#">Next</a></li>
	</ul>

<?php $this->load->view('custom/footer'); ?>
