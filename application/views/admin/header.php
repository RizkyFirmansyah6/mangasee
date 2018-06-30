<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="FaberNainggolan">
		<title>Administrator Mangasee</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
		
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
			.modal {
			    overflow-y: auto;
			}
			.navbar{
				background-color: #4B72B4;
			}
			.navbar .navbar-collapse a {
			    color: #fff;
			}
			.navbar .navbar-collapse a:hover {
			    color: #337ab7;
			}
			a {
				color: #959799;
			}
		</style>
	</head>
	<body>
		<!-- <nav class="navbar navbar-default navbar-static-top">
	    	<div class="container-fluid">
		        <div class="navbar-header">
		        <img src="<?=base_url()?>./assets/images/header/navbar.brand.small.png" style="height:45px;margin-right: 20px;">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li><a href="<?=site_url('Admin')?>">Manga List</a></li>
		            <li><a href="<?=site_url('Admin/user')?>/latihan/create">User List</a></li>
		          </ul>
		        </div> --><!--/.nav-collapse -->
	    	<!-- </div>
	    </nav> -->


		
		<nav class="navbar navbar-static-top device-fixed-height" style="z-index: 10000; top: 0px;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed device-fixed-width" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand device-fixed-width" href="/" style="padding:5px;">
						<img src="<?=base_url()?>./assets/images/header/navbar.brand.small.png" style="height:40px;margin-right: 20px;">
					</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse device-fixed-width">
					<ul class="nav navbar-nav">
				        <li><a href="<?=site_url('Admin')?>">Manga List</a></li>
				        <li><a href="<?=site_url('Admin/user')?>/latihan/create">User List</a></li>
			        </ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/search/">
								<i class="fa fa-search hidden-xs"></i> Logout
							</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>