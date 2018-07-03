<?php $this->load->view('main/header'); ?>

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
            return $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
?>

<div class="container">
	<div class="col-sm-12 col-md-8">
	<div class="panel adminRecommendation">
		<div class="panel-heading">
			<b><h3 class="panel-title"><i class="fa fa-thumbs-o-up"></i> Admin Recommendation</h3></b>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-4">
					<img src="<?=base_url()?>./assets/images/cover/<?php echo $recomended[0]->cover ?>" class="img-responsive" alt="Cover">
					<!-- <img src="<?=base_url()?>./assets/images/cover/Golden-Time-Umechazuke.jpg ?>" class="img-responsive" alt="Cover"> -->
				</div>
				<div class="col-sm-8">
					<a href="<?=site_url()?>/Manga/manga/<?php echo $recomended[0]->id_manga ?>" class="seriesLink" style="text-decoration: none;">
						<?php echo $recomended[0]->title ?>
					</a>
					<div style="margin-bottom: 10px">
						Year: <?php echo $recomended[0]->year ?><br>
					</div>
					<div style="margin-bottom: 10px">
						Status: <?php echo $recomended[0]->status ?><br>
					</div>
					<div style="margin-bottom: 10px">
						Genres: <?php foreach ($rec_genre as $key) {
							if ($key === end($rec_genre)) {
								echo $key->genre;
							}
							else {
								echo $key->genre.', ';
							}
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</div>
	<div class="col-sm-12 col-md-4">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-8">
		<div class="panel leftColumn">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-book"></i> Latest Chapters</h3>
			</div>
			<div class="panel-body latestGroup">
				<?php foreach ($late as $key) { ?>
				<a class="latestSeries" href="<?=site_url()?>/Manga/readOnline/<?php echo $key->id_manga ?>/<?php echo $key->chapter ?>" title="Read <?php echo $key->title ?> Chapter <?php echo $key->chapter ?> Online For Free">
					<div class="row">
						<div class="col-xs-4 latestImage">
							<img src="<?=base_url()?>./assets/images/cover/<?php echo $key->cover ?>" alt="Read <?php echo $key->title ?> Chapter <?php echo $key->chapter ?> Online For Free">
						</div>
						<div class="col-xs-8 latestBox">
							<p class="clamp2"><?php echo $key->title." ".$key->chapter; ?></p>
							<time class="timeago" datetime="<?php echo $key->date_posted ?>" title="<?php echo date('F j, Y',strtotime($key->date_posted)); ?>"><?php echo get_time_ago(strtotime($key->date_posted)); ?></time>
							<?php $genr = $this->manga_model->genre($key->id_manga); ?>
							<div class="hidden-xs genreLastest">
								<?php foreach ($genr as $gen) {
									 if ($gen === end($genr)) {
									 	echo $gen->genre;
									 }
									 else {
									 	echo $gen->genre.', ';
									 }
								} ?>
							</div>
						</div>
					</div>
				</a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('main/footer'); ?>