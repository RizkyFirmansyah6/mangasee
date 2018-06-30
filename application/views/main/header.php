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
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
		
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

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
			    color: #337ab7;
			    text-decoration: none;
			}

			a {
			    background-color: transparent;
			}
			img {
			    vertical-align: middle;
			}
			.box-header{
				background-color:#4b72b4;color:#fff
			}
			.footer {
			    min-height: 150px;
			    width: 100%;
			    margin-top: 30px;
			    padding: 30px 0 20px;
			    margin-bottom: 0;
			    position: absolute;
			    left: 0;
			}
			.footer{
				background-color:#666
			}
			.footer .container {
			    max-width: 730px;
			    text-align: center;
			    color: #fff;
			}
			.footerCopyright {
			    color: #ccc;
			}
			.footerLinks a {
			    color: #fff;
			    margin: 5px;
			}
			.bigNavBar{
				background-color:#6788BF
			}
			.navbar-addon{
				background-color:#666;color:#fff
			}
			.navbar-addon .socialBox{
				color:#E9EAED
			}
			.leftLinks a:hover,.rightLinks a:hover,.navbar-addon .socialBox:hover{
				background-color:#E9EAED;color:#666
			}.navbar-fixed-top,.navbar-fixed-top .navbar-toggle:focus,.navbar-fixed-top .navbar-toggle:hover{
				background-color:#4B72B4
			}
			.leftLinks a{
				color:#E9EAED
			}
			.rightLinks a{
				color:#E9EAED
			}
			.navbar-fixed-top{
				border:none
			}
			.navbar-fixed-top .navbar-collapse a{
				color:#fff
			}
			.navbar-fixed-top .navbar-toggle{
				border-color:#4B72B4
			}.navbar-fixed-top .navbar-toggle .icon-bar{
				background-color:#ECF0F1
			}.navbar-fixed-top .navbar-collapse a:hover{
				color:#4B72B4;background-color:#E9EAED
			}
		</style>
		<style>
			.brandImageDiv,.rightWing{
				position:relative
				}
			.bigNavBar{
				height:100px;text-align:center
			}
			.brandImageLarge{
				display:inline;height:80px;margin:10px 0 10px 10px
			}
			.rightWing{
				height:100px;width:450px;text-align:left
			}
		</style>
		<style>
			.navbar-addon{
				margin-bottom:25px;font-size:25px;padding:0;text-align:right;position:relative
			}
			.navbar-addon .socialBox{
				text-align:center;display:inline-block;width:50px;height:50px;padding-top:10px
			}
			.leftLinks a:hover,.navbar-addon .socialBox:hover{
				text-decoration:none
			}
			.navbar-addon .leftLinks{
				height:50px;text-align:left;position:absolute;left:0
			}
			.navbar-addon .rightLinks{
				height:50px;text-align:left;position:absolute;right:0
			}
			.leftLinks a{
				display:inline-block;height:50px;padding:15px 12px 0;font-size:17px
			}
			.leftLinks a:active,.leftLinks a:focus,.leftLinks a:visited{
				outline:0;text-decoration:none
			}
			.rightLinks a{
				display:inline-block;height:50px;padding:15px 12px 0;font-size:17px
			}
			.rightLinks a:active,.rightLinks a:focus,.rightLinks a:visited{
				outline:0;text-decoration:none
			}
		</style>
		<style>
			.adminRecommendation .col-sm-4 {
			    overflow: hidden;
			    position: relative;
			    height: 175px;
			}
			.adminRecommendation .seriesLink {
    			color: #4B72B4;
    			display: block;
				font-size: 24px;
				margin-bottom: 10px;
    		}
    		.adminRecommendation .seriesLink:hover {
    			color: #f91818;
    		}
			@media (min-width: 768px)
			.col-sm-4 {
			    width: 33.33333333%;
			}
			@media (min-width: 992px)
			.col-md-8 {
			    width: 66.66666667%;
			}
			@media (min-width: 992px)
			.col-md-4 {
			    width: 33.33333333%;
			}
			@media (min-width: 768px)
			.col-sm-12 {
			    width: 100%;
			}
			@media (min-width: 768px)
			.col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
			    float: left;
			}
			.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
			    position: relative;
			    min-height: 1px;
			    padding-right: 15px;
			    padding-left: 15px;
			}
			.leftColumn .latestGroup {
			    background-color: #fff;
			}
			.leftColumn .latestSeries, .leftColumn .latestSeries:active, .leftColumn .latestSeries:focus, .leftColumn .latestSeries:hover {
			    color: #666;
			}
			.leftColumn .latestSeries .row {
			    margin: 0;
			    padding: 0;
			    background-color: #E9EAED;
			}
			.leftColumn .latestGroup .row {
			    margin: 0 20px 20px!important;
			}
			.leftColumn .latestImage {
			    display: inline-block;
			    width: 100px;
			    margin: 0;
			    padding: 0;
			    height: 100px;
			    overflow: hidden;
			}
			.leftColumn .latestImage img {
			    width: 100%;
			}
			.leftColumn .latestBox {
			    display: inline-block;
			    margin: 0;
			    padding: 8px 10px;
			    width: calc(100% - 100px);
			}
			.leftColumn .latestBox .clamp2 {
			    margin-bottom: 5px;
			    font-weight: 700;
			}
			.clamp2 {
			    overflow: hidden;
			    text-overflow: ellipsis;
			    display: -webkit-box;
			    -webkit-line-clamp: 2;
			    -webkit-box-orient: vertical;
			}
			.leftColumn .latestSeries time {
			    color: gray;
			}
			.genreLastest {
			    font-size: 12px;
			    margin-top: 6px;
			    font-style: italic;
			    color: #247D8F;
			}
		</style>
	</head>
	<body>
		<!-- <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: #252526;">
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
		</nav> -->
		<div class="hidden-xs bigNavBar">
			<div class="brandImageDiv pull-left">
				<a href="/" title="MangaSee" rel="home">
					<img class="brandImageLarge" src="<?=base_url()?>./assets/images/header/navbar.brand.png ?>" alt="MangaSee">
				</a>
			</div>
		</div>
		<div class="navbar-addon hidden-xs" style="min-height:50px;">
			<div class="leftLinks">
				<a href="/" title="MangaSee - Read Free Manga Online"><i class="fa fa-home"></i> Home</a>
				<a href="/directory/" title="Manga Directory"><i class="fa fa-folder-open"></i> Directory</a>
				<a href="/search/" title="Search For A Specific Manga"><i class="fa fa-search-plus"></i> Explore</a>
			</div>
			<div class="rightLinks">
				<a href="https://www.facebook.com/MangaAndAnimeOnline/" title="Login">
					<i class="fa fa-sign-in"></i> Login
				</a>
				<a href="https://twitter.com/animemangastuff/" title="Sign Up">
					<i class="fa fa-user-plus"></i> Sign Up
				</a>
			</div>
		</div>
		