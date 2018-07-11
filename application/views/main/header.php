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
			.panel-heading{
				background-color: #4b72b4;
    			color: #fff;
    			font-size: 18px;
			}

			.panel-title{
    			font-size: 18px;
			}
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
			.description {
    			font-size: 20px;
    		}
    		hr {
			    margin-top: 20px;
			    margin-bottom: 20px;
			    border: 0;
			    border-top: 1px solid #eee;
			}
			.box-body {
			    padding: 15px;
			    background-color: white;
			}
			.mainWell {
			    background-color: #fff;
			    border: none;
			    margin-bottom: 0;
			    margin-left: -15px;
			    margin-right: -15px;
			}
			.well {
			    min-height: 20px;
			    padding: 19px;
			    margin-bottom: 20px;
			    background-color: #f5f5f5;
			    border: 1px solid #e3e3e3;
			    border-radius: 4px;
			    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
			    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
			}
			.searchSubmit {
			    width: 100%;
			}
			.requestMore, .requested, .searchResults, .searchSubmit {
			    margin-top: 15px;
			}
			.btn-success {
			    color: #fff;
			    background-color: #5cb85c;
			    border-color: #4cae4c;
			}
			.btn {
			    display: inline-block;
			    padding: 6px 12px;
			    margin-bottom: 0;
			    font-size: 14px;
			    font-weight: 400;
			    line-height: 1.42857143;
			    text-align: center;
			    white-space: nowrap;
			    vertical-align: middle;
			    -ms-touch-action: manipulation;
			    touch-action: manipulation;
			    cursor: pointer;
			    -webkit-user-select: none;
			    -moz-user-select: none;
			    -ms-user-select: none;
			    user-select: none;
			    background-image: none;
			    border: 1px solid transparent;
			    border-radius: 4px;
			}
			button, html input[type=button], input[type=reset], input[type=submit] {
			    -webkit-appearance: button;
			    cursor: pointer;
			}
			button, select {
			    text-transform: none;
			}
			button {
			    overflow: visible;
			}
			button, input, optgroup, select, textarea {
			    margin: 0;
			    font: inherit;
			    color: inherit;
			}
			.btn-group-lg>.btn, .btn-lg {
			    padding: 10px 16px;
			    font-size: 18px;
			    line-height: 1.3333333;
			    border-radius: 6px;
			}
			.requested .col-xs-4 {
			    width: 100px!important;
			}
			.col-xs-4 {
			    width: 33.33333333%;
			}
			.requested .col-xs-4 img {
			    width: 100%;
			    border: 1px solid gray;
			}
			img {
			    vertical-align: middle;
			}
			img {
			    border: 0;
			}
			.requested .col-xs-8 {
			    width: calc(100% - 100px)!important;
			    padding-left: 0;
			}
			.col-xs-8 {
			    width: 66.66666667%;
			}
			.requested .col-xs-8 .resultLink {
			    font-size: 18px;
			    color: #337AB7;
			    display: block;
			    margin-bottom: 3px;
			}
			.requested .col-xs-8 p {
			    font-size: 14px;
			    margin-bottom: 3px;
			}
			p {
			    margin: 0 0 10px;
			}
			.requestMore {
			    color: gray;
			    background: #E9EAED;
			    border: none;
			    -webkit-box-shadow: none!important;
			    -moz-box-shadow: none!important;
			    box-shadow: none!important;
			}
			.mainContainer {
			    margin-bottom: 5px;
			}

			.mainContainer {
			    max-width: 970px;
			    margin-top: 0;
			}
			@media (min-width: 1200px)
			.container {
			    width: 1170px;
			}
			@media (min-width: 992px)
			.container {
			    width: 970px;
			}
			@media (min-width: 768px)
			.container {
			    width: 750px;
			}
			.container {
			    padding-right: 15px;
			    padding-left: 15px;
			    margin-right: auto;
			    margin-left: auto;
			}
			.mainWell .panel-title {
			    font-size: 12px;
			    font-weight: 700;
			}
			.mainWell .panel-heading {
			    cursor: pointer;
			    height: 30px;
			    padding: 6px 10px 0;
			}
			.mainWell .list-group-item {
			    height: 30px;
			    padding: 5px 10px;
			    font-size: 12px;
			    cursor: pointer;
			}
			a.list-group-item, button.list-group-item {
			    color: #555;
			}
			.list-group-item {
			    position: relative;
			    display: block;
			    padding: 10px 15px;
			    margin-bottom: -1px;
			    background-color: #fff;
			    border: 1px solid #ddd;
			}
			.mainContainer .fa-check {
			    margin-top: 2px;
			    color: green;
			}
		</style>
	</head>
	<body>
		<?php 
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['is_admin'] = $session_data['is_admin'];
				$data['username'] = $session_data['username'];
			}
		?>
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
				<a href="<?=base_url()?>" title="MangaSee - Read Free Manga Online"><i class="fa fa-home"></i> Home</a>
				<a href="<?=site_url('Manga/directory')?>" title="Manga Directory"><i class="fa fa-folder-open"></i> Directory</a>
				<a href="<?=site_url('Manga/search')?>" title="Search For A Specific Manga"><i class="fa fa-search-plus"></i> Explore</a>
			</div>
			<div class="rightLinks">
				<?php 
				if ($this->session->userdata('logged_in')) {
				?>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $data['username'] ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php 
								if ($data['is_admin'] == 1) {
								?>
								<li><a href="<?=site_url('Admin')?>"><i class="fa fa-user-secret"></i> Administrator</a></li>
								<?php } ?>
								<li><a href="<?=site_url('Login/logout')?>"><i class="fa fa-sign-out"></i> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<?php }else {
				?>
				<a data-toggle="modal" href="#modal_Login" title="Login">
					<i class="fa fa-sign-in"></i> Login
				</a>
				<a data-toggle="modal" href="#modal_SignUp" title="Sign Up">
					<i class="fa fa-user-plus"></i> Sign Up
				</a>
				<?php } ?>
			</div>
		</div>
		