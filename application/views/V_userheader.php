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
		body{
			margin-top: 65px;
		}
		.navbar-red{
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
		.nav-item button{
			margin-left: 15px;
		}
		.carousel-inner img {
    		width: 100%;
			height: 100%;
  		}
		.btn-header{
			background: #117492;
			border-color: #117492;
		}
		.iconakun{
			width: 35px;
			margin-left: 10px;
		}
		.iconlogout{
			width: 30px;
			margin-right: 10px;
		}
		.page-footer{
			background: #117492;
			color: #FFFFFF;
		}
/*
		.page-footer .footer-copyright{
			padding-left: 550px;
		}
*/
		.page-footer a{
			text-align: center;
			color: #FFFFFF;
		}
		.carousel-caption h3,p{
			color: black;
		}
		.chat-dokter{
			text-align: right;
		}
		.media{
			background: #FFEDED;
		}
		.form-group{
			width: 82%;
		}
		.form-control{
			resize: none;
			border-color: black;
			margin-left: 120px;
		}
		.kirim-chat{
			margin-left: 120px;
		}
		footer{
			width: 102%;
		}
	</style>
</head>
<body>
<!--	<div class="container">-->
	<header>
	<nav class="navbar navbar-expand-sm navbar-red fixed-top">
<!--		<div class="navbar-header">-->
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url('asset/bodycare.png') ?>" alt="">
				BodyCare
			</a>
<!--		</div>-->
		<ul class="nav navbar-nav mr-auto" style="margin-bottom: 3px; margin-left: 10px;">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('user')?>">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Cek Kesehatan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('user/daftar_dokter')?>">Daftar Dokter</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About Us</a>
			</li>
		</ul>
		<div class="dropdown">
		<button type="button" class="btn btn-primary dropdown-toggle btn-header" data-toggle="dropdown">
		  <?php echo $this->session->userdata("email") ?>
			<img class="iconakun" src="<?php echo base_url('asset/akun.png') ?>" alt="">
		</button>
		<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Edit Profile</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo base_url('bodycare')?>"><img class="iconlogout" src="<?php echo base_url('asset/logout.png') ?>" alt="">Logout</a>
		</div>
		</div>
	</nav>
	</header>