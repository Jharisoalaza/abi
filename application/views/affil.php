<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, maximum-scale=1" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('position'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min'); ?>">
	<!-- icones -->
	<link rel="stylesheet" type="text/css" href="<?php echo font_url(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('theme'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('style'); ?>">
	<!-- font -->


	<meta charset="utf-8">
</head>

<body>
	<?php
	require 'templates/navbar.php';
	?>
	<header>
		<div class="w-100" id="banniere">
			<div class="container-fluid">
				<!-- ici c'est la banniere  -->
			</div>
		</div>
		<section>
			<div class="w-100 text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<!-- debut image de profile -->
							<img src="<?php echo images_url('pro1.jpg'); ?>" class="rounded-circle  img-fluid" width="55">
							<!-- fin image de profile -->
						</div>
						<div class="col-lg-3">
							<h3>
								<?php printf($_SESSION['user']); ?>
								<img src="<?php echo images_url('good.png'); ?>" width="17"> - Affiliation
							</h3>
							<span class="text-muted">
								<small><?=$_SESSION['pays'] ?> </small>
							</span>
						</div>
						<div class="col-lg-3">
							<div class="container">
								<div class="bg-light p-2 text-center r-p col ">
									<small>Compte Premuim</small>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<!-- Ne rien écrire ici -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<br><br>
		<section>
			<div class="w-100 r-p bg-white">
				<div class="container-fluid">
					<div class="row text-center justify-content-around">
						<?php
						if (empty($investisseur)) {
						?>
							<div class="p border-warning border-left p-4">
								<p class="lead">
									Vous n'avez pas encore d'investisseur affilié!
								</p>
							</div>
						<?php
						} else {


						?>
							<table class="table col-sm-11" style="margin-left: 5%; margin-right:2%">
								<thead class="bg-light">
									<td>Nom</td>
									<td>Mail</td>
									<td>Pays</td>
									<td>Pack</td>
								</thead>
								<?php
								foreach ($investisseur as $affil) {
								?>
									<tbody>
										<td><?php echo $affil->nomInvestisseur; ?></td>
										<td><?php echo $affil->mailInvestisseur; ?></td>
										<td><?php echo $affil->paysInvestisseur; ?></td>
										<td><?php echo $affil->codeRepresentant; ?></td>
									</tbody>
								<?php
								}
								?>
							</table>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="w-100 r-p bg-white">
				<div class="container-fluid">

				</div>
			</div>
		</section>
	</header>

</body>
<style type="text/css">
	#banniere {
		background-image: url(img/2.jpg);
		background-size: cover;
		height: 200px;
	}

	#petit_menu {
		box-shadow: 1px 2px 3px #e9e9e9;
	}

	#lg {
		list-style: none;
		display: table;
		line-height: 70px;
	}

	#lg li {
		display: table-cell;
		width: 350px;
		text-align: center;
	}

	#lg li a {
		text-decoration: none;
		color: #111;
	}
</style>
</body>

</html>