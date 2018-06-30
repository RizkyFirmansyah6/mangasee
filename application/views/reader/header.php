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
			.navbar {
			    position: relative;
			    min-height: 50px;
			    margin-bottom: 20px;
			    border: 1px solid transparent;
			}
			.navbar-fixed-bottom, .navbar-fixed-top {
			    position: fixed;
			    right: 0;
			    left: 0;
			    z-index: 1030;
			}
			@media (min-width: 768px)
			.navbar-fixed-bottom, .navbar-fixed-top {
			    border-radius: 0;
			}
			.navbar-fixed-top {
			    border: none;
			}
			.navbar-fixed-top, .navbar-fixed-top .navbar-toggle:focus, .navbar-fixed-top .navbar-toggle:hover {
			    background-color: #4B72B4;
			    color: blue;
			}
			.container {
			    padding-right: 15px;
			    padding-left: 15px;
			    margin-right: auto;
			    margin-left: auto;
			}
			@media (min-width: 768px)
			.container {
			    width: 750px;
			}
			@media (min-width: 992px)
			.container {
			    width: 970px;
			}
			@media (min-width: 1200px)
			.container {
			    width: 1170px;
			}
			@media (min-width: 768px)
			.navbar-header {
			    float: left;
			}
			.container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse, .container>.navbar-header {
			    margin-right: -15px;
			    margin-left: -15px;
			}
			@media (min-width: 768px)
			.container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse, .container>.navbar-header {
			    margin-right: 0;
			    margin-left: 0;
			}
			button, input, optgroup, select, textarea {
			    margin: 0;
			    font: inherit;
			    color: inherit;
			}
			button {
			    overflow: visible;
			}
			button, select {
			    text-transform: none;
			}
			button, html input[type=button], input[type=reset], input[type=submit] {
			    -webkit-appearance: button;
			    cursor: pointer;
			}
			button, input, select, textarea {
			    font-family: inherit;
			    font-size: inherit;
			    line-height: inherit;
			}
			.navbar-toggle {
			    position: relative;
			    float: right;
			    padding: 9px 10px;
			    margin-top: 8px;
			    margin-right: 15px;
			    margin-bottom: 8px;
			    background-color: transparent;
			    background-image: none;
			    border: 1px solid transparent;
			    border-radius: 4px;
			}
			@media (min-width: 768px)
			.navbar-toggle {
			    display: none;
			}
			.navbar-fixed-top .navbar-toggle {
			    border-color: #4B72B4;
			}
			.sr-only {
			    position: absolute;
			    width: 1px;
			    height: 1px;
			    padding: 0;
			    margin: -1px;
			    overflow: hidden;
			    clip: rect(0,0,0,0);
			    border: 0;
			}
			.sr-only {
			    position: absolute;
			    width: 1px;
			    height: 1px;
			    padding: 0;
			    margin: -1px;
			    overflow: hidden;
			    clip: rect(0, 0, 0, 0);
			    border: 0;
			}
			.navbar-toggle .icon-bar {
			    display: block;
			    width: 22px;
			    height: 2px;
			    border-radius: 1px;
			}
			.navbar-fixed-top .navbar-toggle .icon-bar {
			    background-color: #ECF0F1;
			}
			.navbar-brand {
			    float: left;
			    height: 50px;
			    padding: 15px 15px;
			    font-size: 18px;
			    line-height: 20px;
			}
			@media (min-width: 768px)
			.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
			    margin-left: -15px;
			}
			.navbar-brand>img {
			    display: block;
			}

			img {
			    vertical-align: middle;
			}
			img {
			    border: 0;
			}
			.navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
			    max-height: 340px;
			}
			@media (min-width: 768px)
			.navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse {
			    padding-right: 0;
			    padding-left: 0;
			}
			@media (min-width: 768px)
			.navbar-collapse.collapse {
			    display: block!important;
			    height: auto!important;
			    padding-bottom: 0;
			    overflow: visible!important;
			}
			@media (min-width: 768px)
			.navbar-collapse {
			    width: auto;
			    border-top: 0;
			    -webkit-box-shadow: none;
			    box-shadow: none;
			}
			.navbar-collapse {
			    padding-right: 15px;
			    padding-left: 15px;
			    overflow-x: visible;
			    -webkit-overflow-scrolling: touch;
			    border-top: 1px solid transparent;
			    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
			    box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
			}
			.collapse {
			    display: none;
			}
			* {
			    -webkit-border-radius: 0!important;
			    -moz-border-radius: 0!important;
			    border-radius: 0!important;
			}
			@media (min-width: 768px)
			.navbar-right {
			    float: right!important;
			    margin-right: -15px;
			}
			@media (min-width: 768px)
			.navbar-nav>li {
			    float: left;
			}
			.nav>li {
			    position: relative;
			    display: block;
			}
			.navbar-fixed-top .navbar-collapse a {
			    color: #fff;
			}
			.navbar-nav>li>a {
			    padding-top: 10px;
			    padding-bottom: 10px;
			    line-height: 20px;
			}
			@media (min-width: 768px)
			.navbar-nav>li>a {
			    padding-top: 15px;
			    padding-bottom: 15px;
			}
			.bookmark, .input-xs, .nextBtn, .pageDescription, .prevBtn, .singlePage, .wholeChapter {
			    border-color: gray;
			}
			.mainWrapper {
			    text-align: center;
			    margin-top: 55px;
			}
			.containerNav {
			    max-width: 768px;
			    background-color: #fff;
			    border: 1px solid gray;
			    margin-bottom: 5px;
			}
			.row {
			    margin-right: -15px;
			    margin-left: -15px;
			}
			.containerNav .col-xs-7 {
			    text-align: left;
			    padding: 5px 10px;
			}

			.col-xs-7 {
			    width: 58.33333333%;
			}
			.col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
			    float: left;
			}
			.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
			    position: relative;
			    min-height: 1px;
			    padding-right: 15px;
			    padding-left: 15px;
			}
			.containerNav .col-xs-5, .containerNav .col-xs-12 {
			    text-align: right;
			    padding: 5px;
			}
			.col-xs-5 {
			    width: 41.66666667%;
			}
			@media (min-width: 1200px)
			.hidden-lg {
			    display: none!important;
			}
			.input-xs {
			    height: 22px;
			    padding: 2px 5px;
			    font-size: 12px;
			    line-height: 1.5;
			    border-radius: 3px;
			}
			.image-container-manga img {
			    max-width: 100%;
			    cursor: pointer;
			}
			.col-xs-12 {
			    width: 100%;
			}
			.pull-left {
			    float: left;
			}
			.pull-left {
			    float: left!important;
			}
			.fa {
			    display: inline-block;
			    font: normal normal normal 14px/1 FontAwesome;
			    font-size: inherit;
			    text-rendering: auto;
			    -webkit-font-smoothing: antialiased;
			    -moz-osx-font-smoothing: grayscale;
			}
		</style>
		<style>
			.nav>li>a {
			    position: relative;
			    display: block;
			    padding: 10px 15px;
			}
		</style>
		<style>
			.pageDescription {
			    margin-top: 5px;
			    padding: 15px 10px;
			}
			h1.heading {
			    font-size: 20px;
			    margin: 0 0 10px;
			}
			.h1, h1 {
			    font-size: 36px;
			}
			.h1, .h2, .h3, h1, h2, h3 {
			    margin-top: 20px;
			    margin-bottom: 10px;
			}
			.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
			    font-family: inherit;
			    font-weight: 500;
			    line-height: 1.1;
			    color: inherit;
			}
			h1 {
			    margin: .67em 0;
			    font-size: 2em;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top device-fixed-height" style="z-index:10000000000000000000">
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
							<a class="wholeChapter" readmode="SinglePage" style="cursor:pointer;padding-top: 15px;padding-bottom: 15px"" onclick="changeMode();">
								<span class="fa fa-files-o"></span> All Pages
							</a>
						</li>
						<li>
							<a class="prevBtn" style="cursor:pointer;padding-top: 15px;padding-bottom: 15px"" onclick="prev();">
								<span class="fa fa-chevron-left"></span>
								<span class="hidden-lg hidden-md hidden-sm">Previous</span>
							</a>
						</li>
						<li>
							<a class="nextBtn" style="cursor:pointer;padding-top: 15px;padding-bottom: 15px"" onclick="next();">
								<span class="fa fa-chevron-right"></span>
								<span class="hidden-lg hidden-md hidden-sm">Next</span>
							</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		