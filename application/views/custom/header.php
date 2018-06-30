<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="FaberNainggolan">
		<title>CodeIgniter dengan Bootstrap</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			html, body {
			    max-width: 100%;
			    overflow-x: hidden;
			}
			footer {
			  height: 50px;
			  padding-top: 15px;
			  padding-left: 15px;
			  background-color: #252526;
			  width: 100%;
			  color: #959799;
			}
			a {
				color: #959799;
			}
			.margin_detail {
			    margin-left: 50px;
			}
			.margin_lastupdate {
			    margin-right: 50px;
			}
			.margin_isiberita {
				margin-left: 50px;
			    margin-right: 20px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: #252526;">
			<div class="container">
			<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Wisata Kota Malang</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url(); ?>/custom/home"><i class="glyphicon glyphicon-home"></i>Home</a></li>
						<li><a href="<?php echo site_url(); ?>/custom/read"><i class="glyphicon glyphicon-info-sign"></i>List Wisata</a>
						<li><a href="<?php echo site_url(); ?>/custom/tambah">Tambah Wisata</a></li>
						<li><a href="#">Contact</a></li>
				</div>
			</div>
		</nav>
		