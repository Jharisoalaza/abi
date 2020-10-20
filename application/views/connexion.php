<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, maximum-scale=1"/>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('position');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min');?>">
	<!-- icones -->
	<link rel="stylesheet" type="text/css" href="<?php echo font_url();?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('theme');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('style');?>">
	<!-- font -->
	
	
	<meta charset="utf-8">
</head>
<body>
    <?php
    require 'templates/navbar.php';
    ?>
	<br>
	<br><br><br><br>
	<header>
		<section>
			<div class="w-100">
				<h2 class="text-center" >
					Se connecter
				</h2>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 p-4">
							<div class="container">
								<img src="<?php echo images_url('ill1.webp');?>" class="r-p img-fluid">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="container text-center">
								<form style="margin-top: 15%" action="<?php echo site_url('investisseur/login');?>" method="POST">
									<input type="email" name="mail" placeholder="your email." class="btn btn-light"
									style="cursor: text;text-align: left;">

									<br><br>
									<input type="password" name="mdp" placeholder="your password." class="btn btn-light"
									style="cursor: text;text-align: left;">
									<br><BR>
									<a href="payement.php">
										<input type="submit" name=""  class="btn btn-primary" style="background:#04185B;border:2px solid #04185B; " value="Se connecter">
									</a>
								</form>
								<br>
								<small>
									je n'ai pas de compte! <a href="<?php echo site_url('welcome/index'.'#inscription');?>">S'inscrire</a>
								</small>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	</header>
</body>
</html>

<style type="text/css">
	h1{
		font-family: Gordita Bold,sans serif;
		font-size: 35px;
	}
	body{
		font-family: Gordita Light,sans serif;
		font-size: 15px;
		
	}
	input[type="password"]{
		width: 350px;
	
		font-family: Gordita Light,sans serif;
		font-size: 13px;
		background: #e9e9e9;
		cursor: text;

	}
	input[type="email"]{
		width: 350px;
	
		font-family: Gordita Light,sans serif;
		font-size: 13px;
		background: #e9e9e9;
		cursor: text;

	}
	input[type="submit"]{
		width: 350px;
		height: 57px;
		
		font-size: 13px;
		

	}
	
</style>