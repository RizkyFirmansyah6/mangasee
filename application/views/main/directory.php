<?php $this->load->view('main/header'); ?>

<div class="container">
	<div class="col-sm-12 col-md-12">
	<div class="panel directory">
		<div class="panel-heading">
			<b><h3 class="panel-title"><i class="fa fa-folder-open"></i> Directory (<?php  echo count($manga) ?>)</h3></b>
		</div>
		<div class="panel-body box-body">
			<div class="description hidden-xs">
				<p>A full list of all Manga available on MangaSee</p>
			</div>
			<hr> 
			<div id="content" data-spy="scroll" data-target="#pagination">
				<p>#0-9</p>
				<?php  foreach ($manga as $val) {
					if (ctype_alpha(substr($val->title, 0,1)) == false) { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="A">
				<p>A</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'A' || substr($val->title, 0,1) == 'a') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="B">
				<p>B</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'B' || substr($val->title, 0,1) == 'b') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="C">
				<p>C</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'C' || substr($val->title, 0,1) == 'c') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="D">
				<p>D</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'D' || substr($val->title, 0,1) == 'd') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="F">
				<p>F</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'F' || substr($val->title, 0,1) == 'f') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="G">
				<p>G</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'G' || substr($val->title, 0,1) == 'g') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="H">
				<p>H</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'H' || substr($val->title, 0,1) == 'h') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="I">
				<p>I</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'I' || substr($val->title, 0,1) == 'i') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="J">
				<p>J</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'J' || substr($val->title, 0,1) == 'j') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="K">
				<p>K</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'K' || substr($val->title, 0,1) == 'k') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="L">
				<p>L</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'L' || substr($val->title, 0,1) == 'l') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="M">
				<p>M</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'M' || substr($val->title, 0,1) == 'm') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="N">
				<p>N</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'N' || substr($val->title, 0,1) == 'n') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="O">
				<p>O</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'O' || substr($val->title, 0,1) == 'o') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="P">
				<p>P</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'P' || substr($val->title, 0,1) == 'p') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="Q">
				<p>Q</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'Q' || substr($val->title, 0,1) == 'q') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="R">
				<p>R</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'R' || substr($val->title, 0,1) == 'r') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="S">
				<p>S</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'S' || substr($val->title, 0,1) == 's') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="T">
				<p>T</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'T' || substr($val->title, 0,1) == 't') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="U">
				<p>U</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'U' || substr($val->title, 0,1) == 'u') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="V">
				<p>V</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'V' || substr($val->title, 0,1) == 'v') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="W">
				<p>W</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'W' || substr($val->title, 0,1) == 'w') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="X">
				<p>X</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'X' || substr($val->title, 0,1) == 'x') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="Y">
				<p>Y</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'Y' || substr($val->title, 0,1) == 'y') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>
				<hr id="Z">
				<p>Z</p>
				<?php  foreach ($manga as $val) {
					if (substr($val->title, 0,1) == 'Z' || substr($val->title, 0,1) == 'z') { ?>
						<p class="seriesList chapOnly"><a class="ttip" href="<?=site_url('Manga')?>/manga/<?php echo $val->id_manga ?>" title="" target="_BLANK"><?php echo $val->title ?></a><?php if ($val->status == "Completed") {?>
						<span style="color:#E3B754;">Completed</span>
						<?php } ?></p>
					<?php }
				} ?>

			</div>
		</div>
	</div>	
	</div>
</div>


<?php $this->load->view('main/footer'); ?>