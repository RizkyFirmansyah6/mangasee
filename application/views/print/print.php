<!DOCTYPE html>
<html>
<head>
	<title>Print Manga</title>
	<style>
		table{
			width: 70%;
			margin: 0 auto;
		}
		table td{
			padding: 3px;
			vertical-align: top;
			padding-bottom: 10px;
		}
	</style>
</head>
<body>
<table border="0">
	<?php foreach ($manga as $key) {
	?>
	<tr>
		<td><img src="<?=base_url()?>./assets/images/manga/<?php echo $title[0]->title ?>/<?php echo $title[0]->title." ".$key->chapter ?>/<?php echo $key->image ?>" alt="" class="img-responsive"></td>
		<!-- <td><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'./assets/images/manga/Bleach/Bleach 2/001.jpg';?>" alt="" class="img-responsive"></td> -->
	</tr>
	<?php } ?>
</table>
</body>
</html>