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
				color: #959799;
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
			.navbar-fixed-top, .navbar-fixed-top .navbar-toggle:focus, .navbar-fixed-top .navbar-toggle:hover {
			    background-color: #4B72B4;
			}
			.navbar-fixed-top .navbar-collapse a {
			    color: #fff;
			}
			.navbar-fixed-top .navbar-collapse a:hover {
			    color: #337ab7;
			}
			.navbar{
				transition: top 0.3s;
			}
			.navbar.hide{
				transform: translateY(-100%);
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
			.mainWell {
				max-width: 992px;
			    background-color: white;
			    border: 1px solid #ccc;
			    margin-bottom: 0px;
			    padding-bottom: 20px;
			}
			.mainContainer {
				margin-top: 55px;
			    padding: 0px;
			}
			.mainContainer {
			    max-width: 970px;
			}
			.leftImage {
			    padding-right: 0px;
			}
			@media (min-width: 1200px)
			.col-lg-3 {
			    width: 25%;
			}
			@media (min-width: 1200px)
			.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 {
			    float: left;
			}
			@media (min-width: 992px)
			.col-md-3 {
			    width: 25%;
			}
			@media (min-width: 992px)
			.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
			    float: left;
			}
			@media (min-width: 768px)
			.col-sm-3 {
			    width: 25%;
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
			.leftImage img {
			    width: 100%;
			    margin-bottom: 15px;
			    border: 1px solid black;
			}
			img {
			    vertical-align: middle;
			}
			@media (min-width: 1200px)
			.col-lg-9 {
			    width: 75%;
			}
			.row {
			    margin-right: -15px;
			    margin-left: -15px;
			}
			.series-title {
			    padding-top: 5px;
			    margin-bottom: 10px;
			}
			@media (min-width: 1200px)
			.col-lg-8 {
			    width: 66.66666667%;
			}
			.series-title h1 {
			    font-size: 20px;
			    padding: 0px;
			    margin: 0px;
			    display: inline;
			    font-weight: bold;
			}
			.subscriptionBox {
			    text-align: right;
			    padding-left: 50px;
			}
			@media (min-width: 1200px)
			.col-lg-4 {
			    width: 33.33333333%;
			}
			.infoDivider {
			    margin-top: 5px;
			    margin-bottom: 5px;
			}
			hr {
			    height: 0;
			    -webkit-box-sizing: content-box;
			    -moz-box-sizing: content-box;
			    box-sizing: content-box;
			}
			a {
			    color: #337ab7;
			    text-decoration: none;
			}
			a {
			    background-color: transparent;
			}
			.description {
			    line-height: 180%;
			}
			.alert-success {
			    color: #3c763d;
			    background-color: #dff0d8;
			    border-color: #d6e9c6;
			}
			.startReading {
			    margin-top: 10px;
			    margin-bottom: 0px;
			    padding: 10px;
			    text-align: center;
			    font-weight: bold;
			    border: none;
			}
			.startReading a {
			    color: #3e6e2b;
			    width: 100%;
			    display: block;
			}
			.chapter-list {
			    margin-top: 10px;
			    margin-bottom: 20px;
			}
			.chapter-list .list-group-item {
			    font-size: 14px;
			}
			.list-group-item:first-child {
			    border-top-left-radius: 4px;
			    border-top-right-radius: 4px;
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
			.chapter-list .list-group-item .chapterLabel {
			    color: black;
			}
			.chapter-list time {
			    font-style: italic;
			}
			.pull-right {
			    float: right;
			}
			.pull-right {
			    float: right!important;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top device-fixed-height" style="z-index: 10000; top: 0px;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed device-fixed-width" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand device-fixed-width" href="/" style="padding:5px;">
						<img src="<?=base_url()?>./assets/images/header/navbar.brand.small.png" style="height:40px;">
					</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse device-fixed-width">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/directory/">
								<i class="fa fa-folder-open hidden-xs"></i> Directory
							</a>
						</li>
						<li>
							<a href="/search/">
								<i class="fa fa-search hidden-xs"></i> Explore Manga
							</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		