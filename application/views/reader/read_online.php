<?php $this->load->view('reader/header'); ?>

<?php 
	$title = $detail[0]->title;
	$chap = $this->uri->segment(4);
	$page = 1;
	$images = $detail[$page-1]->image;
 ?>

 <div class="modal fade" id="modalWarning">
 	<div class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title">404 Not Found</h4>
 			</div>
 			<div class="modal-body">
 				<p id="warning"></p>
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
 			</div>
 		</div>
 	</div>
 </div>

<div class="mainWrapper">
	<div class="container containerNav">
		<div class="row" style="margin-bottom:10px;">
			<div class="col-xs-7">
				<input type="hidden" class="SeriesName" value="<?php echo $title ?>">
				<input type="hidden" id="judul" value="<?php echo $title ?>">
				<input type="hidden" id="mangaid" value="<?php echo $detail[0]->id_manga ?>">
				<input type="hidden" id="chapte" value="<?php echo $chap ?>">
				<input type="hidden" id="pag" value="<?php echo $page ?>">
				<input type="hidden" id="lastChapter" value="<?php echo end($chapter)->chapter ?>">
				<input type="hidden" id="lastPage" value="<?php echo end($detail)->page ?>">

				<a class="list-link" href="<?=site_url()?>/Manga/manga/<?php echo $detail[0]->id_manga ?>" style="">
					<span class="hidden-xs">
						<?php echo $title ?>					</span>
					<span class="hidden-lg hidden-md hidden-sm">
						<i class="fa fa-list-ul"></i>
						Chapters
					</span>
				</a>
				<i class="fa fa-angle-right"></i>
				<span class="hidden-xs">Chapter </span>
				<span class="CurChapter" id="curChapter"><?php echo $chap ?></span><span class="hidden-lg hidden-md hidden-sm PageHolder">:<span class="CurPage"><?php echo $detail[0]->page ?></span></span>
			</div>
			<div class="col-xs-5">
				<select class="input-xs hidden-xs ChapterSelect" id="chapterSelect" onchange="chapterTop();">
					<?php foreach ($chapter as $key) {
							if ($key->chapter == $chap) {
								echo "<option value='".$key->chapter."' selected=''>Chapter ".$key->chapter."</option>";
							}
							else {
								echo "<option value='".$key->chapter."'>Chapter ".$key->chapter."</option>";
							}
						} ?>
				</select>

				<select class="input-xs hidden-xs PageSelect" id="pageSelect" onchange="pageTop();">
					<?php foreach ($detail as $key) {
							if ($key->page == 1) {
								echo "<option value='".$key->page."' selected=''>Page ".$key->page."</option>";
							}
							else {
								echo "<option value='".$key->page."'>Page ".$key->page."</option>";
							}
						} ?>
				</select>
				<button class="btn btn-xs btn-default prevBtn hidden-lg hidden-md hidden-sm">
					<span class="fa fa-chevron-left"></span>
					Prev
				</button>
				<button class="btn btn-xs btn-default nextBtn hidden-lg hidden-md hidden-sm">
					Next
					<span class="fa fa-chevron-right"></span>
				</button>
			</div>
		</div>
	</div>
	<div class="image-container-manga">
		<img id="mangaimg" class="CurImage nextBtn" src="<?=base_url()?>./assets/images/manga/<?php echo $title."/".$title." ".$chap."/".$images.""?>">
	</div>
	<div class="container containerNav" style="margin-top:5px;">
		<div class="row">
			<div class="col-xs-12">
				<span class="pull-left">
					<select class="input-xs ChapterSelect" id="chapterSelectBot" onchange="chapterBot();">
						<?php foreach ($chapter as $key) {
							if ($key->chapter == $chap) {
								echo "<option value='".$key->chapter."' selected=''>Chapter ".$key->chapter."</option>";
							}
							else {
								echo "<option value='".$key->chapter."'>Chapter ".$key->chapter."</option>";
							}
						} ?>
					</select>
					<select class="input-xs PageSelect" id="pageSelectBot" onchange="pageBot();">
						<?php foreach ($detail as $key) {
							if ($key->page == 1) {
								echo "<option value='".$key->page."' selected=''>Page ".$key->page."</option>";
							}
							else {
								echo "<option value='".$key->page."'>Page ".$key->page."</option>";
							}
						} ?>
					</select>
				</span>
				<button class="btn btn-xs btn-default prevBtn" onclick="prev();">
					<span class="fa fa-chevron-left"></span>
					<span class="hidden-xs">Prev</span>
				</button>
				<button class="btn btn-xs btn-default nextBtn" onclick="next();">
					<span class="hidden-xs">Next</span>
					<span class="fa fa-chevron-right"></span>
				</button>
			</div>
		</div>
	</div>


<?php $this->load->view('reader/footer'); ?>

<!-- $('#').val().change();
$(.id option[vlue=]).attr('selected','selected') -->