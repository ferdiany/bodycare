<!doctype html>
<html>
<head>
	<title>Body Care</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.navbar-blue{
			background: #117492;
		}
		.navbar-brand{
			color: #FFFFFF;
		}
		.navbar-brand img{
			margin-left: 30px;
			width: 50px;
		}
		.navbar-nav a{
			color:#FFFFFF;
		}
		.btn-header{
			background: #117492;
			border-color: #117492;
		}
		.carousel-inner img {
    		width: 100%;
			height: 100%;
  		}
		.page-footer{
			background: #117492;
			color: #FFFFFF;
		}
		.page-footer a{
			color: #FFFFFF;
		}
		body{
			background:aqua;
			height: 100%;
			margin-top: 80px;
		}
	</style>
</head>
<body>
<!--	<div class="container">-->
	<header>
	<nav class="navbar navbar-expand-sm navbar-blue fixed-top">
<!--		<div class="navbar-header">-->
			<a class="navbar-brand" href="<?php echo base_url('bodycare') ?>">
				<img src="<?php echo base_url('asset/bodycare.png') ?>" alt="">
				BodyCare
			</a>
<!--		</div>-->
		<ul class="ml-auto" style="margin-bottom: 3px; margin-left: 10px;">
		<div class="dropdown">
		<button type="button" class="btn btn-primary dropdown-toggle btn-header" data-toggle="dropdown">
		  Login
		</button>
		<div class="dropdown-menu">
				<a class="dropdown-item" href="<?php echo base_url('bodycare/viewloginuser')?>">Pasien</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo base_url('bodycare/viewlogindokter')?>">Dokter</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo base_url('bodycare/viewloginpenjual')?>">Penjual</a>
		</div>
		<button type="button" class="btn btn-primary btn-header">
		  Register
		</button>	
		</div>
		</ul>
	</nav>
	</header>