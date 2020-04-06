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
		.page-footer a{
			color: #FFFFFF;
		}
		.carousel-caption h3,p{
			color: black;
		}
	</style>
</head>
<!--	<div class="container">-->
	<nav class="navbar navbar-expand-sm navbar-blue fixed-top">
<!--		<div class="navbar-header">-->
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url('asset/bodycare.png') ?>" alt="">
				BodyCare
			</a>
<!--		</div>-->
		<ul class="nav navbar-nav mr-auto" style="margin-bottom: 3px; margin-left: 10px;">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Daftar Keuntungan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About Us</a>
			</li>
		</ul>
		<div class="dropdown">
		<button type="button" class="btn btn-primary dropdown-toggle btn-header" data-toggle="dropdown">
		  Ferdian Yulianto
			<img class="iconakun" src="<?php echo base_url('asset/akun.png') ?>" alt="">
		</button>
		<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Edit Profile</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#"><img class="iconlogout" src="<?php echo base_url('asset/logout.png') ?>" alt="">Logout</a>
		</div>
		</div>
    	</ul>
	</nav>