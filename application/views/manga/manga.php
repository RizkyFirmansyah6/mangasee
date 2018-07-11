<?php $this->load->view('manga/header'); ?>

<?php 
function get_time_ago( $time )
{
    $time_difference = (time() + 60 * 60 * 5) - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            if ($str == 'month' || $str == 'year') {
            	return false;
            }
            else {
            	return $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';	
            }
        }
    }
}
?>

<div class="container mainContainer">
	<div class="well mainWell">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs leftImage">
				<img src="<?=base_url()?>./assets/images/cover/<?php echo $detail[0]->cover ?>">
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="row">
					<input type="hidden" class="Index" value="<?php echo $detail[0]->id_manga ?>">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 series-title">
						<h1 class="SeriesName"><?php echo $detail[0]->title ?></h1>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 subscriptionBox"></div>
				</div>

				<div class="row hidden-lg hidden-md hidden-sm showInfoMobile">
					<div class="col-xs-12">
						<button class="btn btn-sm btn-default showDetails">
						<span class="glyphicon glyphicon-collapse-down"></span> 
						<span class="text">Show Details</span> 
						</button>
					</div>
				</div>

				<span class="details hidden-xs">
				<p class="hidden-lg hidden-md hidden-sm hiddenImage">
				<img src="<?=base_url()?>./assets/images/cover/<?php echo $detail[0]->cover ?>">
				</p>
				
				<?php if ($detail[0]->alt_name != NULL) {
				?>
				<hr class="infoDivider"><!-- Divider --> 

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<b>Alternate Name(s): </b> <?php echo $detail[0]->alt_name ?>
					</div>
				</div>
				<?php
				} ?>

				<hr class="infoDivider"><!-- Divider -->
			 
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<b>Author(s): </b> <a href="/search/?author=Amazake No Hisago"><?php echo $detail[0]->author ?></a>
					</div>
				</div>

				<hr class="infoDivider"><!-- Divider -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<b>Genre(s): </b> 
						<?php foreach ($genre as $key) {
						if ($key === end($genre)) {
							?>
						 	<a href="/search/?genre=Action"><?php echo $key->genre;  ?></a>
						 	<?php
						 }
						 else {
						 	?>
						 	<a href="/search/?genre=Action"><?php echo $key->genre;  ?></a>, 
						 	<?php
						 }
						} ?>
					</div>
				</div>

				<hr class="infoDivider"><!-- Divider -->

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<b>Released:</b> <a href="/search/?year=2016"><?php echo $detail[0]->year ?></a>
					</div>
				</div>
				<hr class="infoDivider"><!-- Divider -->

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<b>Status: </b> 
						<a href="/search/?status=Ongoing"><?php echo $detail[0]->status ?></a>
					</div>
				</div>
				<hr class="infoDivider"><!-- Divider -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<strong>Description: </strong>
						<div class="description"><?php echo $detail[0]->description ?></div>
					</div>
				</div>
				</span>
			</div>
		</div>
		<div class="alert alert-success startReading">
			<a href="<?=site_url()?>/Manga/readOnline/<?php echo $detail[0]->id_manga ?>/1" title="Read <?php echo $detail[0]->title ?> Chapter 1 For Free Online">Begin Chapter 1</a>
		</div>
		<div class="list chapter-list">
			<?php if ($this->session->userdata('logged_in')) { ?>
			<?php foreach ($chapter as $val)
			{
			?>
			<div class="row">	
				<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding-right: 0">
					<a class="list-group-item" chapter="<?php echo $val->chapter; ?>" href="<?=site_url()?>/Manga/readOnline/<?php echo $detail[0]->id_manga ?>/<?php echo $val->chapter ?>" title="Read <?php echo $detail[0]->title ?> Chapter <?php echo $val->chapter; ?> For Free Online">
						<span class="chapterLabel">Chapter <?php echo $val->chapter; ?></span>
						<i class="hidden-xs"></i>
						<?php $tanggal = get_time_ago(strtotime($val->date_posted)); 
						if ($tanggal == false) {
						?>
						<time class="SeriesTime pull-right" datetime="<?php echo $val->date_posted; ?>" datestring="<?php echo date('Ymd',strtotime($val->date_posted)); ?>"><?php echo date($val->date_posted) ?></time>
						<?php }else {
						?>
						<time class="SeriesTime pull-right" datetime="<?php echo $val->date_posted; ?>" datestring="<?php echo date('Ymd',strtotime($val->date_posted)); ?>" title="<?php echo date('m/d/Y',strtotime($val->date_posted)); ?>"><?php echo $tanggal; ?></time>
						<?php
						}
						?>

					</a>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-left: 0">
					<a class="list-group-item" href="<?=site_url('PrintPdf/pdfPrint')?>/<?php echo $val->id_manga."/".$val->chapter ?>" ?> 
					<center><i class="fa fa-download"></i></center>
					</a>	
				</div>
			</div>
			<?php
			} ?>
			<?php }else { ?>
			<?php foreach ($chapter as $val)
			{
			?>
			<a class="list-group-item" chapter="<?php echo $val->chapter; ?>" href="<?=site_url()?>/Manga/readOnline/<?php echo $detail[0]->id_manga ?>/<?php echo $val->chapter ?>" title="Read <?php echo $detail[0]->title ?> Chapter <?php echo $val->chapter; ?> For Free Online">
				<span class="chapterLabel">Chapter <?php echo $val->chapter; ?></span>
				<i class="hidden-xs"></i>
				<?php $tanggal = get_time_ago(strtotime($val->date_posted)); 
				if ($tanggal == false) {
				?>
				<time class="SeriesTime pull-right" datetime="<?php echo $val->date_posted; ?>" datestring="<?php echo date('Ymd',strtotime($val->date_posted)); ?>"><?php echo date($val->date_posted) ?></time>
				<?php }else {
				?>
				<time class="SeriesTime pull-right" datetime="<?php echo $val->date_posted; ?>" datestring="<?php echo date('Ymd',strtotime($val->date_posted)); ?>" title="<?php echo date('m/d/Y',strtotime($val->date_posted)); ?>"><?php echo $tanggal; ?></time>
				<?php
				}
				?>

			</a>
			<?php
			} ?>
			<?php } ?>
		</div>
	</div>
</div>

<?php $this->load->view('main/footer'); ?>